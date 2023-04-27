<?php
include 'header.php';
?>

            <!-- Form Start -->
            <div class="container-fluid">
                            <div class="row g-4  my-2">
                                <div class="col-sm-12 col-xl-12">
                                <form action="#" method="POST">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Movies || Add Genre</h6>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Genre Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <input type="submit" name="add" class="btn btn-primary" value="Add Genre">
                                    </div>
                                    </form>
                                    <?php
                                        if(isset($_POST['add'])){
                                            include 'config.php';
                                            $name = $_POST['name'];
                                            $sql = mysqli_query($con, "INSERT INTO movies_genre (`id`, `genre`) VALUES (NULL, '$name');");
                                            if($sql){
                                                echo '<script>alert("Genre Added Successfully")</script>';
                                            }
                                            else{
                                                echo '<script>alert("Genre Added Failed")</script>';
                                            }
                                        }
                                        ?>
                                </div>
                                <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Genre Lists</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Genre_Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'config.php';
                                $view = "SELECT * FROM `movies_genre`";
                                $res = mysqli_query($con,$view);
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['id']?></th>
                                        <td><?php echo $row['genre']?></td>
                                        <td><a href="delete_genre.php?id=<?php echo $row['id']; ?>">Delete |</a>
                                        <a href="movies_edit_genre.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    </td>
                                    
                                    </tr>
                                </tbody>
                                <?php
                        }
                                ?>
                            </table>
                        </div>
                    </div>