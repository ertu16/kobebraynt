

<?php
 include("baglan.php");

   $sorgu=$vt->prepare('SELECT *FROM yorumlar WHERE onay="1"');
   $sorgu->execute();
   $yorumlist=$sorgu-> fetchAll(PDO::FETCH_OBJ);

  ?>

<!DOCTYPE html>
<!--
	Solitude by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="EN">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Black Mamba</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href="css/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>


  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">


  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1>Kobe Braynt </h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
		            <li><a href="#home" class="smoothScroll">Anasayfa</a></li>
					<li> <a href="#about" class="smoothScroll">Hakkında </a></li>

					<li> <a href="#team" class="smoothScroll">Aile ve Arkadaşları</a></li>
					<li> <a href="#portfolio" class="smoothScroll">Fotoğraflar</a></li>
					<li> <a href="login/index.php" class="smoothScroll">Giriş</a></li>

				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>



		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<h1 class="animated bounceIn">Black Mamba</h1>
	  		 		<p class="animated slideInLeft">Basketbol Efsanevisi </p>
	  		 		<p class="animated slideInRight">Kobe Braynt</p>

	  		</header>
	    </div><!-- /headerwrap -->

		<!--  SERVICES -->
		<div class="greywrap">
			<div class="container" id="about" name="about">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-time"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<h2>Buzzer Beater</h2>
							<p> Son saniye , maçı kazandıracak şut'u kime attırırdınız sorusunun cevabı Kobe BRAYNT.
								Kaç maç kazandırmıştır sizce ? 5 maç mıdır ? yoksa 10 maç mıdır ? hayır 24 maç kazandıran son saniye şut'unu atan oyuncudur Kobe BRAYNT.
							</p>
							<a href="https://www.youtube.com/watch?v=fUxjunYNB60" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-star"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<h2>MVP KOBE BRAYNT</h2>
							<p>Kobe Bryant 2002, 2007, 2009, 2011 yılları NBA All Star organizasyonunda dört defa en değerli oyuncu seçildi.
							 </p>
							<a href="https://www.youtube.com/watch?v=A15wzmaiIq8" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-user"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<div class="fade-up">
								<h2>KOBE KİMDİR ? </h2>
								<p>Kobe kimidir? sorusuna cevap olarak kobe branyt'ın nba yıldızı Shaq ile yaptığı  harika röpartaj. </p>
								<a href="https://www.youtube.com/watch?v=R5t1kXjLYfQ" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
				<h1 class="fade-down centered"> KOBE BRAYNT'IN HAYATI ?  </h1>
				<hr>

				<div class="fade-up col-md-6">

					<p>  Kobe  Bean Bryant, 23 Ağustos 1978'de ABD'nin Pensilvanya eyaletinin Philadelphia kentinde doğdu. NBA ve Avrupa'da basketbol oynayan baba Joe Bryant, tek oğluna, çok sevdiği Japonya'nın Kobe kentinin meşhur bifteğinin adını verdi.

Basketbolla 3 yaşında tanışan Kobe, babasının Sebastiani Rieti takımına transferi sonrası 6 yaşında ailesiyle İtalya'ya taşındı. Burada İtalyanca ve İspanyolca öğrenen, yazları ise basketbol oynamak için ABD'ye giden Bryant, babasının basketbolu bırakmasıyla 1991'de ülkesine döndü.

Philadelphia'daki Lower Merion Lisesi'nde gösterdiği performansla dikkatleri üzerine çeken Bryant, üniversiteye gitmeden doğrudan NBA seçmelerine katılma kararı aldığında 17 yaşındaydı.

1996 draftında Charlotte Hornets tarafından 13. sırada seçilen Kobe'nin hakları, Sırp pivot Vlade Divac karşılığında çocukluğundan beri oynama hayalini kurduğu Los Angeles Lakers tarafından alındı.

Bryant, 18 yaşındayken Lakers formasını giyerek rekoru, Jermaine O'Neal ve Andrew Bynum tarafından kırılıncaya kadar "NBA'de oynayan en genç basketbolcu" unvanını elde etti.

