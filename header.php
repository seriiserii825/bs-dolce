<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700%7CGreat+Vibes">

	<?php wp_head(); ?>
</head>
<body>
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
             data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
             data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
             data-lg-stick-up-offset="100px" data-xl-stick-up-offset="120px" data-xxl-stick-up-offset="140px"
             data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse">
                <span></span>
            </div>

	        <?php if ( ! dynamic_sidebar( 'wpglobus' ) ): ?>
                <h3>For wpglbous widget</h3>
	        <?php endif; ?>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <div class="rd-navbar-collapse">

                        <div class="contacts-ruth">
                            <div class="unit unit-spacing-xs-2 align-items-center">
                                <div class="unit-left">
                                    <span class="icon linearicons-map-marker"></span>
                                </div>
                                <div class="unit-body">
                                    <a href="<?php echo home_url(); ?>"><?php echo get_field('address', 7); ?></a>
                                </div>
                            </div>
                        </div>


                        <a class="button button-sm button-icon button-icon-left button-default-outline-3 button-zakaria" href="index.html#">
                            <span class="icon mdi mdi-email-outline"></span>
                            Get in touch
                        </a>

                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="index.html">
                                <img class="brand-logo-dark"
                                     src="<?php echo get_template_directory_uri(); ?>/images/logo-default-231x49.png"
                                     alt="" width="231"
                                     height="49"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/logo-default-231x49.png 2x"/>
                                <img class="brand-logo-light"
                                     src="<?php echo get_template_directory_uri(); ?>/images/logo-inverse-231x49.png"
                                     alt=""
                                     width="231" height="49"
                                     srcset="<?php echo get_template_directory_uri(); ?>/images/logo-inverse-231x49.png 2x"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-button">
                        <a class="button button-sm button-icon button-icon-left button-default-outline-3 button-zakaria"
                           href="index.html#">
                            <span class="icon mdi mdi-email-outline"></span>
                            Get in touch
                        </a>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <?php wp_nav_menu( [
                        	'theme_location'  => 'menu-top',
                        	'menu'            => '',
                        	'container'       => '',
                        	'container_class' => '',
                        	'container_id'    => '',
                        	'menu_class'      => 'rd-navbar-nav',
                        	'menu_id'         => '',
                        	'echo'            => true,
                        	'fallback_cb'     => 'wp_page_menu',
                        	'before'          => '',
                        	'after'           => '',
                        	'link_before'     => '',
                        	'link_after'      => '',
                        	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        	'depth'           => 0,
                        	'walker'          => '',
                        ] ); ?>

                    </div>
                    <div class="rd-navbar-main-element">
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search rd-navbar-search-3">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3"
                                    data-rd-navbar-toggle=".rd-navbar-search">
                                <span></span>
                            </button>
                            <form class="rd-search" action="search-results.html"
                                  data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input class="rd-navbar-search-form-input form-input"
                                           id="rd-navbar-search-form-input" type="text" name="s"
                                           autocomplete="off"/>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button class="rd-search-form-submit fl-bigmug-line-search74"
                                            type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <!-- RD Navbar Basket-->
                        <div class="rd-navbar-basket-wrap">
                            <button class="rd-navbar-basket fl-bigmug-line-shopping202"
                                    data-rd-navbar-toggle=".cart-inline">
                                <span>2</span>
                            </button>
                            <div class="cart-inline">
                                <div class="cart-inline-header">
                                    <h5 class="cart-inline-title">In cart:
                                        <span> 2</span>
                                        Products
                                    </h5>
                                    <h6 class="cart-inline-title">Total price:
                                        <span> $48</span>
                                    </h6>
                                </div>
                                <div class="cart-inline-body">
                                    <div class="cart-inline-item">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left">
                                                <a class="cart-inline-figure" href="single-product.html">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-mini-6-100x90.png"
                                                         alt="" width="100"
                                                         height="90"/>
                                                </a>
                                            </div>
                                            <div class="unit-body">
                                                <h6 class="cart-inline-name">
                                                    <a href="single-product.html">MILK CHOCOLATE PUDDING</a>
                                                </h6>
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <div class="table-cart-stepper">
                                                            <input class="form-input" type="number"
                                                                   data-zeros="true" value="1" min="1" max="1000"/>
                                                        </div>
                                                        <h6 class="cart-inline-title">$25.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-inline-item">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left">
                                                <a class="cart-inline-figure" href="single-product.html">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product-mini-7-100x90.png"
                                                         alt="" width="100"
                                                         height="90"/>
                                                </a>
                                            </div>
                                            <div class="unit-body">
                                                <h6 class="cart-inline-name">
                                                    <a href="single-product.html">CHOCOLATE Truffles</a>
                                                </h6>
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <div class="table-cart-stepper">
                                                            <input class="form-input" type="number"
                                                                   data-zeros="true" value="1" min="1" max="1000"/>
                                                        </div>
                                                        <h6 class="cart-inline-title">$23.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-inline-footer">
                                    <div class="group-sm">
                                        <a class="button button-default-outline-2 button-zakaria"
                                           href="cart-page.html">Go to cart
                                        </a>
                                        <a class="button button-primary button-zakaria"
                                           href="checkout.html">Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202 rd-navbar-fixed-element-2"
                           href="cart-page.html">
                            <span>2</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

