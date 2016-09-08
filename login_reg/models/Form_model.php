<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Form_model extends CI_Model {
 
 
	public function __construct() {
 
		parent::__construct();
                $this->load->database();
                
	}
        
        public function addData($data) {
            
            
            //here wee will egt the data from the form and put in array $data
		$data = array('name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'contact'=>$this->input->post('contact'),
				'address'=>$this->input->post('address')
		);
           
            return $this->db->insert('form',$data);
            
    }
    
	 public function viewData()
                 
    {
             
                         $this->db->select('*');
			 $this->db->from('form');
                         $query = $this->db->get();
			 $result = $query->result();
			 return $result;
                         
    }
    
    
          public function editData($id)
          {
              
           
             $id = $this->input->post('id');
             $name = $this->input->post('name');
             $email = $this->input->post('email');
             $contact = $this->input->post('contact');
             $address = $this->input->post('address');

              $query = $this->db->query("SELECT * FROM `form`");
              $result = $query->result_array();
              return $result;
              

              
              
              
          }
          
          public function updateData($data) {   
              
              
              $id = $this->input->post('id');
              
              
              $data = array( 'id'=>$this->input->post('id'),
                                'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'contact'=>$this->input->post('contact'),
				'address'=>$this->input->post('address')
		);
              
              
              $this->db->where('id',$id);
              $this->db->update('form',$data);
              
          }
    
}