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
</style>
<div class="container">
<form class="d-md-flex ms-4 search" method="post" action="#">
  <input class="form-control bg-dark border border-danger" type="search" name="search" placeholder="Search">
  <input type="submit" class="bg-danger text-white" value="Search" name="submit">
</form>
  <div class="row">
  <?php
include 'config.php';
if(isset($_POST['submit'])){
$search =$_POST['search'];
$_SESSION['search'] = $search;
$searchin = preg_replace("#[^0-9a-z]#i",'',$search);
$new = mysqli_query($con, "SELECT * from add_movies WHERE Movie_Name LIKE '%$search%' OR Movie_desc LIKE '%$search%' OR m_tags LIKE '%$search%' ");?>
<span class="mx-2 my-3">Search Results for "<?php echo $_SESSION['search']?>"</span>
<?php
if(mysqli_num_rows($new) == 0){
    echo "<h4 class='my-5 mx-2'>No Movie Found</h4>";}
    else{
  while($row = mysqli_fetch_assoc($new)){
?>
  <div class="card col-md-3 bg-secondary my-4">
    <span><?php echo $row['id']?></span>
  <img class="card-img-top img" src="<?php echo "movies_img/".$row['img']?>">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo $row['Movie_Name']?></h5>
    <p class="card-text"><?php echo $row['movie_desc']?></p>
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
} 
?>
  </div>
</div>
</div>
