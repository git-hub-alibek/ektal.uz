<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo lang('title');?></title>
    <link rel="shortcut icon" href="/assets/images/gold.png" type="image/x-icon">
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
    <!-- Optico Icons -->
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
        <?php $this->load->view('header.php');?>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">

           <br>

           

           <!-- Pricing Table -->
           <section class="skin-bg-color our-pricing-sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-9">
                            <div class="section-title white-color text-center">
                                <h1 class="subheading"><?php echo lang('menu_price');?></h1>
                                </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing-table-sec bg-lightgrey">
                <div class="container">
                    <div class="row">
                    <?php foreach($products as $product): ?>
                        <div class="col-md-4">
                            <div class="pricing-tablebox">
                                <div class="pricingtable-main">
                                    
                                    <a href="<?php echo site_url('product/show/'.$product['id']); ?>"><img src="/uploads/<?php echo $product['img']; ?>" class="img-fluid" alt=""></a>
                                   
                                    <h3 class="pricingtable-title">
                                    <a href="<?php echo site_url('product/show/'.$product['id']); ?>"><?php echo $product['name_'.$this->uri->segment(1)]; ?></a>
                                    </h3>
                                    <div class="pricingtable-desc">
                                    <p><?php echo $product['info_short_'.$this->uri->segment(1)]; ?></p>
                                    </div>
                                    <div class="pricingtable-pricebox">
                                        <div class="pricingtable-price"><?php echo $product['price'];?></div>
                                       
                                    </div>
                                </div>
                                <div class="pricingtable-btn">
                                    <a href="contact" class="btn"><?php echo lang('get_offer');?></a>
                                </div>
                            </div>
                        </div>
                       
                    <?php endforeach;?>
                    </div>
                </div>
            </section>
            <!-- Pricing Table end -->

          

         

           

           
        </div>
        <!-- page content End -->

        <!-- footer -->
       <?php $this->load->view('footer.php');?>
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <div class="ts-search-overlay">
        <div class="ts-icon-close"></div>
        <div class="ts-search-outer">
            <div class="ts-search-logo"><img alt="optico" src="/assets/images/logo-white.png" /></div>
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
    <script src="/assets/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- jquery Waypoints JS -->
    <script src="/assets/js/jquery-waypoints.js"></script>
    <!-- jquery Appear JS -->
    <script src="/assets/js/jquery.appear.js"></script>
    <!-- Numinate JS -->
    <script src="/assets/js/numinate.min.js"></script>
    <!-- Slick.min JS -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- Slick.min JS -->
    <script src="/assets/js/jquery.prettyPhoto.js"></script>
    <!-- Circle Progress JS -->
    <script src="/assets/js/circle-progress.js"></script>
    <!-- Event Move JS -->
    <script src="/assets/js/jquery.event.move.js"></script>
    <!-- Twentytwenty JS -->
    <script src="/assets/js/jquery.twentytwenty.js"></script>
    <!-- Scripts JS -->
    <script src="/assets/js/scripts.js"></script>
</body>

</html>