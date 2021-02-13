<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/gold.png" type="image/x-icon">
    <title><?php echo lang('title');?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!-- optico Icons -->
    <link rel="stylesheet" href="/assets/css/optico-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <!-- Slick -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!-- Slick Theme -->
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <!-- Pretty Photo -->
    <link rel="stylesheet" href="/assets/css/prettyPhoto.css">
    <!-- Twentytwenty -->
    <link rel="stylesheet" href="/assets/css/twentytwenty.css">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="/assets/css/shortcode.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="/assets/css/base.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <?php $this->load->view('header');?>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">

           

<!-- Blog -->
<section class="section-smt">
    <div class="container">
        <div class="row">
            <!-- Blog 01 -->
            <div class="col-md-12">
                <div class="blog-box blog-style-1 blog-single-detail">
                    <div class="blog-thumbnail mb-4">
                      <p align='center'>   <img width='600' src="<?php echo site_url('uploads/'.$product[0]['img']); ?>" class="img-fluid" /> </p>
                    </div>
                   
                    <h3 class="blog-box-title text-center"><a href="blog-detail.html"><?php echo $product[0]['name_'.$this->uri->segment(1)]; ?></a></h3>
                    <p><?php echo $product[0]['info_long_'.$this->uri->segment(1)]; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog End -->
        
        <!-- page content End -->

        <!-- footer -->
        <?php $this->load->view('footer');?>
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <div class="ts-search-overlay">
        <div class="ts-icon-close"></div>
        <div class="ts-search-outer">
            <div class="ts-search-logo"><img alt="optico" src="images/logo-white.png" /></div>
            <form class="ts-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
                <button type="submit"><span class="optico-icon-search"></span></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- JS
        ============================================ -->

    <!-- jQuery JS -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery Waypoints JS -->
    <script src="js/jquery-waypoints.js"></script>
    <!-- jquery Appear JS -->
    <script src="js/jquery.appear.js"></script>
    <!-- Numinate JS -->
    <script src="js/numinate.min.js"></script>
    <!-- Slick.min JS -->
    <script src="js/slick.min.js"></script>
    <!-- Slick.min JS -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- Circle Progress JS -->
    <script src="js/circle-progress.js"></script>
    <!-- Event Move JS -->
    <script src="js/jquery.event.move.js"></script>
    <!-- Twentytwenty JS -->
    <script src="js/jquery.twentytwenty.js"></script>
    <!-- Scripts JS -->
    <script src="js/scripts.js"></script>
</body>

</html>