Rakip savunmalara karşı acımasızlığı nedeniyle zehirli bir yılan türü "Kara Mamba" lakabı takılan Kobe, 14 Aralık 2014'teki Minnesota Timberwolves maçında, kariyerinde 32 bin 292 sayısı bulunan Michael Jordan'ı geçerek Kerim Abdülcabbar (38 bin 387) ve Karl Malone'un (36 bin 928) ardından "NBA tarininin en skorer 3'üncü oyuncusu" oldu.

Los Angeles Lakers ile 5 NBA şampiyonluğu kazanan, 18 kez all-star seçilen, 2008'de normal sezonun, 2009 ve 2010'da ise final serisinin en değerli oyuncusu (MVP) ödülünü alan, ABD Milli Takımı formasıyla 2008 ve 2012 Olimpiyatları'nda altın madalya kazanan Kobe Bryant, kariyerinde 1566 maça çıktı. </p>
				</div><!-- col-md-6 -->

				<div class="fade-up col-md-6">

					 	<p> <h5 class=""> REKORLARI </h5>

- Kerim Abdülcabbar ve Karl Malone'un ardından NBA tarininin en skorer 3'üncü oyuncusu... (33 bin 583)
<br>
- NBA tarihinde hem 30 bin sayı hem de 6 bin asist barajını geçen tek oyuncu
<br>
- Bir NBA takımının formasını en uzun süre giyen basketbolcu: 20 sezon (Los Angeles Lakers)
<br>
- Bir maçta 2'nci en fazla sayı atan NBA oyuncusu: 81 sayı
<br>
- Kariyeri boyunca 40 sayının üstünde skor ürettiği maç sayısı: 134 (60 sayı ve üstü 5, 50 sayı ve üstü 25 maç)
<br>
- Wilt Chamberlain'den sonra 50 sayı barajını üst üste en fazla geçen NBA oyuncusu: 4 maç (2007'nin mart ayında sırasıyla 65, 50, 60 ve 50 sayı)
<br>
- NBA sayı kralı: 2005-06 sezonu (35,4) ve 2006-07 sezonu (31,6)
<br>
- NBA All-Star maçında MVP Ödülü'nü en fazla alan oyuncu: 4 kez (2002, 2007, 2009, 2011)
<br>
- NBA All-Star maçına üst üste en fazla seçilen oyuncu: 18 kez
<br>
- NBA All-Star maçı ilk 5'ine en fazla seçilen oyuncu: 16 kez
<br>
- Bir maçta en fazla 3 sayılık basket atan oyuncu: 12
<br>
- Bir NBA maçına ilk 5'te başlayan en genç oyuncu: 18 yaş, 158 gün
<br>
- NBA All-Star maçına ilk 5'te çıkan en genç oyuncu: 19 yaş, 169 gün</p>
<br>				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->


		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1 class="fade-down">KARİYERİ</h1>
				<hr>
				<div class="col-md-3">
					<span class="counter">1566</span>
					<span class="counter-desc"> Bütün Maçları </span>
				</div>
				<div class="col-md-3">
					<span class="counter">33643</span>
					<span class="counter-desc">Bütün Sayıları </span>
				</div>
				<div class="col-md-3">
					<span class="counter">7047</span>
					<span class="counter-desc">Bütün Ribaundları</span>
				</div>
				<div class="col-md-3">
					<span class="counter">6306</span>
					<span class="counter-desc">Bütün Asistleri </span>
				</div>
			</div><!-- container -->
		</section><!-- section -->




		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container section" id="team" name="team">
		<br>
		<div class="row white centered">
				<h1 class="fade-down centered"> AİLESİ </h1>
				<hr class="fade-down title-mb">
				<div class="col-md-4 ">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/natalia.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4> Natallia Diamante Bryant </h4>
						<p> Natalia Diamante Bryant (19 Ocak 2003 doğumlu) Los Angeles, California merkezli bir Amerikan Voleybol Oyuncusu. Kobe Bryant'ın (NBA Star Player) büyük kızıydı. </p>

					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/vanessa.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Vanessa Bryant</h4>
						<p>Vanessa Laine Bryant, 5 Mayıs 1982 tarihinde Los Angeles'da dünyaya geldi. İnstagram üzerinde 1.9 milyon takipçisi bulunan Vanessa Bryant ile tanıştığında 17 yaşındaydı. Tanıştıktan 6 ay sonra Kobe Bryant'ın evlilik teklif ettiği Vanessa Bryant, 4 kız çocuğu sahibidir.</p>

					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/gianna.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Gianna Maria-Onore</h4>
						<p> Kobe Bryant - Vanessa Laine çiftinin ikinci kız çocukları olan Gianna Maria-Onore, 1 Mayıs 2006 tarihinde dünyaya gelmişti. Babasının izinden giden Gianna Maria-Onore, basketbolcu olmak istiyordu. Genç yaşına rağmen yeteneği ile dikkat çeken Gianna, basketbolda geleceğin yıldızları arasında gösteriliyordu</p>

					</div>

				</div>


			</div><!-- row -->
			<div class="row white centered">
				<h1 class="fade-down centered">Yakın Arkadaşları </h1>
				<hr class="fade-down title-mb">
				<div class="col-md-4 ">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/james.jpg" alt="">
						<a href="https://twitter.com/KingJames" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/kingjames/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4> Lebron JAMES</h4>
						<p> Kobe Braynt'ın ezeli rakibi ve can dostu gibi gördüğü lebron James'in bir kaç istatistiği </p>
						<p><a href="https://www.basketball-reference.com/players/j/jamesle01.html" class="btn btn-success">Read more!</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/jordan.jpg" alt="">
						<a href="https://twitter.com/jumpman23" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/jumpman23/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Micheal JORDAN</h4>
						<p>Kobe Braynt'ın abisi olarak gördüğü basketbol'un efsanevisi Micheal Jordan'ın bir kaç istatistiği </p>
						<p><a href="https://www.basketball-reference.com/players/j/jordami01.html" class="btn btn-success">Read more!</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/shaq.jpg" alt="">
						<a href="https://twitter.com/SHAQ" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/shaq/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Shaquille O'Neal</h4>
						<p> Kobe Braynt'ın efsanevi basketbolcu olmasının ardında Shaq ile arkadaşlığı ve dostluğu en önemli oyunculardan olan Shaquille O'neal'in bir kaç istatistiği </p>
						<p><a href="https://www.basketball-reference.com/players/o/onealsh01.html" class="btn btn-success">Read more!</a></p>
					</div>

				</div>


			</div><!-- row -->

		</div><!-- container -->

		<!-- ==== GREYWRAP ==== -->
		<div class="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 centered fade-up">
						<img class="img-responsive" src="images/dear.jpg" align="">
					</div>
					<div class="col-md-6 fade-down">
						<h2>Dear Basketball </h2>
						<p>Dear Basketball,

