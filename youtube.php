<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TuanNguyen | Blog</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/fbfpalbums.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/pongstagr.am.min.css" rel="stylesheet">
    <style>
    
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">

                <div class="col-md-12">
                    <!-- top nav -->
                    <?php include('menu.php'); ?>  
                    <!-- /top nav -->
                </div>
                
                
                <!-- slider -->

                <!-- main right col -->
                <div class="column col-md-10" id="main">
                    <div class="padding">
                        <div class="col-sm-12">
                            
                            <div class="row">
                                <!-- slider -->
                                <div class="column col-md-12">
                                    <div class="owl-carousel">
                                        <img src="images/slider/slider1.jpg" alt="slider1" class="img-responsive">
                                        <img src="images/slider/slider2.jpg" alt="slider2" class="img-responsive">
                                        <img src="images/slider/slider3.jpg" alt="slider3" class="img-responsive">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="avatar">
                                         <a href="javascript:void(0);">
                                            <img src="images/avatar.jpg" alt="Tuấn Nguyễn" class="img-responsive">
                                         </a>
                                         <p class="author">Tuấn Nguyễn</p>
                                    </div>
                                    <div class="col-md-12">
                                        <nav class="collapse navbar-collapse navbar-custom" role="navigation">
                                            
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="index.php"><i class="glyphicon glyphicon-home"></i> Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="#postModal" role="button" data-toggle="modal">
                                                        <i class="glyphicon glyphicon-user"></i> Friends
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="photos.php">
                                                        <i class="glyphicon glyphicon-picture"></i> Photos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="instagram.php">
                                                        <i class="glyphicon glyphicon-picture"></i> Photos Instagram
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="youtube.php">
                                                        <i class="glyphicon glyphicon-video"></i> Video
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="">More</a></li>
                                                        <li><a href="">More</a></li>
                                                        <li><a href="">More</a></li>
                                                        <li><a href="">More</a></li>
                                                        <li><a href="">More</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- content -->                      
                            <div class="row">

                                <div class="photo-page col-sm-12">
                                    
                                    <div class="photo-header">
                                        <h3 class="title">
                                            <img src="images/icon-photos.png" alt="Photos">
                                            <a href="#">Photos Instagram</a>
                                        </h3>
                                    </div>
                                    
                                    <div class="photo-content">
                                        <div id="ibacordotcom-content">
                                            <div class="ibacordotcom-unit ibacordotcom-vid-kenca">
                                                <div class="ibacordotcom_vid_play"></div>
                                            </div>
                                            <div class = "ibacordotcom-unit ibacordotcom-vid-katuhu">
                                                <div class="ibacordotcom_youtube_channels"></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>    
                                <!-- /content-photo -->
                                    

                            </div><!--/row-->

                
                        </div><!-- /col-9 -->
                    </div><!-- /padding -->
                </div>
                <!-- /main -->

                <!-- sidebar -->
                <?php include('sidebar.php'); ?>  
                <!-- /sidebar -->

                </div>

            </div>
        </div>
        
        <?php include('footer.php'); ?> 

        
</body>
</html>