<!--news-->

<div class="find-dog">
	<div class="container relative">
		<h4>Новости</h4>
		<div class="benefit">
                  <br>
                  
                      <!--

                    print '<table border="1" width="100%">';
                    print '<tr><th width="25%">Заголовок</th> <th width="65%">Новость</th> <th width="10%">Дата</th></tr>';
                        foreach ($data as $key => $rez_col){
                             print '<tr>';
                                 foreach ($rez_col as $skey=> $sValue){
                                     print "<td>{$sValue}</td>";
                         }
                             print '</tr>';
                                }
                    print '</table>';
                    !-->


		<div class="box1">
                    <?php
                    foreach ($data as $key => $rez_col){
                       print '<div class="col-md-4 row_10">
				<ul class="service_grid">
   	   			   <i class="s1"> </i>
   	   			   <li class="desc">
   	   				<h3>'.$rez_col["title"].'</h3>
                                            <p>'.$rez_col["date"].'</p>
   	   				<p>'.$rez_col["content"].'</p>';
                                              if(isset($_SESSION['isauth']) && ($_SESSION['isauth']==TRUE)){
                                            print '<table>
                                                <tr>
                                                <td><a href="/main/del?id='.$rez_col["id"].'">Удалить</a></td>
                                                </tr>
                                                <tr>
                                                <td><a href="/edit?id='.$rez_col["id"].'">Редактировать</a></td>  
                                                </tr>
                                            </table>';
                                            print '
                                           
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>';
                                            }
                                            else {
                                            print '
                                           
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>';
                                            }
                    }
                             
                                
                    ?>
			
		</div>
		
		<div class="clearfix"> </div>
	</div>
	</div>
</div>
<!--news-->
<!--about-->
<div class="about">
	<div class="container relative">
		<h4>Обо мне</h4>
		<div class="col-md-8 about-text">
			<p>Before the evolution of wolf into dog, it is posited that humans and wolves worked together hunting game. 
				Wolves were the superior tracker but humans were the superior killer; thus wolves would lead humans to the 
				prey and humans would leave some of the meat to the wolves.the superior tracker but humans were the superior killer; thus wolves would lead humans to the 
				prey and humans would leave some of the meat to the wolves.</p>
			<p class="second-text">It is said that giving up all their belongings and ties, the Pandavas, accompanied by a dog, made their final
				 journey of pilgrimage to the Himalayas. Yudhisthira was the only one to reach the mountain peak in his mortal
				  body, because he was unblemished by sin or untruth.the superior tracker but humans were the superior killer; thus wolves would lead humans to the 
				prey and humans would leave some of the meat to the wolves.</p>
		</div>
		<div class="col-md-4 about-slider">
								    <section class="slider">
							<div class="flexslider">
							  <ul class="slides">
								<li>
									<img src="images/b1.jpg" class="img-responsive" alt="" />
									</li>
									<li>
									<img src="images/b2.jpg" class="img-responsive" alt="" />
									</li>
									<li>
									<img src="images/b1.jpg" class="img-responsive" alt="" />
									</li>
									<li>
									<img src="images/b3.jpg" class="img-responsive" alt="" />
									</li>
							  </ul>
							</div>
						  </section>
						  <!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						  <script type="text/javascript">
							$(function(){
							  SyntaxHighlighter.all();
							});
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--/about-->
<!--about-->
<!--find-dog-->
<div class="find-dog">
	<div class="container relative">
		<h4>Тренировки</h4>
		<div class="benefit">
		<div class="box1">
			<div class="col-md-4 row_10">
				<ul class="service_grid">
   	   			   <i class="s1"> </i>
   	   			   <li class="desc">
   	   				<h3>99.9% Uptime</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
			<div class="col-md-4 row-2">
				<ul class="service_grid">
   	   			   <i class="s2"> </i>
   	   			   <li class="desc">
   	   				<h3>24/7/365 Support</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
			<div class="col-md-4 row-2">
				<ul class="service_grid">
   	   			   <i class="s3"> </i>
   	   			   <li class="desc">
   	   				<h3>Protect Your pc</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
		</div>
		<div class="box1">
			<div class="col-md-4 find">
				<ul class="service_grid">
   	   			   <i class="s4"> </i>
   	   			   <li class="desc">
   	   				<h3>DNS Control</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
			<div class="col-md-4 row-2">
				<ul class="service_grid">
   	   			   <i class="s5"> </i>
   	   			   <li class="desc">
   	   				<h3>Domain Transfer</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
			<div class="col-md-4 row-2">
				<ul class="service_grid">
   	   			   <i class="s6"> </i>
   	   			   <li class="desc">
   	   				<h3>100% Security</h3>
   	   				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
   	   			   </li>
   	   			   <div class="clearfix"> </div>
   	   			</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
</div>
<!--/find-dog-->
<!--Support-->

<!--/Support-->
<!--gallery-->
<div class="gallery">
		<div class="container relative">
			<h4>Галлерея</h4>
		<div class="label-3"> </div>
		<div class="label-4"> </div>
		<h3><span class="left-icon"> </span> <span class="right-icon"> </span><div class="clearfix"> </div></h3>
		<!--Portfolio-->
	<div class="project spl-gallery">
					<div id="portfoliolist">
						<div class="portfolio" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div>
						</div>				
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			               	</div>
						</div>		
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div>
						</div>						
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div>
						</div>	
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div> 
						</div>			
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							     <img src="images/c6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div>
			            </div>	
			            <div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c7.jpg" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
							     <img src="images/c7.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div> 
						</div>			
						<div class="portfolio"  style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="images/c8.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							     <img src="images/c8.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Gym Lite<img src="images/p-search.png" /></h2>
							  	 </div></a>
			                </div>
			            </div>		
			            <div class="clearfix"> </div>
			</div>
</div>
<!--/Portfolio-->
	</div>
</div>
<!--/gallery-->
<!--contact-->
<div class="contact">
	<div class="container relative">
		<h4>Контакты</h4>
		<div class="col-md-2 contact-logo">
			<a href="#"><img src="images/logo.png" /></a>
		</div>
		<div class="col-md-5 contact-address">
				<div class="contact-top-one">
					<h5>Адрес:</h5>
					<h6>ул. Гвардейцев Широнинцев,<span>39/1</span></h6>
				</div>
				<div class="contact-top-one">
					<h5>Телефоны:</h5>
					<p>МТС: +38 099 254 81 92<span><br/>Лайф: +38 093 060 76 62</span></p>
				</div>
				<div class="contact-top-one">
					<h5>E-MAIL:</h5>
					<p><a href="mailto:info@example.com">eugenenadezhdin@gmail.com</a></p>
				</div>
		</div>
		<div class="col-md-5 contact-top-right">
			<form action="POST">
					<input type="text" placeholder="Имя" required="">
					<input type="text" placeholder="Email" required="">
					<input type="text" placeholder="Тема" required="">
					<textarea placeholder="Message" required=""> </textarea>
				<div class="sub-button">
					<input type="submit" value="ОТПРАВИТЬ">
				</div>
			</form>
		</div>
	</div>
</div>
<!--/contact-->