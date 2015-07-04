<?php

class Controller_Main extends Controller
{
    //function __construct() {
        //$this->model=new Model_Main();
        
    //}
            public function action_index(){
                $model_main=  $this->loadModel('main');
                $news=$model_main->get_news();
                //echo $this->view->render ('main.html.twig',array ('data'=> $data));
               	echo $this->view->render ('main.html.twig', array('news' => $news));
	}
        
           // function action_del() {
            //    $this->model->del_news();
            
       // }
       // function action_edit(){
        //    $this->model->edit();
        //}
        
        //function action_update(){
            //$this->model->update();
       // }
      
}
