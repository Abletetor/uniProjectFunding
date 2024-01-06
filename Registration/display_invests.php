<?php 
include ('dbh.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'Profile/navbar.php'; ?>
<head>
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../core/misc/ikelog.jpg" />
    <link rel="canonical" href="1.html" />
    <link rel="shortlink" href="1.html" />

    <title>
        Attachment Connect |Uni Project Funding System
    </title>
    <link rel="stylesheet" media="all" href="../sites/default/files/css/css_ybqB3hTcC3g3OMDCruJqA1BiyAd7cfP3ogLzhKc9Pxo.css" />
    <link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" />
    <link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&amp;display=swap" />
    <link rel="stylesheet" media="all" href="../sites/default/files/css/css_u2qOcv3Rft2crTOnQPi84aY2P9MhN5kojk6_g6WfeRI.css" />


    <script src="../sites/default/files/js/js_Aqts2-Y0J9ZRpd6n1buLHV935bVZI9c7b-E47sv--o4.js"></script>

    <style type="text/css">

        .topbar .user-links a {
            color: #000 !important;
        }
    </style>
</head>

<body class="gavias-pagebuilder layout-no-sidebars wide not-preloader path-product">

<nav class="navbar navbar-expand-lg navbar-light  bg-primary ">
  <a class="navbar-brand" href="#">
  <img src="assets/img/pr5.png" width="70" height="70" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="profile.php">Home</a>
      </li>
    </ul>
  </div>
</nav>
   
    <div class="breadcrumbs">
        <div>
            <div class="breadcrumb-content-inner">
                <div class="gva-breadcrumb-content">
                    <div id="block-krowd-sub-breadcrumbs" class="text-light block gva-block-breadcrumb block-system block-system-breadcrumb-block no-title">
                        <div class="breadcrumb-style gva-parallax-background" style="
                      background-color: #f6f6f6;
                      
                      background-position: center top;
                      background-repeat: no-repeat;
                    ">
                     <?php
                                                if(isset($_GET['post_id'])){
                                                    $post=$_GET['post_id'];

                                                    $sql="SELECT Distinct p.post_id,post_title,post_img,post_by,post_date,post_content,post_type,post_tag,raise,f.name,f.profile_pic,project_cost,interest_percentage from posts p,invest_now n,fundraiser as f where p.post_id='{$post}'  limit 0,1";
                                        $result  = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_array()) {?>
 
                            <div class="breadcrumb-content-main ">
                                <h2 class="page-title">
                                <?php echo $row['post_title'] ;?>
                                </h2>
                                
                                <div class="breacrumb-link-content">
                                    <div class="">
                                        <div class="content block-content">
                                            <div class="breadcrumb-links">
                                                <div class="content-inner">
                                                    <nav class="breadcrumb" aria-labelledby="system-breadcrumb">
                                                        <h2 id="system-breadcrumb" class="visually-hidden">
                                                            Breadcrumb
                                                        </h2>
                                                        <ol>
                                                            <li>
                                                                <a href="profile.php">Dashboard</a>
                                                                <span class="dot"> . </span>
                                                            </li>
                                                            <li></li>
                                                            <li><?php echo $row['post_title'] ;?></li>
                                                        </ol>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gva-parallax-inner skrollable skrollable-between" data-bottom-top="top: -50%;" data-top-bottom="top: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div role="main" class="main main-page">
        <div class="clearfix"></div>

        <div class="help gav-help-region">
            <div class="container">
                <div class="content-inner">
                    <div>
                        <div data-drupal-messages-fallback class="hidden"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <div id="content" class="content content-full">
            <div class="content-main-inner">
                <div class="row">
                    <div id="page-main-content" class="main-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1">
                        <div class="main-content-inner">
                            <div class="content-main">
                                <div>
                                    <div id="block-krowd-sub-mainpagecontent" class="block block-system block-system-main-block no-title">
                                        <div class="content block-content">
                                                                                  <article>
                                                <div class="campaign-block campaign-single">
                                                    <div class="campaign-content-top">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="image campaign-images campaign-thumbnail lightGallery">
                                                                        <div>
                                                                            <div class="image-item">
                                                                                
                                                                                    <span class="icon-expand"><i class="gv-icon-465"></i></span>

                                                                                </a>

                                                                                <div class="item-image">
                                                                                <img loading="lazy" src="uploads/<?php echo $row['post_img'];?>" alt="" typeof="foaf:Image" >
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                           
                                                                            <div class="image-item">
                                                                                
                                                                            </div>
                                                                            <div class="image-item">
                                                                                
                                                                            </div>
                                                                            <div class="image-item">
                                                                               
                                                                            </div>
                                                                        </div>

                                                                       
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <div class="single-short-description">
                                                                        <h2><?php echo $row['post_title'] ;?></h2>
                                                                        <div itemprop="description">
                                                                            <p>
                                                                            <?php echo $row['post_content'] ;?>
                                                                            </p>
                                                                            
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="campaign-single-summary">
                                                                        <div class="campaign-categories">
                                                                            <div class="field field--name-field-campaign-category field--type-entity-reference field--label-hidden field__items">
                                                                                <div class="field__item">
                                                                                    <a href="../taxonomy/term/15.html" hreflang="en"><?php echo $row['post_tag'];?></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <h1 class="post-title">
                                                                            <div class="field field--name-title field--type-string field--label-hidden field__item">
                                                                            <?php echo $row['post_title'] ;?>
                                                                            </div>
                                                                        </h1>

                                                                        <div class="funded-content">
                                                                            <div class="row">
                                                                                <div class="col-xl-4 col-lg-4 col-sm-4 col-xs-4 column">
                                                                                    <div class="content-raised">
                                                                                        <span class="raised"><?php echo $row['raise'];?></span>
                                                                                        Raised of
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-4 col-lg-4 col-sm-4 col-xs-4 column">
                                                                                    <div class="content-raised">
                                                                                        <span class="goal">
                                                                                            <span class="field field--name-field-campaign-goal field--type-commerce-price field--label-hidden field__item"><?php echo "GHC". $row['project_cost'];?></span>
                                                                                        </span>
                                                                                        Goal
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-4 col-lg-4 col-sm-4 col-xs-4 column">
                                                                                    <span class="days"><strong class="text-theme">33</strong>
                                                                                        Days left
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="campaign-funded">
                                                                            <div class="content-funded-inner">
                                                                                <div class="funded">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" data-progress-animation="<?php echo $row['raise'];?>">
                                                                                            <span class="text-raised">Raised:</span>
                                                                                            <span class="percentage"><span></span><b><?php echo $row['raise']/100;?>%</b></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="campaign-goal inline margin-top-0">
                                                                                        <span class="label-goal text-black">Goal:</span>
                                                                                        <span class="value-goal text-theme">
                                                                                            <span class="field field--name-field-campaign-goal field--type-commerce-price field--label-hidden field__item"><?php echo "GHC". $row['project_cost'];?></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a class="btn btn-theme-second btn-donation-now" href="Invest/rate.php" ><span>Investing
                                                                                now</span></a>
                                                                    </div>
                                                                </div>
                                                                <?php } 
                                                                }
                                            }
                                                        
                                                       ?>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>

                                                                                                                            <div id="campaign-tab-update" class="campaign-tab-content tab-pane fade show">
                                                                          

                                                                        <div id="campaign-tab-reviews" class="campaign-tab-content tab-pane fade show">
                                                                            <div id="node-single-comment">
                                                                                <section></section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="popup-add-to-cart" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header clearfix">
                                                                        <button type="button" class="close" data-dismiss="modal">
                                                                            &times;
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body clearfix">
                                                                        <div class="campaign-block funded">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" data-progress-animation="33.3%">
                                                                                    <span class="text-raised">Raised:</span>
                                                                                    <span class="percentage"><span></span><b>33.3%</b></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                     
                                                                       
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer id="footer" class="footer">
        <div class="footer-inner">
            <div class="footer-center">
                <div class="container">
                    <div class="content-inner">
                        <div class="row">
                            <div class="footer-first col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-about" class="block block-block-content block-block-content7da38301-272f-4979-8de1-06b564010f17 no-title">
                                        <div class="content block-content">
                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="about-info">
                                                    <img class="margin-bottom-40" src="../sites/default/files/inline-images/pr5e1 copy.png" alt="" />
                                                    <div class="margin-bottom-40">
                                                        Uni Project Funding provides a space for
                                                        project creators to share their vision, engage
                                                        with their audience, and gather support to bring
                                                        their projects to life.
                                                    </div>
                                                    <div class="socials-v1">
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-second col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-company" class="block block-block-content block-block-contentf68ff84d-6af0-4c49-8b85-ae338addc541">
                                        <h2 class="block-title"><span>Company</span></h2>

                                        <div class="content block-content">
                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="clearfix">
                                                    <ul class="menu">
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="#">How It Works</a></li>
                                                        <li><a href="#">Knowledge hub</a></li>
                                                        <li><a href="#">Success Stories</a></li>
                                                        <li><a href="#">Contact</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-third col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-fundraising" class="block block-block-content block-block-contentf23b91f5-7aba-4752-9f3d-d2dda98888e1">
                                        <h2 class="block-title"><span>Fundraising</span></h2>

                                        <div class="content block-content">
                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="clearfix">
                                                    <ul class="menu">
                                                        <li><a href="#">Education</a></li>
                                                        <li><a href="#">Design</a></li>
                                                        <li><a href="#">Film & Video</a></li>
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Games</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-four col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 column">
                                <div>
                                    <div id="block-contactinfo" class="block block-block-content block-block-contentaee383c7-8f7b-4180-bdd3-5d53a869f526">
                                        <h2 class="block-title"><span>Contact info</span></h2>

                                        <div class="content block-content">
                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <div class="contact-info">
                                                    <ul class="icon-list-items">
                                                        <li>
                                                            <i aria-hidden="true" class="fi flaticon-call"></i>
                                                            <span class="list-text">055 203 3463</span>
                                                        </li>
                                                        <li>
                                                            <i aria-hidden="true" class="fi flaticon-email-2"></i>
                                                            <span class="list-text">needhelp@intellectual.com</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mailchimp-signup-subscribe-form mailchimp-small block block-mailchimp-signup block-mailchimp-signup-subscribe-blocksubscribe-newsletter no-title" data-drupal-selector="mailchimp-signup-subscribe-block-subscribe-newsletter-form" id="block-mailchimpsubscriptionformnewsletter">
                                        <div class="content block-content">
                                            <form action="https://previewthemes.com/krowd/product/1" method="post" id="mailchimp-signup-subscribe-block-subscribe-newsletter-form" accept-charset="UTF-8">
                                                <div id="mailchimp-newsletter-c5333bc81d-mergefields" class="mailchimp-newsletter-mergefields">
                                                    <div class="js-form-item form-item js-form-type-email form-item-mergevars-email js-form-item-mergevars-email">
                                                        <label for="edit-mergevars-email" class="js-form-required form-required">Email
                                                            Address</label>
                                                        <input data-drupal-selector="edit-mergevars-email" type="email" id="edit-mergevars-email" name="mergevars[EMAIL]" value="" size="25" maxlength="254" class="form-email required" required="required" aria-required="true" />
                                                    </div>
                                                </div>
                                                <input autocomplete="off" data-drupal-selector="form-ootvq3mqf65-6meopdu8yiuohy0-gy6y2exstxdtvq8" type="hidden" name="form_build_id" value="form-OoTvq3mQf65-6MEOPdu8Yiuohy0-gY6y2EXsTXDTVQ8" />
                                                <input data-drupal-selector="edit-mailchimp-signup-subscribe-block-subscribe-newsletter-form" type="hidden" name="form_id" value="mailchimp_signup_subscribe_block_subscribe_newsletter_form" />
                                                <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions--2">
                                                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit--2" name="op" value="Signup now" class="button js-form-submit form-submit" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="copyright-inner">
                    <div>
                        <div id="block-krowd-sub-copyright" class="block block-block-content block-block-content61f17841-749f-436d-9799-1dfeefd7ad43 no-title">
                            <div class="content block-content">
                                <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                    <div class="text-center">
                                        © Copyright
                                        <a href="">Intellectual Funding Aid</a> 2023. All Rights
                                        Reserved.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="back-to-top" href="#" data-target="html" class="scroll-to-top"><i class="fas fa-arrow-up"></i></a>
    </footer>
    </div>

    <script src="../sites/default/files/js/js_OP4bY_z2UCfOzxeIQiEyRzb2So00fkFHHFtEirWbM2A.js"></script>
</body>

</html>