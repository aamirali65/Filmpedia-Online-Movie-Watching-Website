<?php
include 'header.php';
?>
<style>
    .card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}   
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}
</style>
<div class="container">
        <div class="row">
        <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <h3><?php
                        include'config.php';
                        $query = mysqli_query($con,"SELECT COUNT(id) FROM add_webs");
                        while($res= mysqli_fetch_array($query)){
                        echo $res[0];    
                        }
                        
                        ?></h3>
                        <p>Total Web-Series </p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-duotone fa-film"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-green">
                    <div class="inner">
                        <h3><?php
                        include'config.php';
                        $query = mysqli_query($con,"SELECT COUNT(id) FROM add_movies");
                        while($res= mysqli_fetch_array($query)){
                        echo $res[0];    
                        }
                        
                        ?></h3>
                        <p> Total Movies </p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-video-camera "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>