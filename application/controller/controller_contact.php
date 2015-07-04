<?php

class Controller_Contact extends Controller
{
	
	function action_index()
	{
                
		echo $this->view->render('contact.html.twig');
	}
}
