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
						<li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Profil</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="vimi.php">Visi Misi</a>
								<a class="dropdown-item" href="organisasi.php">Struktur Organisasi</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<br><br><br><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63714.55981481683!2d98.64480609099489!3d3.550566531700597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313194ffffffff%3A0xbf1920f80d262837!2sDinas%20Lingkungan%20Hidup%20Kota%20Medan!5e0!3m2!1sid!2sid!4v1596422893349!5m2!1sid!2sid" width="1400" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<!-- Start Contact -->
	<br />
  	<br />
  	
	<div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
	<!-- End Contact -->
	<br><br>
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
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">blablabla</a> Design By : 
					<a href="#">Rugaza</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
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
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"comment/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"comment/fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
</body>
</html>