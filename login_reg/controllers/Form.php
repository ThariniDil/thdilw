<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Form extends CI_Controller {
 
 
	public function __construct() {
 
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Form_model');
                $this->load->database();
	}
    
	public function index() {
		
		//now load your model
		$this->Form_model->addData($data);
                redirect('Form/select');
            
 
		
	}
        
        
            public function select() {
            
            //after adding the data in database we will select the data from the database to show in the view
            $data['showData'] = $this->Form_model->viewData();
            
            
            // now send the selected data in to the view
            $this->load->view('form_view',$data);
           
            
            //var_dump ($this);
            
        }
        
        
             public function editData() {
                 
           $id = $this->input->post('id');
                 
                
                 
                 $data['editdata'] = $this->Form_model->editData($id);
                 $this->load->view('edit' ,$data);
                 
             }
             
             public function updateData(){
                 
                 
                 
                 $this->Form_model->updateData();
                redirect('Form/index');
            
                 
                 
                 
             }

        
  }
        
        
