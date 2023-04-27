<?php
include 'header.php';

?>

<?php
include 'config.php';
$newid = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM add_movies  WHERE id = '$newid'");
if($query){
    while($row = mysqli_fetch_assoc($query)){

  
?>
<style>
    .full{
        height: 80%;
        width: 80%;
    }
</style>
<div class="container">

    <h1 class="my-4 mx-5"><?php echo $row['Movie_Name']?></h1>
    <div class="row mx-5">
  
      <div class="col-md-7">
        <img class="img-fluid full" src="<?php echo "movies_img/".$row['img']?>">
      </div>
  
      <div class="col-md-5">
        <ul class="card__meta">
			<li><span class="card__rate">Imdb-Rating :<i class="fa fa-star mx-1" style="color:yellow;"></i><?php echo $row['imdb_rating']?></span></a>
			<li><span>Genre:</span> <a href="#"><?php echo $row['genre_id']?></a>|<a href="#"><?php echo $row['genre_id2']?></a>
			<li><span>Release year:</span> <?php echo $row['release_year']?></li>
			<li><span>Running time:</span> <?php echo $row['running_time']?></li>
			<li><span>Language:</span> <?php echo $row['language']?></li>
		</ul>
        <h3 class="my-3">Description</h3>
        <p><?php echo $row['movie_desc']?></p>
        <button type="button" class="btn btn-outline-info m-2"><a href="<?php echo $row['link']?>">Link 1</a></button>
        <button type="button" class="btn btn-outline-info m-2"><a href="<?php echo $row['link2']?>">Link 2</a></button>
      </div>
    </div>
    </div>
  </div>
  <?php
  
}
}
?>