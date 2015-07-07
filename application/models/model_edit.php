<?php

class Model_Edit extends Model
{

    public function edit($id){
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
    


