<?php
include 'header.php';
?>
<!-- Form Start -->
<div class="container-fluid">
            <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row g-4  my-2">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Web-Series || Add Web-Series</h6>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Web-Series Name</label>
                                                <input type="text" name="w_name" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Imdb Rating</label>
                                                <input type="text" name="imdb" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Genre</label>
                                                <select class="form-select mb-3" name="genre_id">
                                                <option selected disabled hidden>Select Genre</option>
                                                <?php
                                                include 'config.php';
                                                $query = mysqli_query($con , 'SELECT genre_names from web_genre');
                                                while($res = mysqli_fetch_assoc($query)){
                                                    
                                                ?>
                                                <option><?php echo $res['genre_names']; ?></option>
                                             <?php 
                                                }?>
                                                 </select>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Genre</label>
                                                <select class="form-select mb-3" name="genre_id2">
                                                <option selected disabled hidden>Select Genre</option>
                                                <?php
                                                include 'config.php';
                                                $query = mysqli_query($con , 'SELECT genre_names from web_genre');
                                                while($res = mysqli_fetch_assoc($query)){
                                                    
                                                ?>
                                                <option><?php echo $res['genre_names']; ?></option>
                                             <?php 
                                                }?>
                                                 </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                                <textarea type="text" name="w_des" class="form-control" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Tags For SEO</label>
                                                <textarea type="text" name="w_tag" class="form-control" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Release year</label>
                                                <input type="text" name="w_rel" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Total Seasion</label>
                                                <input type="text" name="w_time" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Language</label>
                                                <input type="text" name="w_lang" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Trailer link</label>
                                                <input type="text" name="w_trail" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Download link</label>
                                                <input type="text" name="w_link" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Download link 2</label>
                                                <input type="text" name="w_link2" class="form-control" required autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Image</label>
                                                <input class="form-control bg-dark" name="img" type="file" id="formFile" required>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Add Web-Series">
                                    </div>
                                    </form>
                                    <?php

                                    if(isset($_POST['submit'])){
                                        include 'config.php';
                                        $wname = $_POST['w_name'];
                                        $imdb = $_POST['imdb'];
                                        $g_id = $_POST['genre_id'];
                                        $g_id2 = $_POST['genre_id2'];
                                        $descri = $_POST['w_des'];
                                        $tag = $_POST['w_tag'];
                                        $release = $_POST['w_rel'];
                                        $running = $_POST['w_time'];
                                        $lang = $_POST['w_lang'];
                                        $trailer = $_POST['w_trail'];
                                        $link = $_POST['w_link'];
                                        $link2 = $_POST['w_link2'];
                                        $file = $_FILES['img'];
                                        $imgname = $file['name'];
                                        $imgpath = $file['tmp_name'];
                                        $location = 'movies_img/'.$imgname;
                                        move_uploaded_file($imgpath,$location);
                                        $query = mysqli_query($con , "INSERT INTO `add_webs`(`id`, `genre_id`, `genre_id2` , `web_name`, `imdb_rating`, `release_year`, `running_time`, `language`, `web_desc`, `tags`, `trailer`, `link`,  `link2`, `img`) VALUES 
                                        (NULL,'$g_id', '$g_id2' ,'$wname','$imdb','$release','$running','$lang','$descri','$tag','$trailer','$link', '$link2','$imgname')");
                                        if($query){
                                            echo '<script>alert("Web-Series Added Successfully");</script>';
                                        }
                                        else{
                                            echo '<script>alert("Web-Series Added Failed");</script>';
                                        }

                                    }
                                    
                                    
                                    
                                    ?>