<?php

class Controller_Training extends Controller
{
	
	
	function action_index()
	{
			
		echo $this->view->render('training.html.twig');
	}
}
