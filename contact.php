<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "alan271013@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Контакты</title>

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">

	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>


</head>

<body class="contact-page">
	<div class="wrap-body">
		<div class="header">
			<!--////////////////////////////////////Navbar-->
			<div id='cssmenu' >
				<ul>
				   <li><a href='index.html'><span>Главная страница</span></a></li>
				   <li class=' has-sub'><a href='sports.html'><span>Спортивный инвентарь</span></a>
					  <ul>
						 <li class='has-sub'><a href='#'><span>Фехтовальное снаряжение</span></a>
							<ul>
							   <li><a href='#'><span>Гарды</span></a></li>
							   <li class='last'><a href='#'><span>Клинки</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Гантели</span></a>
							<ul>
							   <li><a href='#'><span>Грифы</span></a></li>
							   <li class='last'><a href='#'><span>Блины</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li class="active"><a href='contact.html'><span>Контакты</span></a></li>
				</ul>
			</div>
		</div>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Главная страница</a></li>
						<li><a href="contact.html">Контакты</a></li>
					</ul>
				</div>
				<div class="zerogrid">
					<div class="row">
						<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Контакты</h1>

						<div class="col-1-3">
							<div class="wrap-col">
								<h3 style="margin: 20px 0">Контактная информация</h3>
								<strong>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</strong>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
								<p>проспект Пацаева 3/73<br>
									город Долгопрудный, Московская область
									Российская Федерация</p>
								   	<p>+7 (915) 313-41-40 <br>
									<p>inbox@dolspecexport.com</p>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="contact">
									<h3 style="margin: 20px 0 20px 30px">Отправить сообщение</h3>
									<div id="contact_form">
										<form name="form1" id="ff" method="post" action="contact.php">
											<label class="row">
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="text" name="name" id="name" placeholder="Введите имя" required="required" />
													</div>
												</div>
												<div class="col-1-2">
													<div class="wrap-col">
														<input type="email" name="email" id="email" placeholder="Введите email" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="col-full">
													<div class="wrap-col">
													<input type="text" name="subject" id="subject" placeholder="Тема сообщения" required="required" />
													</div>
												</div>
											</label>
											<label class="row">
												<div class="wrap-col">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
													placeholder="Введите текст сообщения"></textarea>
												</div>
											</label>
											<center><input class="sendButton" type="submit" name="submitcontact" value="Отправить"></center>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-2">
								<div class="wrap-col">
									<p style="font-size: 1.9rem; font-weight: 300; letter-spacing: .19em; color: #fff; margin-bottom: .62em;">ООО "ДолСпецЭкспорт"</p>
								</div>
							</div>

							<div class="col-1-2">
								<div class="wrap-col">
									<div class="row">
										<h3 class="widget-title">Контакты</h3>
										<p>141707, РФ, Московская область, г. Долгопрудный, проспект Пацаева, 3/73
										<br>
										+7 (915) 313-41-40
										<br>
										inbox@dolspecexport.com
										</p>
									</div>
								</div>
							</div>
				</div>
			</div>
		<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ zAnimal - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
					<ul class="quick-link">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
		</div>
		</footer>
	</div>
</body>
</html>