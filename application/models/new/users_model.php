<?php
class Users_model extends CI_Model{
    //__construct
    //Constructor of abstract_userlogin_model
    public function __construct() {
        //$this->load->database();
    }

   

    function check_user($username,$password){



         $query = $this->db->get_where('admin', array(
                    'username' =>$password,
                    'password' =>$username)
                );

        if ($query->num_rows() == 1){
            //set necessary session variables
            $user = $query->row();
                
            $this->session->set_userdata('admin_id', $user->id);
            return 1;
    }else{
        return 0;
    }

}

 function check_admin($username,$password){



         $query = $this->db->get_where('admin', array(
                    'username' =>$password,
                    'password' =>$username)
                );

        if ($query->num_rows() == 1){
            //set necessary session variables
            $user = $query->row();
                
            $this->session->set_userdata('admin_id', $user->id);
            return 1;
    }else{
        return 0;
    }

}



    public function get_name($email){
        $query = $this->db->get_where('users', array('email' =>$email));
        //$query=$this->db->query("select 'username' from 'staff' where `id`='".$id."'");
        return $query->row();

    }

    public function get_info($id){
        $query = $this->db->get_where('users', array('id' =>$id));
        //$query=$this->db->query("select 'username' from 'staff' where `id`='".$id."'");
        return $query->row();

    }

    public function get_customer_name($id){
        $query = $this->db->get_where('customers', array('id' =>$id));
        //$query=$this->db->query("select 'username' from 'staff' where `id`='".$id."'");
        return $query->row();

    }

     public function logout()
    {
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('firstname');
        $this->session->unset_userdata('google_user');
        $this->session->sess_destroy();
      // redirect('/admin/'); 
    }

    public function adduser(){
        $p1=$this->input->post('password');
        $p2=$this->input->post('repassword');
        if(strcmp($p1, $p2)!==0){
            $this->session->set_flashdata('failmsg', "password not matching");
        }
        else{
        $data = array(
            'name'     =>   $this->input->post('name'),
            'email'     =>   $this->input->post('email'),
            'phone_no'     =>   $this->input->post('phone'),
            'username'     =>   $this->input->post('username'),
            'logincode'     =>$this->input->post('password')
        );
        return $this->db->insert('customers', $data);
        } 
    } 

     public function add($data){
        // print_r($data);


        // $data = array(
        //     'name'     =>   $this->input->post('name'),
        //     'email'     =>   $this->input->post('email'),
        //     'phone_no'     =>   $this->input->post('phone'),
        //     'username'     =>   $this->input->post('username'),
        //     'logincode'     =>$this->input->post('password')
        // );
        return $this->db->insert('users', $data);
        } 

         public function addFbUser($data){
        
        return $this->db->insert_id('users', $data);
        } 
        public function addGoogleUser($data){
        $res_data = array(
            'email'     =>   $data['email'],
            'firstname'     =>   $data['given_name'],
            'lastname'     =>   $data['family_name'],
            'gender'     =>   $data['gender'],
            'login_via_google'     =>1
        );
        $this->db->insert('users', $res_data);
        // echo $this->db->last_query();
        } 

    public function checkGoogleAvailablity($email){
        
        $query = $this->db->get_where('users', array('login_via_google' =>1,'email'=>$email));
        //$query=$this->db->query("select 'username' from 'staff' where `id`='".$id."'");
        return $query->row();
        } 


      
    
 }