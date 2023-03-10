<?php
	include("Class/Clscontrol.php");
	$p= new control();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.php" style="font-family: fantasy;font-weight:900">D&T HOMIE</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="index.php">S???N PH???M </a>
							<ul class="dropdown">
								<li>
								 <?php
								 $p->loadthuonghieu("select * from thuonghieu order by TenThuongHieu asc")
								 ?>
								</li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="about.php">D???CH V???</a>
							
						</li>
						<li><a href="services.php">GI???I THI???U</a></li>
						
						<li><a href="contact.php">LI??N H???</a></li>
					</ul>
				</div>
				<?php
					
						session_start();
						require("facebook_source.php");
						if(!empty($_SESSION['current_user'])){
						$currentUser= $_SESSION['current_user'];
					?>
				<a href="thongtincanhan.php"><?php echo $currentUser['fullname'];?></a>
						<a href="logout.php">????ng xu???t</a>
						<a href="cartweb.php" class="cart"><i class="icon-shopping-cart" style="color:orange"></i></a>
					<?php }else if(!empty($_SESSION['sdt']) && !empty($_SESSION['matkhau'])){ ?>
				
						<a href="thongtincanhan.php"><?php	echo $_SESSION['sdt']; ?></a>
						<a href="logout.php">????ng xu???t</a>
						<a href="cartweb.php" class="cart"><i class="icon-shopping-cart" style="color:orange"></i></a>
				
					<?php	} 
						else{ ?>
						<a href="login.php" style="color: rgba(0, 0, 0, 0.5);">????NG NH???P </a>/<a href="signup.php"  style="color: rgba(0, 0, 0, 0.5);">????NG K??</a>
							<a href="cartweb.php" class="cart"><i class="icon-shopping-cart" style="color:orange"></i></a>

				<?php } ?>	
			</div>
			
			<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<form id="search" action="" method="post" >
							<li class="search">
								<div class="input-group" >
									<input type="text" placeholder="T??m ki???m" name="name">
									<span class="input-group-btn">
										<button  class="btn btn-primary" type="submit" name="search"><i class="icon-search"></i></button> 
									</span>
								</div>
							</li>
						</form>
					</div>
				</ul>
			 <div style="width:50%;height:25px;color:#000">
				<?php
					if(isset($_POST['search']))
					{
						$s=$_POST['name'];	
						if($s == "")
						{
							echo 'Vui l??ng nh???p t??n s???n ph???m';	
						}
						else
						{
							$sqli= "SELECT * FROM sanpham WHERE TenSP LIKE '%$s%'";
							$count = $p->sotrang($sqli); 
							if($count <=0)
							{
								echo 'kh??ng t??m th???y t??n s???n ph???m v???i t??? kho??: <b>'.$s.'</b>';
							}
							else
							{
								//echo 'T??m th???y '.$count.' t??n s???n ph???m v???i t??? kho??: <b>'.$s.'</b> ';

							}
						}
					}

				?>
        </div>
		</div>
	</nav>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>D???ch v???</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-about">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6">
						<div class="desc">
							<h3>Kem d?????ng ???m OHUI c?? t???t kh??ng?</h3>
							<p>Kem d?????ng ???m OHUI Miracle Moisture Cream l?? m???t s???n ph???m thu???c d??ng m??? ph???m cao c???p OHUI v???i xu???t x??? t??? H??n Qu???c ??? thi??n ???????ng c???a v?? v??n th????ng hi???u m??? ph???m d?????ng da v?? trang ??i???m ???????c review t???t. S???n ph???m ???????c chi???t xu???t t??? nh???ng th??nh ph???n t??? nhi??n n??n ho??n to??n l??nh t??nh v?? ph?? h???p cho m???i lo???i da, v?? ?????c bi???t th??ch h???p v???i l??n da ng?????i ph??? n??? ????ng ??. V?? v???y, khi ?????t ch??n ?????n th??? tr?????ng Vi???t Nam, OHUI lu??n n???m trong s??? l???a ch???n h??ng ?????u c???a ph??i ?????p</p> 
							
							<p>N???u nh?? n??i v??? OHUI c?? t???t kh??ng th?? c?? th??? tr?? l???i l?? OHUI lu??n t??m hi???u nhu c???u v?? ?????i m???i c??ng ngh??? hi???n ?????i nh???t ????? cho ra m???t ??a d???ng nhi???u lo???i s???n ph???m ph???c v??? t??? ch???ng n???ng, d?????ng tr???ng cho ?????n l??m m??? th??m s???o, ch???ng l??o h??a. Ngo??i nh???ng s???n ph???m n???i ti???ng h??ng ?????u nh?? tinh ch???t v??ng OHUI The First Geniture Sym-Micro Essence, s???n ph???m kem d?????ng ???m OHUI Miracle Moisture Cream c??ng n???i b???t kh??ng k??m v???i kh??? n??ng c???p ???m di???u k???.</p>
							<img src="images/sp19.png" />
						</div>
						<div class="desc">
							<h3>Thi???t k??? kem d?????ng ???m OHUI Miracle Moisture Cream</h3>
							<p>Kem d?????ng ???m OHUI Miracle Moisture Cream c?? thi???t k??? d???ng h???p tr??n nh???, v???i t??ng m??u ch??? ?????o l?? m??u h???ng pastel nh??? nh??ng, tinh t??? l??m t??n l??n s??? sang tr???ng v?? qu?? ph??i c???a m???t d??ng m??? ph???m cao c???p. L??? th???y tinh m??? khi c???m c?? c???m gi??c ch???c tay, c???ng c??p. Ngo??i ra, ph???n n???p m??u tr???ng v???i nh???ng ???????ng v??n nh???, l???p l??nh ch???y xung quanh do c??ng ngh??? Diamond Cut c??ng l??m b???t l??n s??? cao c???p v?? gi?? tr??? c???a s???n ph???m.</p> 
							
						</div>
						<div class="desc">
							<h3>C??c th??nh ph???n OHUI Miracle Moisture Cream n???i tr???i</h3>
							<p>OHUI lu??n s??? d???ng nh???ng th??nh ph???n ?????c ????o v?? chuy??n bi???t, ????ng ?????nh h?????ng c???a th????ng hi???u l?? nh??n h??ng m??? ph???m ch??m s??c da cao c???p c???a H??n Qu???c.

