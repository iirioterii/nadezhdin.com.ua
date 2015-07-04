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
        if($ins) {
        header('location: /admin');
      
            
            
        }

        
 
        
    }         
                        
}
    

























   