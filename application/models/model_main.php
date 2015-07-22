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
    
    public function parse() {
            
            if ($html=file_get_html('http://weather.bigmir.net/main/harkov/8956/')) {
                $weather=$html->find('h1.hfnill');
                foreach ($weather as $value) {
                return $value->innertext;
                }
            }
                    else {
                        return 'Погода недоступна';
                        }
            //foreach ($parse as $temp) {
                
            //}
            
        }
    
    
        
}
    


