<?php
class article_model extends CI_Model{
    //__construct
    public $data;
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }

    function get(){
         $currency = $this->db->query("select articles.*,category.name as category_name from articles join category on articles.category_id=category.id")->result_array();
        return $currency;
    }

    function add($data){
        // $data=array('name'=>$name);
        
        $this->db->insert('articles', $data); 
         // $currency = $this->db->query("select * from category")->result_array();
        // return $currency;
    }
    function get_by_id($id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select * from articles where id=$id")->row_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

    function get_by_category_id($category_id){
        // $data=array('id'=>$id);

         $currency = $this->db->query("select articles.*,category.name as category_name from articles join category on articles.category_id=category.id where category_id=$category_id")->result_array();
         // $currency = $this->db->query("select * from category")->result_array();
        return $currency;
    }

     function edit($id,$category_id,$name,$title,$description,$type_of_article,$article_img,$article_audio,$article_video){
       // $data = array('id'=>$id);
       $data = array('category_id'=>$category_id,'name'=>$name,'title'=>$title,'description'=>$description,'type_of_article'=>$type_of_article,
                    'article_img'=>$article_img,'article_video'=>$article_video,'article_audio'=>$article_audio);
        $this->db->where('id',$id);
        return $this->db->update('articles', $data);
    }

     function delete($id){
       // // $data = array('id'=>$id);
       //   $this->db->delete('articles', array('id' => $id));
       //  if ($this->db->affected_rows() > 0)
       //      return TRUE;
       //  return FALSE;   

        $condition = array(
        'is_deleted' => 1

        );

         $query = $this->db->update('articles',$condition,array('id' => $id));
         //   print_r($query);
         // exit();
         if ($this->db->affected_rows() > 0)
            return 1;
        return 0;
    }

        function like($article_id,$user_id,$id){
            $data=array();
            $data['article_id']=$article_id;
            $data['user_id']=$user_id;
            $data['endorse_on']=date('Y-m-d H:i:s');
            $data['endorse']=1;
            $this->db->where('id',$id);
            return $this->db->update('users_endorse', $data);
        }

        function dislike($article_id,$user_id,$id){
            $data=array();
            $data['article_id']=$article_id;
            $data['user_id']=$user_id;
            $data['endorse_on']=date('Y-m-d H:i:s');
            $data['endorse']=0;
            $this->db->where('id',$id);
            return $this->db->update('users_endorse', $data);
        }
    
        function get_count($article_id,$endorse){
            $result = $this->db->query("select count(*) as endorse_count from users_endorse where  article_id=$article_id and endorse=$endorse")->row_array();
              return $result;
        }
      

        function isLike($article_id){
            $result = $this->db->query("select endorse from users_endorse where  article_id=$article_id")->row_array();
              return $result;
        }
        function isDislike($article_id){
            $result = $this->db->query("select endorse from users_endorse where  article_id=$article_id")->row_array();
              return $result;
        }

        function isAllreadyExist($article_id,$user_id){
              $result = $this->db->query("select id  as endorse_id from users_endorse where user_id=$user_id and article_id=$article_id")->row_array();
              return $result;

        }

        function addEndorse($article_id,$user_id,$endorse){
            $data=array();
            $data['user_id']=$user_id;
            $data['article_id']=$article_id;
            $data['endorse_on']=date('Y-m-d H:i:s');
            $data['endorse']=$endorse;
            $this->db->insert('users_endorse',$data);  
        }

        function getUserEndorse($user_id){
          $result=$this->db->query("select articles.id, articles.name as category_name, articles.type_of_article,articles.title,articles.article_img,articles.article_video,
          articles.description,articles.article_audio, users_endorse.id as users_endorse_id from articles join users_endorse on articles.id=users_endorse.article_id where users_endorse.user_id=".$user_id)->result_array();
          return $result;
        }
    
    }


