<!doctype html>
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
    
    <title>Registration</title>

<!-- Internal Style Sheet -->

    <style>
      body {
        font-family: sen;
      }

      /* navbar login & register */

      hr {
        margin: 0;
        border: 1.25pt solid !important;
      }

      p {
        padding-left: 12px;
        margin-top: 4px;
      }

      /* form register*/

      .invalid-feedback {
        padding-left: 0.75rem;
      }    
    </style>
  </head>
  <body>
    <div class="content">
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
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->


      <div class="container" style="padding-top: 100px">
        <div class="row justify-content-center pt-5"> 
          <div class="lebar-450">
            <nav class="navbar navbar-expand-sm navbar-light bg-putih" style="padding: 0px; font-size: 25pt; ">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                  <li class="nav-item w-50">
                    <a class="nav-link" style="padding-left: 0" href="login.php">Login </a>
                  </li>

                  <li class="nav-item w-50">
                    <a style="color: green; font-weight: bold; padding-left: 0" class="nav-link" href="register.php">Register</a>
                    <hr>
                  </li>
                </ul>
              </div>
            </nav>

            <form action="sistem_login/register_user.php" method="POST" class="needs-validation" novalidate>
              <div class="form-group">
                <input type="text" name="email_user" class="iniemail form-control border-bawah" id="txtEmail" placeholder="Email" required>
                <div class="invalid-feedback">Required field</div>
                <span id="invemail"></span>
              </div>

              <div class="form-group">
                <input type="password" name="pass_user" class="form-control border-bawah" placeholder="Password" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input type="text" name="nd_user" class="form-control border-bawah" placeholder="Name" required>
                  <div class="invalid-feedback">Required field</div>
                </div>

                <div class="col-md-6 mb-3">
                  <input type="text" name="nb_user" class="form-control border-bawah" placeholder="Surname" required>
                  <div class="invalid-feedback">Required field</div>
                </div>
              </div>

              <div class="form-group">
                <input type="text" name="alamat" class="form-control border-bawah" placeholder="Address" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-group">
                <input type="text" name="kodepos" class="form-control border-bawah" placeholder="Postcode" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <div class="form-group">
                <input type="text" name="phone" class="form-control border-bawah" placeholder="Phone" required>
                <div class="invalid-feedback">Required field</div>
              </div>

              <button type="submit" name="register" class="btn btn-dark w-100" style="font-size: 13pt" required>Register</button>
            </form>

            <div class="text-center">
              <small class="text-muted">Already have an account?</small>
              <button class="text-muted bold" style="text-transform: none; border: none; background-color: transparent; text-decoration: underline; font-size: 10pt; outline: none;" onclick="window.location.href='login.php'">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
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

    
    <script>
      var navbar = document.querySelector('nav');
      var konten = $(".content");

      window.onscroll = function() {
        var height = konten.height();
        if (window.pageYOffset > height) {
          navbar.classList.add('scrolled');
          //konten.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
          //konten.classList.remove('scrolled');
        }
      };

      //Validasi Form
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          //validasi real-time
          var inputs = document.getElementsByClassName('form-control');
          var validation = Array.prototype.filter.call(inputs, function(input) {
            input.addEventListener('blur', function(event) {
              // reset
              input.classList.remove('is-invalid');
              input.classList.remove('is-valid');

              // cek validasi
              if (input.checkValidity() === false) {
                input.classList.add('is-invalid');
                
              }
              else {
                input.classList.add('is-valid');
              }
              
              input.classList.add('was-validated');
            }, false);
          });

          //validasi email
          var iniemail = document.getElementsByClassName('iniemail');
          var validation = Array.prototype.filter.call(iniemail, function(email) {
            email.addEventListener('blur', function(event){
              var mail = $('#txtEmail').val();
              var reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  //pola email : xxxx@xxxx.xxx
              
              //cek validasi
              if(!reg.test(mail)){
                email.classList.add('wrong-email');
                $('#invemail').html("<p>Enter a valid email address</p>").css({"color": "#dc3545", "font-size": "8pt"});
              }
              else {
                email.classList.add('is-valid');
                email.classList.remove('wrong-email');
                $("p").remove();
              }
            }, false);
          });

          //validasi saat tombol submit diklik
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              var mail = $('#txtEmail').val();
              var reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }

              if(!reg.test(mail)){
                event.preventDefault();
                event.stopPropagation();
              }
              
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

<!-- Library JavaScript -->

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


