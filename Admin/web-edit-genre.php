<?php
include 'header.php';
?>
<div class="container-fluid">
                            <div class="row g-4  my-2">
                                <div class="col-sm-12 col-xl-12">
                <?php
                include 'config.php';
                $gid = $_GET['id'];
                $sqli = mysqli_query($con,"SELECT * FROM web_genre WHERE id = '$gid'");
                    while($row = mysqli_fetch_assoc($sqli)){ 
                ?>
                <form action="#" method="POST">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Web-Series || Edit Genre</h6>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Genre Name</label>
                                                <input type="text" name="name" value="<?php echo $row['genre_names'] ?>" class="form-control" required>
                                            </div>
                                            <input type="submit" name="add" class="btn btn-primary" value="Update Genre">
                                    </div>
                                    </form>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if(isset($_POST['add'])){
                                        include 'config.php';   
                                        $gname = $_POST['name'];
                                        $query = mysqli_query($con , "UPDATE `web_genre` SET `genre_names`='$gname' WHERE id = '$gid'");
                                        if($query){
                                            echo '<script>alert("Genre Updated Successfully");window.location.href="https://www.filmpediaa.ml/Admin/webs-add-genre.php"</script>';
                                        }
                                    }
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    ?>