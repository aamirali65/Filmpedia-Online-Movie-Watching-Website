<?php
include 'header.php';
?>
<!-- Form Start -->
<div class="container-fluid">
            <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row g-4  my-2">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Movies || Add Movies</h6>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                                                <input type="text" name="m_name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Imdb Rating</label>
                                                <input type="text" name="imdb" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Genre</label>
                                                <select class="form-select mb-3" name="genre_id">
                                                <option selected disabled hidden>Select Genre</option>
                                                <?php
                                                include 'config.php';
                                                $query = mysqli_query($con , 'SELECT genre from movies_genre');
                                                while($res = mysqli_fetch_assoc($query)){
                                                    
                                                ?>
                                                <option><?php echo $res['genre']; ?></option>
                                             <?php 
                                                }?>
                                                 </select>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Genre</label>
                                                <select class="form-select mb-3" name="genre_id2">
                                                <option selected disabled hidden>Select Genre</option>
                                                <?php
                                                include 'config.php';
                                                $query = mysqli_query($con , 'SELECT genre from movies_genre');
                                                while($res = mysqli_fetch_assoc($query)){
                                                    
                                                ?>
                                                <option><?php echo $res['genre']; ?></option>
                                             <?php 
                                                }?>
                                                 </select>
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Movie Description</label>
                                                <textarea type="text" name="m_des" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Movie Tags For SEO</label>
                                                <textarea type="text" name="m_tag" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Release year</label>
                                                <input type="text" name="m_rel" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Running time</label>
                                                <input type="text" name="m_time" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Language</label>
                                                <input type="text" name="m_lang" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Trailer link</label>
                                                <input type="text" name="m_trail" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Download link</label>
                                                <input type="text" name="m_link" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Download link 2</label>
                                                <input type="text" name="m_link2" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Image</label>
                                                <input class="form-control bg-dark" name="img" type="file" id="formFile" >
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Add Movie">
                                    </div>
                                    </form>
                                    <?php

                                    if(isset($_POST['submit'])){
                                        include 'config.php';
                                        $mname = $_POST['m_name'];
                                        $imdb = $_POST['imdb'];
                                        $g_id = $_POST['genre_id'];
                                        $g_id2 = $_POST['genre_id2'];
                                        $descri = $_POST['m_des'];
                                        $tag = $_POST['m_tag'];
                                        $release = $_POST['m_rel'];
                                        $running = $_POST['m_time'];
                                        $lang = $_POST['m_lang'];
                                        $trailer = $_POST['m_trail'];
                                        $link = $_POST['m_link'];
                                        $link2 = $_POST['m_link2'];
                                        $file = $_FILES['img'];
                                        $imgname = $file['name'];
                                        $imgpath = $file['tmp_name'];
                                        $location = 'movies_img/'.$imgname;
                                        move_uploaded_file($imgpath,$location);
                                        $sql = "INSERT INTO `add_movies` (`id`, `genre_id`, `genre_id2`, `Movie_Name`, `imdb_rating`, `release_year`, `running_time`, `language`, `movie_desc`, `m_tags`, `trailer`, `link`, `link2`, `img`) VALUES 
                                        (NULL, '$g_id', '$g_id2', '$mname', '$imdb', '$release', '$running', '$lang', '$descri', '$tag', '$trailer', '$link', '$link2', '$imgname');";
                                        $query = mysqli_query($con,$sql);
                                        if($query){
                                           echo '<script>alert("Movie Added Successfully");</script>';
                                        }
                                        else{
                                            echo '<script>alert("Movie Added Failed");</script>';
                                        }

                                    }
                                    
                                    
                                    
                                    ?>