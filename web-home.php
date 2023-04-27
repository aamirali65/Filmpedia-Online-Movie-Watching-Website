<?php
include 'header.php';
?>
<!-- page title -->
<section class="section section--first section--bg" data-bg="../img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Web Series</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="/index.php">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Web Series</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

    <div class="catalog">
		<div class="container">
			<div class="row">
				<!-- card -->
                <?php
					include './Admin/config.php';
                    $limit = 18;
                    if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    }else{
                    $page = 1;
                    }
                    $offset = ($page - 1) * $limit;
					$query = mysqli_query($con , "SELECT * FROM `add_webs` ORDER BY `add_webs`.`release_year` DESC LIMIT {$offset},{$limit}");
					if($query){
						while($row = mysqli_fetch_assoc($query)){
							$ql =  $row['id'];
							$url = "/web-detail.php?id=".urldecode(base64_encode($ql));
					?>
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2 mars">
					<div class="card">
						<div class="card__cover" style="box-shadow: 0 9px 14px -7px #fff;">
							<img width="100%" height="250" src="<?php echo "./Admin/movies_img/".$row['img']?>" alt="">
							<a href="<?php echo $url?>" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="<?php echo $url?>"><?php echo $row['web_name']?></a></h3>
							<span class="card__category">
                            <a href="#"><?php echo $row['genre_id']?></a>
							<a href="#"><?php echo $row['genre_id2']?></a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $row['imdb_rating']?></span>
                            <a href="#" style="margin-left:10px;background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;color: #ff5860;opacity: 0.8;"><?php echo $row['release_year']?></a>
						</div>
					</div>
				</div>
                <?php
                }}?>
				<!-- end card -->
            </div>
        </div>
    </div>
    <!-- pagination -->
    <div class="col-12">
    <?php
  $new11 = mysqli_query($con , "SELECT * From add_webs");
  if(mysqli_num_rows($new11) > 0){
    $total_record = mysqli_num_rows($new11);
 
    $total_page = ceil($total_record / $limit);
    echo '<ul class="paginator">';
    if($page > 1){
        echo '<li class="paginator__item"><a href="web-home.php?page='.($page - 1).'">Prev</a></li>';
    }
    for($i = 1; $i <= $total_page; $i++){
    }
     if($total_page > $page){
        echo '<button class="paginator__item"><a href="web-home.php?page='.($page + 1).'">Next</a></button>';
    }
    
    echo '</ul>';
  }
  ?>
	</div>
     <!-- end pagination -->
     <?php
    include 'footer.php';?>

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

