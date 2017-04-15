
<?php
 include_once("model/model.php");

 Class Controller{
  public $model;

  public function Controller()
  {
   $this->model=new Model();
  }

  public function show()
  {
   $result = $this->model->insert_data();
   include 'view/view.php';
  }
  public function select()
  {
      $result = $this->model->select_data();
      include 'view/view1.php';
      
  }
  
 }
?>
