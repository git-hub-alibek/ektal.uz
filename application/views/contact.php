<!doctype html>
<html class="no-/assets/js" lang="en">

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
        <?php $this->load->view('header.php');?>
        <!-- Header Main Area End Here -->

        
        <!-- page content -->
        <div class="page-content">

           

            <!-- Contact -->
            <section class="section-mdt bg-lightgrey">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="section-title text-center">
                                <h4 class="subheading skincolor"><?php echo lang('menu_contact');?></h4>
                                <h2> <strong><?php echo lang('menu_contact');?></strong></h2>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-headphone-alt"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2><?php echo lang('phone');?></h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>+998944580715</p>
                                                <p>+998944580715</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-30">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-location-pin"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2><?php echo lang('our_address');?></h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p><?php echo lang('adress');?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-sm-30">
                            <div class="iconbox iconbox-style-7">
                                <div class="iconbox-inner d-flex">
                                    <div class="iconbox-icon skincolor">
                                        <i class="optico-icon optico-icon-mail"></i>
                                    </div>
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2><?php echo lang('email');?></h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>ektaluz@umail.uz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- appointment -->
                     <div class="row  box-shadow-02 bg-white contact-appointment pb-5">
                        <div class="col-lg-4 appointment-image">
                        </div>
                        <div class="col-lg-8 appointment-inner">
                            
<h4><?php echo lang('contact_text');?></h4>
<div class="contact-form">
    <form method="post">
        <div class="form-row">
            <div class="form-group col-lg-6">
                <input id="contact_name" type="text" class="form-control" placeholder="<?php echo lang('name');?>" name="contact_name" autocomplete="off" required>
            </div>
            <div class="form-group col-lg-6">
                <input id="contact_email" class="form-control" placeholder="<?php echo lang('email');?>" name="contact_email" type="email" value="" aria-required="true" required>
            </div>
<!--             <div class="form-group col-lg-6">
                <input id="phone" type="text" class="form-control" placeholder="<?php echo lang('phone');?>" name="your-phone">
            </div> -->
            <div class="form-group col-lg-12">
                <input id="contact_subject" type="text" class="form-control" placeholder="<?php echo lang('subject');?>" name="contact_subject" autocomplete="off" required>
            </div>
            <div class="form-group col-lg-12">
                <textarea id="contact_message" class="form-control" placeholder="<?php echo lang('message');?>" name="contact_message" cols="45" rows="5" aria-required="true" required></textarea>
            </div>
           
            <div class="form-group col-lg-12 text-center">
                <input type="submit" id='send' name="send" class="btn" value="<?php echo lang('send');?>">
            </div>
        </div>
        <div id="alert-msg" class="alert-msg"></div>
    </form>
</div>
                        </div>
                    </div>
                    <!-- appointment end -->
                </div>
            </section>
            <!-- Contact End --> 

            <!-- Map -->
            <section>
                <div class="map-box overflow-hidden">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-md-12"> <br><br><br><br><br>
                                <div class="contact-map pt-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.7009711379696!2d59.02789313160996!3d43.75830605429949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDQ1JzMyLjAiTiA1OcKwMDEnNDMuOSJF!5e0!3m2!1sru!2s!4v1612959056906!5m2!1sru!2s"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Map end -->
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
            <div class="ts-search-logo"><img alt="optico" src="images/logo-white.png" /></div>
            <form class="ts-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
                <button type="submit"><span class="optico-icon-search"></span></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- /assets/js
        ============================================ -->

    <!-- jQuery /assets/js -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- Popper /assets/js -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- Bootstrap /assets/js -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- jquery Waypoints /assets/js -->
    <script src="/assets/js/jquery-waypoints.js"></script>
    <!-- jquery Appear /assets/js -->
    <script src="/assets/js/jquery.appear.js"></script>
    <!-- Numinate /assets/js -->
    <script src="/assets/js/numinate.min.js"></script>
    <!-- Slick.min /assets/js -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- Slick.min /assets/js -->
    <script src="/assets/js/jquery.prettyPhoto.js"></script>
    <!-- Circle Progress /assets/js -->
    <script src="/assets/js/circle-progress.js"></script>
    <!-- Event Move /assets/js -->
    <script src="/assets/js/jquery.event.move.js"></script>
    <!-- Twentytwenty /assets/js -->
    <script src="/assets/js/jquery.twentytwenty.js"></script>
    <!-- Scripts /assets/js -->
    <script src="/assets/js/scripts.js"></script>
</body>

</html>