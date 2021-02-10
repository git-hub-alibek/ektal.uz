<!doctype html>
<html class="no-/assets/js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
                                                <p>ektal860@mail.ru</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- appointment -->
                     <div class="row  box-shadow-02 bg-white contact-appointment">
                        <div class="col-lg-4 appointment-image">
                        </div>
                        <div class="col-lg-8 appointment-inner">
                            <h4><?php echo lang('contact_text');?></h4>
                           
                            <div class="contact-form">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input id="name" type="text" class="form-control" placeholder="<?php echo lang('name');?>" name="Your-Name">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input id="email" class="form-control" placeholder="<?php echo lang('email');?>" name="email" type="email" value="" aria-required="true">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input id="phone" type="text" class="form-control" placeholder="<?php echo lang('phone');?>" name="your-phone">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input id="subject" type="text" class="form-control" placeholder="<?php echo lang('subject');?>" name="subject">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <textarea id="comment" class="form-control" placeholder="<?php echo lang('message');?>" name="message" cols="45" rows="5" aria-required="true"></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <a href="#" class="btn"><?php echo lang('send');?></a>
                                        </div>
                                    </div>
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
                            <div class="col-md-12">
                                <div class="contact-map">
                                    <iframe src="https://maps.google.com/maps?q=codeless%20technol&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
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
    <script src="/assets/js/jquery.min./assets/js"></script>
    <!-- Popper /assets/js -->
    <script src="/assets/js/popper.min./assets/js"></script>
    <!-- Bootstrap /assets/js -->
    <script src="/assets/js/bootstrap.min./assets/js"></script>
    <!-- jquery Waypoints /assets/js -->
    <script src="/assets/js/jquery-waypoints./assets/js"></script>
    <!-- jquery Appear /assets/js -->
    <script src="/assets/js/jquery.appear./assets/js"></script>
    <!-- Numinate /assets/js -->
    <script src="/assets/js/numinate.min./assets/js"></script>
    <!-- Slick.min /assets/js -->
    <script src="/assets/js/slick.min./assets/js"></script>
    <!-- Slick.min /assets/js -->
    <script src="/assets/js/jquery.prettyPhoto./assets/js"></script>
    <!-- Circle Progress /assets/js -->
    <script src="/assets/js/circle-progress./assets/js"></script>
    <!-- Event Move /assets/js -->
    <script src="/assets/js/jquery.event.move./assets/js"></script>
    <!-- Twentytwenty /assets/js -->
    <script src="/assets/js/jquery.twentytwenty./assets/js"></script>
    <!-- Scripts /assets/js -->
    <script src="/assets/js/scripts./assets/js"></script>
</body>

</html>