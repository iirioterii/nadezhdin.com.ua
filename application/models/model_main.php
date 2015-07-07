<?php

class Model_Main extends Model
{
    public function get_news() {
        $con= $this->connectDB(); 
        $sel=$con->query("SELECT * FROM news");
        $numrows=$sel->num_rows;
             $x=0;
        while($x<$numrows) {
            $arr[]=$sel->fetch_assoc();
            $x++;
        }
            return $arr;                
    }
    
    public function news($slug) {
        $con=  $this->connectDB();
        $sel=$con->query("SELECT * FROM news WHERE slug='$slug'");
        $arr=$sel->fetch_assoc();
        return $arr;
        
    }
    
    
        
}
    


