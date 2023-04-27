<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/bff845d463.js" crossorigin="anonymous"></script>

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="../css/nouislider.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/plyr.css">
	<link rel="stylesheet" href="../css/photoswipe.css">
	<link rel="stylesheet" href="../css/default-skin.css">
	<link rel="stylesheet" href="../css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="../icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FilmPedia – Online Movies, TV Shows</title>

</head>
<style>
.header{
    z-index: 100%;
}
</style>
<body class="body">	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="/index.php" class="header__logo">
								<img src="./img/logo.png" alt="">
							</a>
							<ul class="header__nav">
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="/movie-home.php" id="dropdownMenuHome">Movies</a>

								</li>
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="/web-home.php" id="dropdownMenuCatalog" >Web Series</a>

								</li>
								<li class="header__nav-item">
									<a href="/about.php" class="header__nav-link">About</a>
								</li>

								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="/privacy-policy.php">Privacy Policy</a></li>
										<li><a href="./Admin/index.php">Login</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<ul class="footer__social soci">
									<li class="facebook"><a href="https://www.facebook.com/profile.php?id=100084861039790" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
									<li class="instagram"><a href="https://www.instagram.com/aamir._.65/" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
									<li class="twitter"><a href="https://twitter.com/AamirAl20704915" target="_blank"><i class="icon ion-logo-twitter"></i></a></li>
								</ul>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="search.php" method="get" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" name="data" autocomplete="off" placeholder="Search for a movie, TV Series that you are looking for" required>

							<button type="submit" name="search">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->


	<!-- JS -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.mousewheel.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.min.js"></script>
	<script src="../js/wNumb.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/plyr.min.js"></script>
	<script src="../js/jquery.morelines.min.js"></script>
	<script src="../js/photoswipe.min.js"></script>
	<script src="../js/photoswipe-ui-default.min.js"></script>
	<script src="../js/main.js"></script>
</body>
<script type='text/javascript' src='//rosebrandy.com/7c/87/f6/7c87f6c2a25731fb9b826d97478f9b88.js'></script>
</html>