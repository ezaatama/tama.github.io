<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Portofolio Front End Web Reza Putra Pratama">
	<meta name="keywords" content="portofolio front end web">
	<meta name="author" content="reza putra"> 
	<title>My Portofolio</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./bootstrap5/bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="./bootstrap5/bootstrap5/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	
</head>
<body>
	<header>		
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">	
				<!-- Brand -->
				<div id="branding">	
					<h1 href="#">My <span class="highlight">Portofolio</span></h1>
				</div>

				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" 
				aria-controls="toggleMobileMenu" aria-expanded="false" aria-lable="Toogle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="toggleMobileMenu">
					<ul class="navbar-nav ms-auto text-center">
						<li>
							<a class="nav-link" href="#">About Me</a>
						</li>
						<li>
							<a class="nav-link" href="#">Contact Me</a>
						</li>
						<li>
							<a class="nav-link" href="#">Projects</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>	
	</header>

	<section id="intro">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="pict">
						<img src="./img/jumbotronn.png" style="max-height:580px;"></img>
					</div>	
				</div>
				<div class="col-sm-5">
					<h1>Reza Putra Pratama</h1>
					<h2>Jr. Front End Developer</h2>
					<p>I have a strong interest in writing including writing blog site content and technical documentation. However, I do not rule out learning new things, especially in the scope of programming and information systems.
My interests are based on my experiences as a student and as an intern. see me more clearly</p>
					
					<div class="tombol">
						<a href="#" class="tombol-aktif animasi oren" onclick="Swal.fire({ icon: 'info', title: 'Soon', text: 'Soon Ya Ges Ya!'})">My Resume</a>
						<a href="#" class="tombol-aktif animasi light" onclick="Swal.fire({ icon: 'info', title: 'Soon', text: 'Soon Ya Ges Ya!'})">My Projects</a>
					</div>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</section>
	
	<section id="porto">
		<div class="container">
			<div class="row">
				<div class="featured">
					<h1>Featured <span class="highlight">Portofolio</span></h1>
				</div>

			<div class="row">

				<div class="col-lg-12">
					<ul class="filters text-center">
						<li class="active" data-filter="*"><a href="#!">All</a></li>
						<li data-filter=".tech"><a href="#!">Technical Document</a></li>
						<li data-filter=".web"><a href="#!">Website</a></li>
						<li data-filter=".design"><a href="#!">Design</a></li>
						<li data-filter=".blog"><a href="#!">Blog</a></li>
					</ul>

					<div class="projects">
						<div class="row">
							<div class="col-lg-4 item tech">	
								<div class="card">
									<div class="card-head">
										<img src="img/tw1.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Technical Document</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Technical Document</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 item web">
								<div class="card">
									<div class="card-head">
										<img src="img/web1.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Website</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Website</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 item design">		
								<div class="card">
									<div class="card-head">
										<img src="img/design1.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Design</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Design</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 item blog">				
								<div class="card">
									<div class="card-head">
										<img src="img/blog.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Blog</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Blog</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>
					
							<div class="col-lg-4 item tech">				
								<div class="card">
									<div class="card-head">
										<img src="img/tw2.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Technical Document</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Technical Document</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>

							<div class="col-lg-4 item web">			
								<div class="card">
									<div class="card-head">
										<img src="img/web2.jpg" alt="" class="img-fluid card-img">
										<div class="card-overlay"><h2>Website</h2></div>
										<div class="card-hover">
											<h2>SOON</h2>
											<p>Soon ya ges ya projectnya lagi dibuat.</p>
										</div>
									</div>
									<div class="card-body text-center">
										<h4 class="title">Website</h4>
										<a href="#!" class="btn btn-lg card-btn">See More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			</div>
		</div>
	</section>

	<section id="sosmed">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<ul class="social text-center">
						<li><a href="#!"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#!"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="mailto:ezaatama33@gmail.com"><i class="fa fa-envelope"></i></a></li>
						<li><a href="https://www.instagram.com/ezaatama/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/reza-putra-pratama/"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="quotes">
					<div class="col-lg-12">
						<p><i>"What You Lack In Talent Can Be Made Up With Desire, Hustle And Giving 110% All The Time." <br>– Don Zimmer</i></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<button id="btnScrollToTop">
			<i class="material-icons">arrow_upward</i>
		</button>
	
	<footer>
			<div class="container">	
				<!-- Brand -->
				<div id="penutup">	
					<h1 href="#">Created by <span class="highlight">Reza Putra Pratama</span></h1>
				</div>
			</div>
	</footer>

    <!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/script.js"></script>  
	<script src="js/jquery.js"></script>
	<script src="js/button.js"></script>
	<script src="sweetalert/dist/sweetalert2.all.min.js"></script>
	<script src="./bootstrap5/bootstrap5/js/bootstrap.js"></script>

</body>
</html>