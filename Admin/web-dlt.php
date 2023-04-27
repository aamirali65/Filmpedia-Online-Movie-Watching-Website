<?php
include 'config.php';
$newid = $_GET['id'];
$query = mysqli_query($con , "DELETE FROM `add_webs` WHERE id = '$newid'");
if($query){
    echo '<script>alert("Web-Series Delete Successfully");window.location.href="https://www.filmpediaa.ml/Admin/web-series-list.php"</script>';
}else{
    echo '<script>alert("Web-Series Delete Failed");window.location.href="https://www.filmpediaa.ml/Admin/web-series-list.php"</script>';
}
 


?>