From the moment
I started rolling my dad’s tube socks
And shooting imaginary
Game-winning shots
In the Great Western Forum
I knew one thing was real:
I fell in love with you.
A love so deep I gave you my all —
From my mind & body
To my spirit & soul.
As a six-year-old boy
Deeply in love with you
I never saw the end of the tunnel.
I only saw myself
Running out of one.
And so I ran.
I ran up and down every court
After every loose ball for you.
You asked for my hustle
I gave you my heart
Because it came with so much more.
I played through the sweat and hurt
Not because challenge called me
But because YOU called me.
I did everything for YOU
Because that’s what you do
When someone makes you feel as
Alive as you’ve made me feel.
You gave a six-year-old boy his Laker dream
And I’ll always love you for it.
But I can’t love you obsessively for much longer.
This season is all I have left to give.
My heart can take the pounding
My mind can handle the grind
But my body knows it’s time to say goodbye.
And that’s OK.
I’m ready to let you go.
I want you to know now
So we both can savor every moment we have left together.
The good and the bad.
We have given each other
All that we have.
And we both know, no matter what I do next
I’ll always be that kid
With the rolled up socks
Garbage can in the corner
:05 seconds on the clock
Ball in my hands.
5 … 4 … 3 … 2 … 1

Love you always,
Kobe
 </p>
						<p><a href="https://www.youtube.com/watch?v=HeaU3Pg6CGw&t=127s" class="btn btn-success">Watch!</a></p>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->

		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1 class="fade-down">KOBE BRAYNT </h1>
				<hr>
				<p class="fade-up">Bu hayatta bir şeyde başarılı olmak istiyorsan, yapmak gereken tek bir şey var; diğer her şeyden fedakarlık yapman. Aile vaktin, arkadaşlarınla geçireceğin zamanlar, iyi bir evlat olmak gibi şeylerden fedakarlık yapman gerekir.</p>
				<p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== PORTFOLIO ==== -->
		<div id="portfolio" name="portfolio">
		<br>
			<div class="row white">
				<h1 class="fade-down centered">FOTOĞRAFLAR</h1>
				<hr class="fade-down title-mb">
			</div><!-- /row -->
			<div class="">
			<div class="">

				<div id="portfolio-carousel">
					<!-- PORTFOLIO IMAGE 1 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto1.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 1</h5>

									<a href="images/foto1.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto2.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 2</h5>

									<a href="images/foto2.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 3 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto3.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 3</h5>

									<a href="images/foto3.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 4 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto4.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 4</h5>

									<a href="images/foto4.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 5 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto5.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 5</h5>

									<a href="images/foto5.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->



					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto8.jpg" alt="">
								<figcaption>
									<h5>FOTOĞRAF 6</h5>

									<a href="images/foto8.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->






			</div><!-- /carousel -->
			</div><!-- /row -->

		</div><!-- /row -->
	</div><!-- /container -->

		<!-- ==== SECTION DIVIDER4 ==== -->
		<section class="section-divider textdivider divider4">
			<div class="container">
				<h1 class="fade-down"> KARİYERİ'NİN  EN İYİ 10 HARAKETİ </h1>

				<a href="https://www.youtube.com/watch?v=T06yJR-Xzd4&t=1s">

