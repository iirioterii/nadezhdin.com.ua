<?php

class Controller_Edit extends Controller
{
	function __construct() {
            $this->model= new Model_Edit;
            
        }
	function action_index()
	{
                $data=$this->model->edit();
                echo $this->view->render('edit.html.twig', $data);
                
                
                
	}
        function action_update(){
            $this->model->update();
        }
    
      
}
