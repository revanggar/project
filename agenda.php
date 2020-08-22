<!DOCTYPE html>
<html>
<head>
        <title>Dinas Lingkungan Hidup Kota Medan</title>  
        <link type="text/css" rel="stylesheet" href="css/layout.css" />
        
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/style.css">    
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/custom.css">

        <link type="text/css" rel="stylesheet" href="css/calendar_g.css" />
        <link type="text/css" rel="stylesheet" href="css/calendar_green.css" />
        <link type="text/css" rel="stylesheet" href="css/calendar_traditional.css" />
        <link type="text/css" rel="stylesheet" href="css/calendar_transparent.css" />
        <link type="text/css" rel="stylesheet" href="css/calendar_white.css" />

	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

        <script src="js/daypilot-all.min.js" type="text/javascript"></script>

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
						<li class="nav-item"><a class="nav-link" href="pengumuman.php">pengumuman</a></li>
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

    <!-- Start Agenda -->
        <div id="header">
			<div class="bg-help">
				<div class="inBox">
					<h1 id="logo"><a href='https://code.daypilot.org/17910/html5-event-calendar-open-source'>HTML5/JavaScript Event Calendar</a></h1>
					<p id="claim"><a href="https://javascript.daypilot.org/">DayPilot for JavaScript</a> - AJAX Calendar/Scheduling Widgets for JavaScript/HTML5/jQuery</p>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">

            <div style="float:left; width: 160px;">
                <div id="nav"></div>
            </div>
            <div style="margin-left: 160px;">

                <div class="space">
                    Theme: <select id="theme">
                        <option value="calendar_default">Default</option>
                        <option value="calendar_white">White</option>
                        <option value="calendar_g">Google-Like</option>
                        <option value="calendar_green">Green</option>
                        <option value="calendar_traditional">Traditional</option>
                        <option value="calendar_transparent">Transparent</option>
                    </select>
                </div>

                <div id="dp"></div>
            </div>

            <script type="text/javascript">

                var nav = new DayPilot.Navigator("nav");
                nav.showMonths = 3;
                nav.skipMonths = 3;
                nav.selectMode = "week";
                nav.onTimeRangeSelected = function(args) {
                    dp.startDate = args.day;
                    dp.update();
                    loadEvents();
                };
                nav.init();

                var dp = new DayPilot.Calendar("dp");
                dp.viewType = "Week";

                dp.eventDeleteHandling = "Update";

                dp.onEventDeleted = function(args) {
                    $.post("backend_delete.php",
                        {
                            id: args.e.id()
                        },
                        function() {
                            console.log("Deleted.");
                        });
                };

                dp.onEventMoved = function(args) {
                    $.post("backend_move.php",
                            {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            },
                            function() {
                                console.log("Moved.");
                            });
                };

                dp.onEventResized = function(args) {
                    $.post("backend_resize.php",
                            {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            },
                            function() {
                                console.log("Resized.");
                            });
                };

                // event creating
                dp.onTimeRangeSelected = function(args) {
                    var name = prompt("New event name:", "Event");
                    dp.clearSelection();
                    if (!name) return;
                    var e = new DayPilot.Event({
                        start: args.start,
                        end: args.end,
                        id: DayPilot.guid(),
                        resource: args.resource,
                        text: name
                    });
                    dp.events.add(e);

                    $.post("backend_create.php",
                            {
                                start: args.start.toString(),
                                end: args.end.toString(),
                                name: name
                            },
                            function() {
                                console.log("Created.");
                            });

                };

                dp.onEventClick = function(args) {
                    alert("clicked: " + args.e.id());
                };

                dp.init();

                loadEvents();

                function loadEvents() {
                    dp.events.load("backend_events.php");
                }

            </script>

            <script type="text/javascript">
            $(document).ready(function() {
                $("#theme").change(function(e) {
                    dp.theme = this.value;
                    dp.update();
                });
            });
            </script>

        </div>
        <div class="clear">
        </div>
    <!-- End Agenda -->
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

