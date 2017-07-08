<?php
class abstract_userlogin_model extends CI_Model{
    //__construct
    //Constructor of abstract_userlogin_model
    public function __construct() {
       // $this->load->database();
    }
    //validate_userlogin
    //Staff login Validation
    //Takes  in the login code and the desired login code
    //returns object if sucessful
    // 0-> waiter
    // 1-> kitchen
    // 2-> manager
    public function validate_userlogin(){
        $query = $this->db->get_where('users', array(
                    'username' =>$this->input->post('logincode'),
                    'password' =>$this->input->post('uname'))
                );

        
        if ($query->num_rows() == 1){
            //set necessary session variables
            $user = $query->row();
            
            $this->session->set_userdata('userid', $user->id);

            redirect('admin/category');
            // $this->session->set_userdata('role', $user->role);

            // if($user->role == 0)
            // {
            //  $this->session->set_userdata('waiter_id', $user->id);
            //  }
            //    if($user->role == 1)
            // {
            //  $this->session->set_userdata('kitchen_id', $user->id);
            //  }
              //Entry in log
            // $this->load->model('notification_log', 'notifications');
            // $staff_name=$user->fname." ".$user->lname;
          

            // //$count++;

            // $this->notifications->staff_logged($staff_name);
              //Entry in log
            // return true;
        } else {
            redirect('manager/welcome');
        }



    }


    /**
    * Checks whether a user is currently logged in or not
    * Determines whether certain sections of the application can be accessed
    */
    
     public function getcurrency()
    {
        $currency = $this->db->query("select * from configraution")->row();
        return $currency;
    }
    public function chekWaiterLogin()
    {
        if(!$this->session->userdata('waiter_id'))
        {
             redirect('waiter');
        }
    }
     public function chekKitchenLogin()
    {
        if(!$this->session->userdata('kitchen_id'))
        {
             redirect('kitchen');
        }
    }
    

      public function SetTable($table)
    {
         $this->session->set_userdata('tablenumber', $table);
    }

    /**
    * Unsets all session variables for a user - logout
    */
    public function logout()
    {
        $this->session->unset_userdata('userid');
        $this->session->unset_userdata('role');
         $this->session->unset_userdata('kitchen_id');
         $this->session->unset_userdata('waiter_id');
      $this->session->unset_userdata();
    }    

    public function checkTableIdentity()
    {
        //echo "welcome";
        //echo $this->session->userdata('tablenumber');
    //$query = $this->db->query("select * from `table` where inuse=0");

    //if ($query->num_rows() > 0)
    //{
        if ((!$this->session->userdata('tablenumber')) || (!$this->session->userdata('tabletnumber')))
        {
            

            //the tablenumber and tablet number for this customer has not yet been set
            redirect('set_table');
        }
    //}
       
    }
     public function checkCustomerIdentity()
    {
        //echo "welcome";
        //echo $this->session->userdata('tablenumber');
    //$query = $this->db->query("select * from `table` where inuse=0");

    //if ($query->num_rows() > 0)
    //{
        if ((!$this->session->userdata('customer_unique_id')) || (!$this->session->userdata('customername')))
        {
            
          
            //the tablenumber and tablet number for this customer has not yet been set
            redirect('set_table');

        }
    //}
       
    }
    
}
?>
