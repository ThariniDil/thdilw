<?php

class Helloworld extends CI_Controller {
    
    
   function __construct() {
        parent::__construct();
        $this->load->model("Login_model");
        if(!empty($_SESSION['id']))
            
            echo "Your fields are empty!";
           // redirect('Home');
           //echo "hello";
    }
 
    public function index() {
        if($_POST) {
            $result = $this->Login_model->validate_user($_POST);
            if(!empty($result)) {
                $data = [
                    'id' => $result->id,
                    'username' => $result->username
                ];
 
                $this->session->set_userdata($data);
                redirect('Home');
            } else {
                $this->session->set_flashdata('flash_data', 'Username or password is wrong!');
                redirect('Login');
            }
        }
 
        $this->load->view("login");
    }
}

    
    
    

