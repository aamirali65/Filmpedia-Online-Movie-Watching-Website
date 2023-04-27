<?php
include 'header.php';
?>
<style>
	#btn a {
    color: white;
	margin: 1px;
    padding: 10px 28px 10px;
    border-radius: 25px;
	display: inline-block;
	cursor: pointer;
}
	#a{
		background-color: #ff55a1;
		cursor: pointer;
	}
	#b{
		background-color: #34495e;
		cursor: pointer;
	}.in {
    background: none;
	cursor: pointer;
    color: white;
    border: none;
}
</style>
<!-- details -->
<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="/img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
                <?php
                include './Admin/config.php';
                $id = $_GET['id'];
				foreach ($_GET as $key => $id){
					$data = $_GET['$key'] = base64_decode(urldecode($id));
				};
                $query = mysqli_query($con, "SELECT * FROM add_webs WHERE id = '$data'");
                if($query){
                while($row = mysqli_fetch_assoc($query)){
                    ?>
				<div class="col-12">
					<h1 class="details__title"><?php echo $row['web_name']?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-10">
					<div class="card card--details card--series">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
								<div class="card__cover" style="box-shadow: 0 9px 14px -7px #fff;">
									<img src="<?php echo "./Admin/movies_img/".$row['img']?>" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i><?php echo $row['imdb_rating']?></span>

										<ul class="card__list">
											<li>HD</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span>
                                        <a href="#"><?php echo $row['genre_id']?></a>
										<a href="#"><?php echo $row['genre_id2']?></a></li>
										<li><span>Release year:</span> <?php echo $row['release_year']?></li>
										<li><span>Total Seasons:</span> <?php echo $row['running_time']?></li>
										<li><span>Language:</span><?php echo $row['language']?></li>
									</ul>

									<div class="card__description card__description--details"><?php echo $row['web_desc']?></div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
                <?php echo $row['trailer']?>

				</div>

				<!-- end player -->
                
                <div class="col-12">
					<div class="details__wrap">
				
				<div class="col-offset-2 col-xl-12" id="btn">
				    <p style="color: gray">-Download Links-</p>
                    
				<a href="<?php echo $row['link']?>"  id="a"><input type="button" value="Link 1" class="in"></a>
				<a href="<?php echo $row['link2']?>" id="b"><input type="button" value="Link 2" class="in"></a>
				
				</div>
				<?php
                }}?>
				<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

							<ul class="details__share-list">
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>
            </div>
        </div>
</section>
<script async="async" data-cfasync="false" src="//pl17860979.profitablegatetocontent.com/c3652da446d3062063f95f60e1c20f90/invoke.js"></script>
<div id="container-c3652da446d3062063f95f60e1c20f90"></div>
<!-- content -->
<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">You may also like...</h2>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
			<div class="row">
				<!-- card -->
                <?php
					include './Admin/config.php';
					$query = mysqli_query($con , "SELECT * FROM `add_webs` ORDER BY RAND() LIMIT 6");
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
						</div>
					</div>
				</div>
                <?php
                }}?>
				<!-- end card -->
            </div>
        </div>
 <script async="async" data-cfasync="false" src="//pl17860979.profitablegatetocontent.com/c3652da446d3062063f95f60e1c20f90/invoke.js"></script>
<div id="container-c3652da446d3062063f95f60e1c20f90"></div>

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



























<?php include 'footer.php';?>