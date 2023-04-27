<?php
include 'header.php';
?>
<style>
    .text {
    color: white;
    margin: auto;
    margin-top: 20px;
}
</style>
<!-- page title -->
<section class="section section--first section--bg" data-bg="./img/section/section.jpg">
		<div class="container">
			<div class="row">
                <?php
               include './Admin/config.php';
                if(isset($_GET['search'])){
                $search = $_GET['data'];
                $_SESSION['search'] = $search;
                $searchin = preg_replace("#[^0-9a-z]#i",'',$search);
                $new = mysqli_query($con,"(SELECT * from add_movies WHERE Movie_Name LIKE '%$search%' OR movie_desc 
				LIKE '%$search%' OR m_tags LIKE '%$search%') UNION (SELECT * from add_webs WHERE web_name LIKE '%$search%' OR web_desc 
				LIKE '%$search%' OR tags LIKE '%$search%')");
                ?>
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Search Result Of "<?php echo $_SESSION['search']?>"</h2>
						<!-- end section title -->
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
					if(mysqli_num_rows($new) == 0){
                        echo '<h2 class="text">Sorry, but nothing matched your search terms. Please try again with some different keywords.</h2>';}
                        else{
                      while($row = mysqli_fetch_assoc($new)){
						$ql =  $row['id'];
						//$url = "/movie-detail.php?id=".urldecode(base64_encode($ql));
                        $url = array("/movie-detail.php?id=".urldecode(base64_encode($ql)),"/web-detail.php?id=".urldecode(base64_encode($ql)));
                        ?>
                            <div class="col-6 col-sm-6 col-lg-3 col-xl-2 mars">
						<div class="card">
							<div class="card__cover" style="box-shadow: 0 9px 14px -7px #fff;">
								<img width="100%" height="250" src="<?php echo "./Admin/movies_img/".$row['img']?>" alt="">
								<a href="<?php echo $url[0]?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?php echo $url[0]?>"><?php echo $row['Movie_Name']?></a></h3>
								<span class="card__category">
								<a href="#"><?php echo $row['genre_id']?></a>
								<a href="#"><?php echo $row['genre_id2']?></a>
								</span>
								<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $row['imdb_rating'];?></span>
                                <a href="#" style="margin-left:10px;background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;color: #ff5860;opacity: 0.8;"><?php echo $row['release_year']?></a>
							</div>
						</div>
					</div>
                    <?php
                    }
                }
                    }?> 
						<!-- end card -->
			</div>
		</div>
	</div>

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
	<?php include 'footer.php'?>