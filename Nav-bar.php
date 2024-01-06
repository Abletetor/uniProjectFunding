<!DOCTYPE html>
<html lang="en">

<head>
    <title>Navigation bar</title>
</head>

<body>
    <a href="#main-content" class="visually-hidden focusable">
        Skip to main content
    </a>

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="body-page gva-body-page">
            <header id="header" class="header-default header-v">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="topbar-content">
                                    <div class="topbar-left">
                                        <div>
                                            <div id="block-topbarinformation" class="block block-block-content block-block-contentf1d586a4-4ec8-4a2b-922c-104e3215b17b no-title">
                                                <div class="content block-content">
                                                    <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                        <div class="topbar-information">
                                                            <ul class="infor-list">
                                                                <li class="email">
                                                                    <i class="fi flaticon-email-1">&nbsp;</i>needhelp@unproject.com
                                                                </li>
                                                                <li class="phone">
                                                                    <i class="fi flaticon-pin">&nbsp;</i>Poly
                                                                    Junction 1, Koforidual
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="topbar-right">
                                        <div class="topbar-button">
                                            <a href="profile.php" class="btn-header">
                                                <i aria-hidden="true" class="fi flaticon-plus"></i>
                                                Invest Now
                                            </a>
                                        </div>

                                        <div class="gva-user-region user-region">
                                            <span class="icon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <div class="user-content">
                                            <?php if (!isset($_SESSION['id'])) { ?>
                                                <ul class="user-links">
                                                    <li><a href="Registration/login.php">Login</a></li>
                                                    <li><a href="Registration/signup.php">Register</a></li>
                                                </ul>
                                            </div>
                                            <?php } else { ?>
          <ul class="navbar nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              

            </li>
            <li class="nav-item">
              <a href="cust_profile.php" class="nav-link px-2 text-dark">
                Welcome, <?= $_SESSION['username'] ?>
                <i class="bi bi-person-circle"></i>

              </a>

            </li>
            <li class="nav-item">
              <a href="logout.php" class="mx-2 mt-1 mt-md-0 btn btn-outline-danger">Log Out</a>

            </li>

          </ul>
        <?php } ?>

                                        </div>

                                        <div class="gva-search-region search-region">
                                            <span class="icon"><i class="gv-icon-52"></i></span>
                                            <div class="search-content">
                                                <div>
                                                    <div class="search-block-form block block-search container-inline" data-drupal-selector="search-block-form" id="block-krowd-sub-searchform" role="search">
                                                        <form action="https://previewthemes.com/krowd/search/node" method="get" id="search-block-form" accept-charset="UTF-8" class="search-form search-block-form">
                                                            <div class="js-form-item form-item js-form-type-search form-item-keys js-form-item-keys form-no-label">
                                                                <label for="edit-keys" class="visually-hidden">Search</label>
                                                                <input title="Enter the terms you wish to search for." data-drupal-selector="edit-keys" type="search" id="edit-keys" name="keys" value="" size="15" maxlength="128" class="form-search" />
                                                            </div>
                                                            <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                                                                <input class="search-form__submit button js-form-submit form-submit" data-drupal-selector="edit-submit" type="submit" id="edit-submit" value="Search" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="gva-cart-region cart-region">
                                            <div>
                                                <div id="block-krowd-sub-cart" class="block block-commerce-cart no-title">
                                                    <div class="content block-content">
                                                        <div class="cart--cart-block">
                                                            <div class="cart-block--summary">
                                                                <a class="cart-block--link__expand" href="cart.html">
                                                                    <span class="cart-block--summary__icon"><img src="modules/contrib/commerce/icons/ffffff/cart.png" alt="Shopping cart" typeof="foaf:Image" />
                                                                    </span>
                                                                    <span class="cart-block--summary__count">0
                                                                        items</span>
                                                                </a>
                                                            </div>
                                                            <div class="cart-block--contents">
                                                                <div class="cart-block--contents__inner">
                                                                    <div class="cart-block--contents__items">
                                                                        <div class="alert">
                                                                            There are no products in your shopping
                                                                            cart.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="header-content-layout gv-sticky-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="header-main-inner p-relative">
                                        <div class="header-inner clearfix">
                                            <div class="branding">
                                                <div>
                                                    <a href="index.php" title="Home" rel="home" class="site-branding-logo">
                                                        <img class="logo-default" src="themes/custom/krowd_sub/pr5e11e.png" alt="Home" />
                                                        <img class="logo-default logo-white" src="themes/custom/krowd_sub/INTEL2.png" alt="Home" />
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="main-menu">
                                                <div class="area-main-menu">
                                                    <div class="area-inner">
                                                        <div class="header-menu">
                                                            <div class="gva-offcanvas-mobile">
                                                                <div class="close-offcanvas d-none">
                                                                    <i class="gv-icon-8"></i>
                                                                </div>
                                                                <div class="main-menu-inner">
                                                                    <div>
                                                                        <nav aria-labelledby="block-krowd-sub-mainnavigation-menu" id="block-krowd-sub-mainnavigation" class="block block-menu navigation menu--main">
                                                                            <h2 class="visually-hidden block-title block-title" id="block-krowd-sub-mainnavigation-menu">
                                                                                <span>Main navigation</span>
                                                                            </h2>

                                                                            <div class="block-content">
                                                                                <div class="gva-navigation">
                                                                                    <ul class="clearfix gva_menu gva_menu_main">
                                                                                        <li class="menu-item menu-item--expanded menu-item--active-trail">
                                                                                            <a href="index.php">
                                                                                                Home<span class="icaret nav-plus "></span>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li class="menu-item menu-item--expanded">
                                                                                            <a href="campaigns.php">
                                                                                                Campaigns<span class="icaret nav-plus "></span>
                                                                                            </a>

                                                                                           
                                                                                        </li>

                                                                                        <li class="menu-item menu-item--expanded">
                                                                                            <a href="index.php">
                                                                                                Pages<span class="icaret nav-plus fas fa-chevron-down"></span>
                                                                                            </a>

                                                                                            <ul class="menu sub-menu">
                                                                                                <li class="menu-item">
                                                                                                    <a href="about.php">
                                                                                                        About
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li class="menu-item">
                                                                                                    <a href="our-mission.php">
                                                                                                        Our Mission
                                                                                                    </a>
                                                                                                </li>

                                                                                                
                                                                                                <li class="menu-item">
                                                                                                    <a href="events.php">
                                                                                                        Events
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li class="menu-item">
                                                                                                    <a href="gallery.php">
                                                                                                        Gallery
                                                                                                    </a>
                                                                                                </li>

                                                                                        </li>
                                                                                    </ul>
                                                                                    </li>

                                                                                    
                                                                                    <li class="menu-item menu-item--expanded">
                                                                                        <a href="blogs-grid.html">
                                                                                            Blog<span class="icaret nav-plus "></span>
                                                                                        </a>

                                                                                        
                                                                                    </li>

                                                                                    <li class=" menu-item">
                                                                                                    <a href="contact-us.php">
                                                                                                        Contact
                                                                                                    </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                </div>
                                                                            </div>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="menu-bar" class="menu-bar">
                                                                <span class="one"></span>
                                                                <span class="two"></span>
                                                                <span class="three"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header-right">
                                                <div>
                                                    <div id="block-headersupport" class="block block-block-content block-block-contenta6072ff6-daa3-43e9-9c76-0628bff58a56 no-title">
                                                        <div class="content block-content">
                                                            <div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                <div class="header-info">
                                                                    <div class="header-icon">
                                                                        <i class="fi flaticon-chat"></i>
                                                                    </div>
                                                                    <div class="header-content">
                                                                        <h3 class="title">
                                                                            <a href="tel:0552033463">Call Anytime</a>
                                                                        </h3>
                                                                        <div class="text">055 203 3463</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</body>

</html>