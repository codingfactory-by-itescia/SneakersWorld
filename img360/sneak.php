<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SneakWorld</title>
	<link href="https://fonts.googleapis.com/css2?family=Goldman" rel="stylesheet">
	<link rel="stylesheet" href="sneak.css">

</head>


<header>
	
		

		<?php $user = $_SESSION['auth']; 

		if($user) : ?>
		
		<p class="entete">Connecté en tant que <?= $user->prenom ?></p>

		<?php else: ?>

			<p class="entete">Sites de Sneakers de fou furieux<button class="seconnecter">Se connecter</button></p>

		<?php endif; ?>

	
</header>

<h1>SneakersWorld</h1>

<nav>
	<ul>
		<li id="nike"><a href="# ">NIKE </a>
			<ul class="sous">
				<li><a>JORDAN 1 </a></li>
				<li><a>AF1</a></li>
				<li><a> ?????????? </a></li>

			</ul>
		</li>

		<li class="adidas"><a href="#sport ">ADIDAS </a>
			<ul class="sous">
				<li><a href="Nsport.html">YEEZY</a></li>
				<li><a href="Csport.html">Classements</a></li>
			</ul>
		</li>


		<li class="luxe"><a href="#mondeOuvert">LUXE</a>
			<ul class="sous">
				<li><a href="Nmonde.html">OFF WHITE </a></li>
				<li><a href="Cmonde.html">DIOR </a></li>


			</ul>
		</li>


		<li class="autres"><a href="#">AUTRES </a>
			<ul class="sous">
				<li><a href="Nfps.html">???????</a></li>
				<li><a href="Cfps.html">???????</a></li>
			</ul>
		</li>

	</ul>
</nav>


<h3> TENDANCE </h3>



<div class="slidesauto" id="image2">


	<div class="mySlides fade">
		<div class="numbertext">1 </div>
		<img src="image1.jpg" style="width:50%">
		<div class="text">???</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">2 </div>
		<img src="image2.jpg" style="width:50%">
		<div class="text">????</div>
	</div>


	<div class="mySlides fade">
		<div class="numbertext">3 </div>
		<img src="image3.jpg" style="width:50%">
		<div class="text">????</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">4 </div>
		<img src="image4.jpg" style="width:50%">
		<div class="text">???</div>
	</div>


	<div class="mySlides fade">
		<div class="numbertext">5 </div>
		<img src="image5.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">6 </div>
		<img src="image6.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">7 </div>
		<img src="image7.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">8 </div>
		<img src="image8.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">9 </div>
		<img src="image9.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">10 </div>
		<img src="image10.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">11 </div>
		<img src="image11.jpg" style="width:50%">
		<div class="text">??</div>


	</div>
	<div class="mySlides fade">
		<div class="numbertext">12 </div>
		<img src="image12.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">13 </div>
		<img src="image13.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">14 </div>
		<img src="image14.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">15 </div>
		<img src="image15.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">16 </div>
		<img src="image16.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">17 </div>
		<img src="image17.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">18 </div>
		<img src="image18.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">19 </div>
		<img src="image19.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">20 </div>
		<img src="image20.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">21 </div>
		<img src="image21.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">22 </div>
		<img src="image22.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">23 </div>
		<img src="image23.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">24 </div>
		<img src="image24.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">25 </div>
		<img src="image25.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">26 </div>
		<img src="image26.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">27 </div>
		<img src="image27.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">28 </div>
		<img src="image28.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">29 </div>
		<img src="image29.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">30 </div>
		<img src="image30.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">31 </div>
		<img src="image31.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">32 </div>
		<img src="image32.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">33 </div>
		<img src="image33.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">34 </div>
		<img src="image34.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">35 </div>
		<img src="image35.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

	<div class="mySlides fade">
		<div class="numbertext">36 </div>
		<img src="image36.jpg" style="width:50%">
		<div class="text">??</div>
	</div>

</div>





<body>






	<script src="sneak.js"></script>
</body>

</html>