<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Dinas Lingkungan Hidup Kota Medan</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">

	<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  font-family: Arial, Helvetica, sans-serif;
	}

	/* Float four columns side by side */
	.column {
	  float: left;
	  width: 25%;
	  padding: 0 10px;
	}

	/* Remove extra left and right margins, due to padding */
	.row {margin: 0 -5px;}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Responsive columns */
	@media screen and (max-width: 600px) {
	  .column {
	    width: 100%;
	    display: block;
	    margin-bottom: 20px;
	  }
	}

	/* Style the counter cards */
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  padding: 5px;
	  text-align: center;
	  background-color: white;
	}
	.header2{
	border-radius: 10px;
	padding-top: 8px;
	margin: 0px 0px 100px 150px;
	background-color:green;
	width: 1080px;
	height: 410px;
	text-align: left;
}


	</style>
</head>

<body>
	<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="home.php">
          <img src="images/logo-web.png" alt="" />
        	</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        		</button>
        		<div class="collapse navbar-collapse" id="navbars-rs-food">
         	    <ul class="navbar-nav ml-auto" style="font-family: 'Athiti', sans-serif;">
            	<li class="nav-item active"><a class="nav-link" href="home.php">Beranda</a></li>
            	<li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a></li>
            	<li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
            	<li class="nav-item dropdown">
              	<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Profil</a>
            	<div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="vimi.php">Visi Misi</a>
                <a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a>
              </div>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
	
	<!-- End header -->
	<br><br>
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Galeri</h2>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gal1.jpeg">
							<img class="img-fluid" src="images/gal1.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gal2.jpeg">
							<img class="img-fluid" src="images/gal2.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gal3.jpeg">
							<img class="img-fluid" src="images/gal3.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gal4.jpeg">
							<img class="img-fluid" src="images/gal4.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gal5.jpeg">
							<img class="img-fluid" src="images/gal5.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/galeripkl.jpeg">
							<img class="img-fluid" src="images/galeripkl.jpeg" alt="Gallery Images">
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	<button type="button" class="btn btn-dark rounded-circle p-0 m-3 fixed-bawah" style="height: 45px; width: 45px; float: right;" onclick="document.getElementById('chatbot').style.display='block'">
		<a href="kontak.php"><i class="fa fa-comment" style="color: white; font-size: 18pt; padding-top: 3px; padding-left: .5px"></i></a>
	</button>
	<!-- Start Footer -->
	<footer style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;" class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Opening hours</h3>
					<p class="lead">Senin - Jumat : </span> 09.00 - 16.30 WIB</p>
					<p class="lead">Sabtu - Minggu :</span> Libur </p>
				</div>
				<div class="col-sm-4">
					<h3>Contact information</h3>
					<p class="lead">Jl. Jendral A.H Nasution No. 32 Medan 2011</p>
					<p class="lead"><a href="#">061-7873439</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-sm-4">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.google.com/"><i class="fa fa-google" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="http://mail.google.com/mail"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p style="text-align: center;" class="company-name">Copyright ©2020 All rights reserved By : <a href="#">RuGaZa</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="home.php">
          <img src="images/logo-web.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-rs-food">
          <ul class="navbar-nav ml-auto" style="font-family: 'Athiti', sans-serif;">
            <li class="nav-item active"><a class="nav-link" href="home.php">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a></li>
            <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Profil</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-a">
                <a class="dropdown-item" href="vimi.php">Visi Misi</a>
                <a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a>
              </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="login.php">Login</a>
                                <a class="dropdown-item" href="register.php">Register</a>
                            </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>