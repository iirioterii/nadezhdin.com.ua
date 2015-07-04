<!--admin-->
<div class="container">
<h2> Реадактирование новости</h2>
<br>
<?php
   print '<form method="POST" action="/edit/update">'
     . '<p>Дата </p><input type="text"  name="date" placeholder="'.$data['date'].'"><br>'
     . '<p>Заголовок </p><input type="text" name="title" size=30 placeholder="'.$data['title'].'"/>'
     . '<br><p>Текст </p><textarea name="content" cols=50 rows=20 placeholder="'.$data['content'].'"></textarea>'
     . '<input type="hidden" name="id" value='.$data['id'].'><br>'
     . '<input type="submit" name="submit" value="Редактировать"></form>';
?>
</div>


<!--admin-->