<img class="" alt="" src="images/kobee.jpg" /></a>


			</div><!-- container -->

		</section><!-- section -->




		<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1 class="fade-down">Basketbol Efsanesini Aramızdan Ayrıldığı Kara Gün </h1>
				<hr>

				<div class="fade-up">
					<p>26 OCAK 2020</p>
					<img class="" alt="" src="images/rip.jpg" /></a>
				</div>
			</div><!-- container -->
		</section><!-- section -->


		<div id="footerwrap">
			<div class="container">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<? php require('baglan.php');	?>
<div class="panel panel-default">
<div class="panel-heading"> Bu Siteye Söylemek İstedikleriniz</div>
  <div class="panel-body">
  	<form method="get">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Adınız </label>
	    <input type="text" name="ad" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Favori NBA Oyuncunuz </label>
	    <input type="text" name="oyuncu" class="form-control" id="exampleInputEmail1" placeholder="Favori NBA Oyuncunuz">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Yorumunuz </label>
	    <textarea name="yorum" class="form-control" rows="3" ></textarea>
	  </div>
  <input type="submit" value="Gönder" name="gonder" /></a>

	   <?php
$ad=$_GET['ad']; 
$oyuncu=$_GET['oyuncu'];
$yorum=$_GET['yorum'];     
    ?>
    <textarea name="yorummm" class="form-control" rows="3" ><?php echo $ad , $oyuncu , $yorum; ?></textarea>
  


 


	</form>
  </div>
</div>



	 

				<h4 class="fade-up"> What Can I say , Mamba Out!</h4>
			</div>
		</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/init.js"></script>





  </body>

</html>
