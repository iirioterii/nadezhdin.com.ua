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
        $res=$sel->fetch_assoc();
        print '<form method="POST" action="/main/update">'
     . '<p>Дата </p><input type="text"  name="date" placeholder="'.$res['date'].'"><br>'
     . '<p>Заголовок </p><input type="text" name="title" size=30 placeholder="'.$res['title'].'"/>'
     . '<br><p>Текст </p><textarea name="content" cols=50 rows=20 placeholder="'.$res['content'].'"></textarea>'
     . '<input type="hidden" name="id" value='.$res['id'].'><br>'
     . '<input type="submit" name="submit" value="Редактировать"></form>';
        
//        if (isset($_POST['submit'])){
//        $id=$_GET['id'];
//        $title=$_POST['title'];
//        $date=$_POST['date'];
//        $content=$_POST['content'];
//        $con->query("UPDATE news SET title='$title', date='$date', content='$content' WHERE id='$id'");
//        }
            
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
    


