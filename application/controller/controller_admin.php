<?php

class Controller_Admin extends Controller
{
//	function __construct() {
//            $this->model= new Model_Admin;
//            
//        }
	public function action_index()	{
            
            $ses=$this->getSession();
            echo $this->view->render ('admin.html.twig', array('ses' => $ses));
            
	}
        
        public function action_login() {
            $this->loadModel('admin')->login();
            $ses=$this->getSession();
            echo $this->view->render ('admin.html.twig', array('ses' => $ses));
        }
        
        public function action_logout() {
            $this->loadModel('admin')->logout();
        }
        
        public function action_add() {
            $this->loadModel('admin')->insert();
            //$ses=$this->getSession();
            //echo $this->view->render ('admin.html.twig', array('ses' => $ses));
            $this->action_index();
        }
        
        public function action_del($id) {
            $del=$this->loadModel('admin')->del($id);
        }
        

        
        
        
        
      
}
