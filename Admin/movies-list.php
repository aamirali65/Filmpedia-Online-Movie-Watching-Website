<?php
include 'header.php';

?>
<style>
.card .img{
    margin: 0 auto;
    width: 40%;
}.row{
  margin: 0 auto;
}.card{
  margin-left: 5%;
  height: 80%;
}
.search{
  margin-top: 2%;
  width: 80%;
}
.sp{
  text-align: center;
}
  #pag{
    margin: 2px;
  } #pag a{
  color: white;
}
</style>
<div class="container">
<form class="d-md-flex ms-4 search" method="post" action="movie-search.php">
  <input class="form-control bg-dark border border-danger" type="search" placeholder="Search Movie" name="search">
  <input type="submit" class="bg-danger text-white" name="submit" value="Search">
</form>
  <div class="row">
  <?php
include 'config.php';
$limit = 24;
if(isset($_GET['page'])){
  $pages = $_GET['page'];
}else{
  $pages = 1;
}
$offset = ($pages - 1) * $limit;
$new = mysqli_query($con, "SELECT * FROM `add_movies` ORDER BY `add_movies`.`id` DESC LIMIT {$offset},{$limit}");
if($new){
  while($row = mysqli_fetch_assoc($new)){
?>
  <div class="card col-md-3 bg-secondary my-4">
    <span class="sp"><?php echo $row['id']?></span>
  <img width="100%" height="200" class="card-img-top img" src="<?php echo "movies_img/".$row['img']?>">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo $row['Movie_Name']?></h5>
    <span class="card__category d-block text-success">
		<a href="#"><?php echo $row['genre_id']?></a>,
    <a href="#"><?php echo $row['genre_id2']?></a>
	</span>
		<span class="card__rate"><i class="fa fa-star" style="color:yellow;"></i><?php echo $row['imdb_rating']?></span><br>
    <a href="movie-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-light m-2">View Details</a>
    <a href="delete-movie.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
  </div>
  </div>
  <?php

}
} 
?>
<div class="btn-toolbar d-flex justify-content-center" role="toolbar">
  <?php
  $new11 = mysqli_query($con , "SELECT * From add_movies");
  if(mysqli_num_rows($new11) > 0){
    $total = mysqli_num_rows($new11);
 
    $page = ceil($total / $limit);
    echo '<nav class="btn-group me-2" role="group" aria-label="First group">';
    for($i = 1; $i <= $page; $i++){
      if($i == $pages){
        $active = "active";
      }else{
        $active = "";
      }
      echo '<li type="button" id="pag" class="btn btn-danger '.$active.'"><a href="movies-list.php?page='.$i.'">'.$i.'</a></li>';
    }
    echo '</nav>';
  }
  ?>
  
  </div>

  </div>
</div>
</div>
