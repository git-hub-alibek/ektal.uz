<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/gold.png" type="image/x-icon">
    <title><?php echo lang('main_title'); ?></title>
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
       <?php $this->load->view('header');?>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">

            <!-- banner -->
            <?php $this->load->view('banner');?>
            <!-- banner End -->

            <!-- Tovar -->
          
            <!-- Tovar -->

<!-- Our Service -->
<section class="section-md bg-padding">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <div class="section-title text-center">
                <h4 class="subheading skincolor"><?php echo lang('title');?></h4>
                <h2><strong><?php echo lang('products');?></strong></h2>
               
               
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Services 01 -->
        <div class="col-lg-12">
            <div class="slick-carousel brd-right no-mrg" data-autoplay="true" data-dots="false" data-arrows="false" data-slides="3" data-tslides="2" data-islides="2">
                <?php foreach($products as $product): ?>
                <div>
                    <div class="service-box service-style-2">
                        <div class="service-thumbnail">
                            <a href="<?php echo site_url('product/show/'.$product['id']); ?>"><img src="/uploads/<?php echo $product['img']; ?>" class="img-fluid" alt=""></a>
                        </div>
                        <div class="service-content">
                            <div class="service-inner">
                                <h4 class="service-box-title"><a href="<?php echo site_url('product/show/'.$product['id']); ?>"><?php echo $product['name_'.$this->uri->segment(1)]; ?></a></h4>
                                <div class="service-desc">
                                    <p><?php echo $product['info_short_'.$this->uri->segment(1)]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Our Service end -->



<!-- Action Box -->
<section class="section-md offer-service">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="play-video white-color">
                    <a href="https://youtu.be/8TTGbqDISL0" data-rel="prettyPhoto"><i class="themifyicon ti-control-play"></i></a>
                </div>
                <div class="section-title pt-4">
                    
                    <h2 class="white-color"><strong> <?php echo lang('welcome');?></strong></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Action Box end -->

            

            <!-- Testimonial -->
            <section class="section-mdt">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="section-title text-center">
                               
                                <h2><strong><br/><?php echo lang('reviews');?></strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 pt-md-0">
                        <div class="col-md-12">
                            <div class="slick-carousel testimonialbox-style-1-main" data-autoplay="true" data-dots="true" data-arrows="false" data-slides="2" data-tslides="2" data-islides="1">
                            <?php foreach($reviews as $review): ?>
                                <!-- slide-1 -->
                                <div class="">
                                    <div class="testimonialbox testimonialbox-style-1">
                                        <div class="testimonialbox-content">
                                            <div class="testimonialbox-desc">
                                                <blockquote class="testimonialbox-text"><?php echo $review->text; ?></blockquote>
                                            </div>
                                            <div class="testimonialbox-wrap d-flex">
                                                <div class="testimonialbox-thumbnail">
                                                    <img src="/assets/images/testimonial/testimonial-01.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="testimonialbox-author">
                                                    <h3 class="author-name"><?php echo $review->full_name; ?></h3>
                                                    <span><?php echo $review->user_info; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <p align='center'><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@fat"><?php echo lang('review_send');?></button> </p>
                <!-- MODAL OKNO -->
                <div id="myModal" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo lang('review_send');?></h5>
                <button type="button" class="close" data-dismiss="modal">×</button>                
            </div>
            <div class="modal-body">
              
            <input id="contact_email" class="form-control" placeholder="<?php echo lang('email');?>" name="contact_email" type="email" value="" aria-required="true" required>
            <textarea id="contact_message" class="form-control" placeholder="<?php echo lang('message');?>" name="contact_message" cols="45" rows="5" aria-required="true" required></textarea>
                <input id="contact_subject" type="text" class="form-control" placeholder="<?php echo lang('subject');?>" name="contact_subject" autocomplete="off" required>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo lang('close');?></button>
                <button type="button" class="btn btn-primary"><?php echo lang('review_send');?></button>
            </div>
        </div>
    </div>
</div>
                <!-- MODAL OKNO END -->
            </section>
            <!-- Restimonial end -->
            

           

           

            <!-- Post & Testimonial -->
            <section class="section-md bg-lightgrey">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h4 class="subheading skincolor"><?php echo lang('frequenly');?></h4>
                                <h2><?php echo lang('feel');?><br/><strong> <?php echo lang('faqs');?></strong></h2>
                            </div>
                            <div id="accordion" class="accordion accordion-02"> 
                            <?php $i = 1; ?>
                            <?php foreach($faq as $f): ?>
                                <div class="card">
                                    <div class="card-header" id="<?php echo 'heading'.$i; ?>">
                                        <h5 class="mb-0">
                                            <a class="btn btn-link <?php echo $i!=1 ? 'collapsed' : ''; ?>" role="button" data-toggle="collapse" data-target="#<?php echo 'collapse'.$i; ?>" aria-expanded="<?php echo $i==1 ? 'true' : 'false'; ?>" aria-controls="<?php echo 'collapse'.$i; ?>"><?php echo $f->question; ?></a>
                                          </h5>
                                    </div>
                                    <div id="<?php echo 'collapse'.$i; ?>" class="collapse <?php echo $i==1 ? 'show' : ''; ?>" aria-labelledby="<?php echo 'heading'.$i++; ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="d-flex">
                                              
                                                <div><?php echo $f->answer; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Post & Testimonial end -->

        </div>
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
            <div class="ts-search-logo"><img alt="optico" src="/assets/images/logo-white.png" /></div>
            <form class="ts-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
                <button type="submit"><span class="optico-icon-search"></span></button>
            </form>
        </div>
    </div>
    <?php $this->load->view('script');?>
    <script>
  $(document).ready(function(){
    $(".btn").click(function(){
        $("#myModal").modal("show");
    });
});
</script>
    
</body>

</html>