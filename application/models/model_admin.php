<?php

class Model_Admin extends Model
{
    
    public function insert() {
        $con=$this->connectDB();
        $title=$_POST['title'];
        $date=$_POST['date'];
        $content=$_POST['content'];
        $slug=$this->transliterate($title);
        $ins=$con->query("INSERT INTO news (title, date, content, slug) VALUES  ('$title', '$date', '$content', '$slug')");
        print "Новость $title добавлена";
    }     
    
    public function del($id) {
        $con=  $this->connectDB();
        $del=$con->query("DELETE FROM news WHERE id='$id'");
        if ($del) {
            header('location: /'); 
        }
        else {
            return FALSE;
            
        }
    }

    public function edit($id) {
        $con=  $this->connectDB();
        $sel=$con->query("SELECT * FROM news WHERE id='$id'");
        $data=$sel->fetch_assoc();
        return $data;
    }
    
    public function update() {
        $title=$_POST['title'];
        $date=$_POST['date'];
        $content=$_POST['content'];
        $id=$_POST['id'];
        $con=  $this->connectDB();
        $upd=$con->query("UPDATE news SET title='$title', date='$date', content='$content' WHERE id='$id'");
        header('location:/main');
    }
      
    public function login(){
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
                        //var_dump($_SESSION);
			//header('location: /admin');
                        print 'Успешно';
                        
			
			


		}
		else {
                   print 'Не правильная пара логин/пароль';
		}
    }
    else {
	
	print 'Не правильная пара логин/пароль';
	
    }         
            
            
                        
    }
    
    
    public function logout()
            {
        unset($_SESSION['isauth']);
        header('location: /');
    }
    
}
    

























   