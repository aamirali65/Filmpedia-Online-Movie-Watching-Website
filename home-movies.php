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
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FilmPedia – Online Movies, TV Shows</title>

</head>
<body class="body">
<script type='text/javascript' src='//pl17866910.profitablegatetocontent.com/7c/87/f6/7c87f6c2a25731fb9b826d97478f9b88.js'></script>
	
	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<a href="movie-home.php"><h2 class="content__title">Top Rated Movies</h2></a>
						<!-- end content title -->
			
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->
						<?php
					include './Admin/config.php';
					$query = mysqli_query($con , "SELECT * FROM `add_movies` ORDER BY `imdb_rating` DESC Limit 12");
					if($query){
						while($row = mysqli_fetch_assoc($query)){
							$ql =  $row['id'];
							$url = "/movie-detail.php?id=".urldecode(base64_encode($ql));
					?>
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover" style="box-shadow: 0 9px 14px -7px #fff;">
											<img width="100%" height="250" src="<?php echo "./Admin/movies_img/".$row['img']?>" alt="">
											<a href="<?php echo $url ?>" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="<?php echo $url ?>"><?php echo $row['Movie_Name']?></a></h3>
											<span class="card__category">
												<a href="#"><?php echo $row['genre_id']?></a>
												<a href="#"><?php echo $row['genre_id2']?></a>
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $row['imdb_rating']?></span>
                                                <a href="#" style="margin-left:10px;background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;color: #ff5860;opacity: 0.8;"><?php echo $row['release_year']?></a>

												<ul class="card__list">
													<li>HD</li>
                                                    
												</ul>
											</div>
                                            

											<div class="card__description">
												<p><?php echo $row['movie_desc']?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
						
					}
				}?>
						<!-- end card -->
					</div>
				</div>
		<!-- section btn -->
		<div class="col-12">
			<a href="/movie-home.php" class="section__btn">Load more</a>
		</div>
	</div>
		</div>
		<!-- end section btn -->	

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

</html>