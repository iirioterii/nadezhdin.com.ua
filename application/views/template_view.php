<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Персональный тренер Евгений Надеждин</title>
<script type="text/javascript" src="/vendor/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Сайт персонального тренера Евгения Надеждина Чемпиона мира и Европы по фитнесу WFF. " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->		
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="/js/jquery.min.js"> </script>
<!--start slider -->
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
<!--end slider -->
<!-- tinyMCE -->
<!--end tinyMCE -->
	<link rel="stylesheet" href="/css/swipebox.css">
	<script src="/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
</head>
<body>
<?php
if(isset($_SESSION['isauth']) && ($_SESSION['isauth']==TRUE))
    {
        echo '<p align="right">Добро пожаловать, '.$_SESSION['login'] .''
                . ' <a href="/auth/logout/">Выйти</a>'
                . '</br> '
                . '<a href="/admin">Панель Администратора</a></p>';
    }
else 
    {
        echo '
<nav class="navbar navbar-default">
  
   
    
        <form id="signin" class="navbar-form navbar-right" role="form" method="POST" action="/auth">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="login" value="" placeholder="Логин">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="text" class="form-control" name="pass" value="" placeholder="Пароль">                                        
                        </div>

                        <button type="submit" class="btn btn-primary">Вход</button>
                   </form>
     
    
  </div>
</nav>';
}
?>
<!--header-->
	<div class="banner banner2">
		<div class="container">
			<div class="banner-right-text">
				<h3>Телефоны:<br/><span>(099)</span><i>254 81 92 </i><br/><span>(093)</span><i>060 76 62 </i></h3>
			</div>
			<div class="top-menu">
				 	<span class="menu"> </span>
					<ul class="nav navbar-nav">
						<li><a class="active" href="/">Главная <span class="sr-only">(current)</span></a></li>
						<li><a href="/about">Обо мне</a></li>
						<li><a href="/training">Тренировки</a></li>
						<li><a href="/gallery">Галерея</a></li>
						<li><a href="/contact">Контакты</a></li>
						<div class="clearfix"> </div>
			  		</ul>
			  </div>
			   <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	 
		</div>
						 <div class="middl-text2">
			  <a href="/"><h2>&nbsp</h2></a>
			  </div>
	</div>
<!--/header-->

<?php include 'application/views/'.$content_view; ?>

<!--footer-->
<div class="fotter">
	 <div class="container">
		<p class="fotter-info">Коопирайт &copy; Все права защищены | Разработано <a href="http://rioter.com/">Yuriy Reva</a></p>

		 <div class="clearfix"> </div>
	 </div>
</div>
<!--/footer-->
</body>
</html>
