<?php

class Controller_Auth extends Controller
{
//  function __construct()
//	{
//		$this->model = new Model_Auth();
//                	}
                        
	public function action_index()
	{
            $model_auth=  $this->loadModel('auth');    
            $model_auth->auth();
               
	}
        function action_logout()
        {
                $model_auth=  $this->loadModel('auth');
                $model_auth->logout();
        }
	
}
