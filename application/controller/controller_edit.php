<?php

class Controller_Edit extends Controller
{
	
	function action_index($id) {
            $model_edit=$this->loadModel('edit');
            $data=$model_edit->edit($id);
            echo $this->view->render ('edit.html.twig', array('data' => $data));
        }
        
        function action_update(){
            $model_edit=  $this->loadModel('edit')->update();
            header('location: /');
        }
    
        
//        public function action_index(){
//            $model_main=  $this->loadModel('main');
//            $news=$model_main->get_news();
//            //echo $this->view->render ('main.html.twig',array ('data'=> $data));
//            echo $this->view->render ('main.html.twig', array('news' => $news));
//	}
      
}
