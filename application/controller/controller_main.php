<?php

class Controller_Main extends Controller
{
    //function __construct() {
        //$this->model=new Model_Main();
        
    //}
            public function action_index() {
                $model_main=  $this->loadModel('main');
                $news=$model_main->get_news();
                $ses=  $this->getSession();
                //echo $this->view->render ('main.html.twig',array ('data'=> $data));
               	echo $this->view->render ('main.html.twig', array('news' => $news, 'ses' => $ses));
	}
        
        public function action_news ($slug) {
            $model_main=  $this->loadModel('main');
            $arr=$model_main->news($slug);
            var_dump($arr);
            //echo $this->view->render ('news.html.twig', array('news' => $arr));
            
            
        }
        
        

            
       // function action_edit(){
        //    $this->model->edit();
        //}
        
        //function action_update(){
            //$this->model->update();
       // }
      
}
