<?php

class Model_Edit extends Model
{
     
    
    
    public function del_news() {
        if(isset($_SESSION['isauth']) && ($_SESSION['isauth']==TRUE)){
        $id=$_GET['id'];
        $con=  $this->connectDB();
        $del=$con->query("DELETE FROM news WHERE id='$id'");
        header('location: /main');
        
    }
    header('location:/404');
    }
    
    
    public function edit(){
        $id=$_GET['id'];
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
    
    
    
 
            
}
    


