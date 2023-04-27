<?php
include 'header.php';
?>
<!-- Form Start -->
<div class="container-fluid">
            <form action="#" method="post">
                            <div class="row g-4  my-2">
                                <div class="col-sm-12 col-xl-12">
                                    <div class="bg-secondary rounded h-100 p-4">
                                        <h6 class="mb-4">Add Amin</h6>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" name="pass" class="form-control">
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Add Movie">
                                    </div>
                                    </form>
                                    <?php

                                    if(isset($_POST['submit'])){
                                        include 'config.php';
                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $pass = md5($_POST['pass']);
                                        $query = mysqli_query($con,"INSERT INTO `admin`(`id`, `Username`, `Email`, `Password`) VALUES (NULL,'$name','$email','$pass')");
                                        if($query){
                                           echo '<script>alert("admin Added Successfully");</script>';
                                        }
                                        else{
                                            echo '<script>alert("admin Added Failed");</script>';
                                        }

                                    }
                                    
                                    
                                    
                                    ?>