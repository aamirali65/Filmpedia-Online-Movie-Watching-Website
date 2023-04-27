<?php
include 'config.php';
$newid = $_GET['id'];
$query = mysqli_query($con , "DELETE FROM `add_movies` WHERE id = '$newid'");
if($query){
    echo '<script>alert("Movie Delete Successfully");window.location.href="https://www.filmpediaa.ml/Admin/movies-list.php"</script>';
}else{
    echo '<script>alert("Movie Delete Failed");window.location.href="https://www.filmpediaa.ml/Admin/movies-list.php"</script>';
}
 


?>