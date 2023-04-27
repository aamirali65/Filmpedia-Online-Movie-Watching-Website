<?php


$new_id = $_GET['id'];
include('config.php');
$query1 = "DELETE from web_genre WHERE id = {$new_id}";

$run1 = mysqli_query($con,$query1);
if($run1){
    echo '<script>alert("Genre Delete Successfully");window.location.href="https://www.filmpediaa.ml/Admin/webs-add-genre.php"</script>';    
}

?>