S???n ph???m kem d?????ng da ???m m?????t OHUI Miracle Moisture Cream s??? h???u c??c th??nh ph???n (ingredients) n???i tr???i nh?? sau:

Chi???t xu???t Chiffon Ceramide ngu???n g???c thi??n nhi??n, ?????c quy???n c?? k???t c???u ?????m ?????c gi??p t??ng c?????ng h??ng r??o b???o v??? da, b??? sung v?? duy tr?? ????? ???m t??? nhi??n d??i l??u, cho da lu??n m???n m??ng.
Chi???t xu???t hoa m???u ????n c?? c??ng d???ng l??m d???u v?? cung c???p ????? ???m c???c l???n cho da, t??? ???? duy tr?? v?? nu??i d?????ng da kh???e m???nh, lu??n c??ng b??ng, ???m m?????t t???a nh?? b??nh chiffon.</p> 
							
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="images/img_bg_7.jpg" alt="about">
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Productive Staff</span>
					<h2>H??? Tr??? Kh??ch H??ng</h2>
					<p>M???i th???c m???c c???a kh??ch ??i???u ???????c gi???i ????p v?? t?? v???n v??? c??c v???n ????? da hay l???a ch???n c??c lo???i m??? ph???m ph?? h???p cho t???ng lo???i da.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/kh1.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Tr?? T??nh</h3>
						<strong class="role">Chief Executive Officer</strong>
						<p>Ch??ng t??i lu??n ?????t kh??ch h??ng l?? tr??n h???t, s??? h??i l??ng c???a c??c b???n l?? ni???m vui cho ch??ng t??i. I get older I level up</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/kh2.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Th??nh ?????t</h3>
						<strong class="role">Co-Owner</strong>
					<p>Ch??ng t??i lu??n ?????t kh??ch h??ng l?? tr??n h???t, s??? h??i l??ng c???a c??c b???n l?? ni???m vui cho ch??ng t??i. I get older I level up</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="images/kh3.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>Ho??ng Lai</h3>
						<strong class="role">Co-Owner</strong>
						<p>Ch??ng t??i lu??n ?????t kh??ch h??ng l?? tr??n h???t, s??? h??i l??ng c???a c??c b???n l?? ni???m vui cho ch??ng t??i. I get older I level up</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Shop.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

