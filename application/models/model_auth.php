<?php

class Model_Auth extends Model
{
    public function auth(){
       $login=$_POST['login'];
       $pass=$_POST['pass'];
       $con =  $this->connectDB();
       $sel = $con->query("SELECT * FROM auth WHERE login='$login'");
       $data =  $sel->num_rows;
       if ($data>0) { 
       $arr=$sel->fetch_assoc();
	

		if ($arr['pass'] == md5($pass)) {
			$_SESSION['isauth'] = TRUE;
                        $_SESSION['login'] = $login;
			header('location: /admin');
			
			


		}
		else {
			header('location: /404');
		}
}
else {
	
	header('location: /404');
	
}         
            
            
                        
    }
    
    
    public function logout()
            {
        unset($_SESSION['isauth']);
        header('location: /');
    }
            
}
    


