<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Include the random string file
require 'captcha/rand.php';

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html>
<head>
<title>BuyStop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico">
<link href="css/reset.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet"  />
<link href="css/andepict.css" rel="stylesheet">
<link href="css/product-slider.css" rel="stylesheet">
<link href="css/jquery.selectbox.css" rel="stylesheet" />
<link href="css/nouislider.css" rel="stylesheet">
<link href="css/fb_style.css" rel="stylesheet">
<link href="css/isotope.css" rel="stylesheet">
<link href="css/cloudzoom.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet'>
<!--[if IE 9 ]><link href="css/styleie9.css" rel="stylesheet"> <![endif]-->
<!--[if lte IE 8 ]> <link href="css/styleie8.css" rel="stylesheet"> <script src="js/html5.js"></script><![endif]-->
<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="wrap">
  <div id="right_toolbar" class="hidden-phone hidden-tablet">
    <div><a href="#"><img src="img/logo_small.png" width="52" height="142" alt=""></a></div>
    <div class="shoppingcart">
      <div class="fadelink"><span class="pull-right"> <a href="shopping-cart.html" class="btn"><i class="icon-basket icon-large"></i></a> </span><span class="badge  badge-inverse">3</span>
        <div class="shopping_cart_mini hidden-phone hidden-tablet">
          <div class="inner-wrapper">Recently added item(s)
            <div class="item"> <a href="#" class="product-image"><img src="img/product-image-minicart.png" alt=""></a>
              <div class="product-detailes"> <a href="#" class="product-name">Mauris et ligula quis </a>
                <div class="product-price">1 x $400.00</div>
              </div>
              <div class="alignright"> <a href="#"><i class="icon-edit-1"></i></a> <a href="#"><i class="icon-trash-3"></i></a> </div>
            </div>
            <div class="wrapper"> <a href="shopping-cart.html" class="button">View shopping cart</a> <a href="checkout.html" class="button">Proceed to Checkout</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="search_wrapper">
      <form class="form-search" id="form-search-right">
        <button type="submit" class="btn" onClick="document.getElementById('form-search-right').submit()"><i class="icon-search-2 icon-large"></i></button>
        <input type="text" class="input-medium search-query" value="search" onblur="if (this.value == '') {this.value = 'search';}" onfocus="if(this.value == 'search') {this.value = '';}">
      </form>
    </div>
    <div id="back-top"> <a href="#top"><i class="icon-up-2"></i></a> </div>
  </div>
  <!--HEADER-->
  <div id="topline">
    <div class="container">
      <div class="wrapper_w">
        <div class="pull-left hidden-phone hidden-tablet ">
          <div class="phone"><span><i class="icon-mobile-alt"></i>+1</span> 234 <span>5678900</span></div>
        </div>
        <div class="pull-right">
          <div class="alignright"><span class="hidden-small-desktop">Default welcome msg! &nbsp;&nbsp;</span>
            <div class="login_social hidden-tablet hidden-phone"> <a href="#" class="button_small"><i class="icon-facebook"></i><span>Facebook</span></a> <a href="#" class="button_small"><i class="icon-twitter-bird"></i><span>Twitter</span></a> </div>
            <span class="hidden-phone"> <a href="#">Login</a> / <a href="#">Register</a> &nbsp;&nbsp;</span>
            <div class="fadelink"> <a href="#">Account</a>
              <div class="ul_wrapper">
                <ul>
                  <li> <a href="account.html"> Account </a> </li>
                  <li> <a href="wishlist.html"> Wishlist </a> </li>
                  <li> <a href="checkout.html"> Checkout </a> </li>
                  <li> <a href="login.html"> Log In </a> </li>
                </ul>
              </div>
            </div>
            <span class="link_label">Language:</span>
            <div class="fadelink"> <a href="#">English</a>
              <div class="ul_wrapper">
                <ul>
                  <li><img src="img/flag_gb.png" alt=""> <a href="#">English </a> </li>
                  <li><img src="img/flag_fr.png" alt=""> <a href="#">French </a> </li>
                  <li><img src="img/flag_ge.png" alt=""> <a href="#">German </a> </li>
                </ul>
              </div>
            </div>
            <span class="link_label">Currency:</span>
            <div class="fadelink"> <a href="#">US Dollars</a>
              <div class="ul_wrapper">
                <ul>
                  <li> <a href="#">($)&nbsp;US&nbsp;Dollars </a> </li>
                  <li> <a href="#">(&#8364;)&nbsp;Euro</a> </li>
                  <li> <a href="#">(&pound;)&nbsp;British&nbsp;Pounds </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="header">
    <div id="spy" class="visible-desktop visible-tablet">
      <div class="container">
        <div class="row">
          <div class="span12">
            <nav></nav>
          </div>
          <div class="spy-left">
            <div class="spy_logo"> <a href="index.html" class="logo_inner"><img src="img/logo.png" alt=""></a></div>
          </div>
          <div class="spy-right">
            <div class="spyshop_search  hidden-tablet">
              <form class="form-search" id="form-search-spy">
                <input type="text" class="search-query" value="search here..." onblur="if (this.value == '') {this.value = 'search here...';}" onfocus="if(this.value == 'search here...') {this.value = '';}">
                <button type="submit" class="btn" onclick="document.getElementById('form-search').submit()"><i class="icon-search-2 icon-large"></i></button>
              </form>
            </div>
            <div class="spyshop"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper_w">
        <div id="logo"> <a href="index.html" class="logo_inner"><img src="img/logo.png" width="250" height="85" alt=""></a> </div>
        <div class="pull-right padding-1" id="cart">
          <div class="shoppingcart">
            <div class="fadelink"><span class="pull-right"> <a href="shopping-cart.html" class="btn"><i class="icon-basket icon-large"></i></a> </span><span class="badge  badge-inverse">3</span>
              <div class="shopping_cart_mini hidden-phone hidden-tablet">
                <div class="inner-wrapper">Recently added item(s)
                  <div class="item"> <a href="#" class="product-image"><img src="img/product-image-minicart.png" alt=""></a>
                    <div class="product-detailes"> <a href="#" class="product-name">Mauris et ligula quis </a>
                      <div class="product-price">1 x $400.00</div>
                    </div>
                    <div class="alignright"> <a href="#"><i class="icon-edit-1"></i></a> <a href="#"><i class="icon-trash-3"></i></a> </div>
                  </div>
                  <div class="wrapper"> <a href="shopping-cart.html" class="button">View shopping cart</a> <a href="checkout.html" class="button">Proceed to Checkout</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pull-right padding-1">
          <div class="form-search-wrapper">
            <div id="search">
              <form class="form-search" id="form-search">
                <input type="text" class="search-query" value="search entire store here..." onblur="if (this.value == '') {this.value = 'search entire store here...';}" onfocus="if(this.value == 'search entire store here...') {this.value = '';}">
                <button type="submit" class="btn" onClick="document.getElementById('form-search').submit()"><i class="icon-search-2 icon-large"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <nav>
            <ul class="nav nav-list">
              <li class="nav-header"> <a href="#level0" title="" data-toggle="collapse" class="collapsed"><i class="icon-th"></i>&nbsp;&nbsp;MENU<i class="icon-up pull-right"></i><i class="icon-down pull-right"></i> </a>
                <ul class="collapse in" id="level0" >
                  <li> <a href="index.html">HOME </a></li>
                  <li> <a href="index.html">LAYOUT </a> <a class="icon-collapse collapsed" href="#level1" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>                    <ul class="collapse in" id="level1">
                      <li> <a href="index-creative.html"> <span>Creative Layout</span> </a> </li>
                      <li> <a href="index-dark.html"> <span>Dark Layout</span> </a> </li>
                      <li> <a href="index.html"> <span>Header - classic</span> </a> </li>
                      <li> <a href="index-amazing.html"> <span>Header - amazing</span> </a> </li>
                      <li> <a href="index-slider_fullscreen.html"> <span>Slider - full screen / flex</span> </a> </li>
                      <li> <a href="index-boxed.html"> <span>Slider - boxed / revolution</span> </a> </li>
                      <li> <a href="index-footer_maxi.html"> <span>Footer - maxi</span> </a> </li>
                      <li> <a href="megamenu.html"> <span>Megamenu</span> </a> </li>
                    </ul>
</li>
                  <li> <a href="listing_usual.html"> Catalogue </a> <a class="icon-collapse collapsed" href="#level2" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                    <ul class="collapse in" id="level2">
                      <li> <a href="listing_usual.html"> <span>Listing</span> </a><a class="icon-collapse collapsed" href="#level2_1" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                        <ul class="collapse in" id="level2_1">
                          <li class="level2"> <a href="listing_usual.html"> <span>Usual</span> </a> </li>
                          <li class="level2"> <a href="listing_without_left_column.html"> <span>Without Left Column</span> </a> </li>
                          <li class="level2"> <a href="listing_small_prev.html"> <span>Small Previews</span> </a> </li>
                          <li class="level2"> <a href="listing_small_prev_without_left_column.html"> <span>Small Previews Without Left Column</span> </a> </li>
                          <li class="level2"> <a href="listing_catalogue_mode.html"> <span>Catalogue Mode </span> </a> </li>
                        </ul>
                      <li> <a href="product.html"> <span>Product</span></a> <a class="icon-collapse collapsed" href="#level2_2" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                        <ul class="collapse in" id="level2_2">
                          <li class="level2"> <a href="product.html"> <span>Product Page</span> </a> </li>
                          <li class="level2"> <a href="product_custom.html"> <span>Product + Custom Block</span> </a> </li>
                          <li class="level2"> <a href="product_related.html"> <span>Product + Related Block</span> </a> </li>
                          <li class="level2"> <a href="product-elevatezoom.html"> <span>Product Page + ElevateZoom </span> </a> </li>
                          <li class="level2"> <a href="product-elevatezoom-fancybox.html"> <span>Product Page + Fancybox</span> </a> </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li> <a href="blog_listing_view.html"> Blog </a> <a class="icon-collapse collapsed" href="#level3" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                    <ul class="collapse in" id="level3">
                      <li> <a href="blog_listing_view.html"> <span>Listing View</span> </a> </li>
                      <li> <a href="blog_table_view.html"> <span>Table View</span> </a> </li>
                      <li> <a href="blog_single_post.html"> <span>Single Post</span> </a> </li>
                    </ul>
                  </li>
                  <li> <a href="gallery_3d.html"> Gallery </a> <a class="icon-collapse collapsed" href="#level4" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                    <ul class="collapse in" id="level4">
                      <li> <a href="gallery_3d.html"> <span>Gallery: 3D Effect</span> </a> </li>
                      <li> <a href="gallery_2_columns.html"> <span>Gallery: 2 Columns</span> </a> </li>
                      <li> <a href="gallery_3_columns.html"> <span>Gallery: 3 Columns</span> </a> </li>
                      <li> <a href="gallery_4_columns.html"> <span>Gallery: 4 Columns</span> </a> </li>
                      <li> <a href="gallery_4_columns_no_space.html"> <span>Gallery: 4 Columns no space</span> </a> </li>
                      <li> <a href="gallery_single_page.html"> <span>Gallery: Single Page</span> </a> </li>
                    </ul>
                  </li>
                  <li> <a href="shortcodes_headings.html"> Shortcodes </a> <a class="icon-collapse collapsed" href="#level5" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                    <ul class="collapse in" id="level5">
                      <li> <a href="shortcodes_headings.html"><span> Headings</span> </a> </li>
                      <li> <a href="shortcodes_alerts.html"><span> Alerts</span> </a> </li>
                      <li> <a href="shortcodes_buttons.html"><span>Buttons</span> </a> </li>
                      <li> <a href="shortcodes_dropcap.html"><span> Dropcap</span> </a> </li>
                      <li> <a href="shortcodes_call_to_action.html"><span> Call To Action</span> </a> </li>
                      <li> <a href="shortcodes_columns.html"><span> Columns</span> </a> </li>
                      <li> <a href="shortcodes_icons.html"><span> Icons</span> </a> </li>
                      <li> <a href="shortcodes_list.html"> <span>List styles</span> </a> </li>
                      <li> <a href="shortcodes_popup.html"><span> Modal Popup</span> </a> </li>
                      <li> <a href="shortcodes_pricing_tables.html"><span> Pricing Tables</span> </a> </li>
                      <li> <a href="shortcodes_tabs.html"><span> Tabs</span> </a> </li>
                      <li> <a href="shortcodes_team_members.html"><span> Team Members</span> </a> </li>
                      <li> <a href="shortcodes_testimonials.html"><span> Testimonials</span> </a> </li>
                      <li> <a href="shortcodes_toggle.html"> <span>Toggle</span> </a> </li>
                      <li> <a href="shortcodes_video.html"><span> Video</span> </a> </li>
                      <li> <a href="shortcodes_tables.html"><span> Tables</span> </a> </li>
                      <li> <a href="shortcodes_quotes.html"><span> Quotes</span> </a> </li>
                    </ul>
                  </li>
                  <li> <a href="typography.html"> Pages </a> <a class="icon-collapse collapsed" href="#level6" title="" data-toggle="collapse" ><i class="icon-up pull-right"></i><i class="icon-down pull-right"></i></a>
                    <ul class="collapse in" id="level6">
                      <li> <a href="typography.html"> typography</a> </li>
                      <li> <a href="infographic.html">infographic</a> </li>
                      <li> <a href="404.html">Page 404</a> </li>
                      <li> <a href="about_us.html"> <span>About us</span> </a> </li>
                      <li > <a href="our_office.html"> <span>Our office</span> </a> </li>
                      <li> <a href="faq.html"> <span>FAQ</span> </a> </li>
                      <li> <a href="team_members.html"> <span>Team Members</span> </a> </li>
                      <li> <a href="our_store.html"> <span>Our store</span> </a> </li>
                      <li> <a href="pricing_tables.html"> <span>Pricing table</span> </a> </li>
                      <li> <a href="our_services.html"> <span>Our services</span> </a> </li>
                      <li> <a href="delivery.html"> <span>Delivery</span> </a> </li>
                      <li class="hidden-phone"> <a href="video_section.html"> <span>Video section</span> </a> </li>
                      <li> <a href="sitemap.html"> <span>Sitemap</span> </a> </li>
                    </ul>
                  </li>
                  <li> <a href="contact.php"> contacts </a> </li>
                  <li> <a href="#"> buy theme </a> </li>
                </ul>
              </li>
            </ul>
          </nav>
          <nav> 
            <!--MENU-->
            <ul class="menu" id="nav">
              <li class="menu_home_link"><a href="index.html"><i class="icon-home"></i></a></li>
              <li class="dropdown"> <a href="index.html">Layout</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">                        <ul class="list_in_column">
                          <li class="level1"> <a href="index-creative.html"> <span>Creative Layout</span> </a> </li>
                          <li class="level1"> <a href="index-dark.html"> <span>Dark Layout</span> </a> </li>
                          <li class="level1"> <a href="index.html"> <span>Header - classic</span> </a> </li>
                          <li class="level1"> <a href="index-amazing.html"> <span>Header - amazing</span> </a> </li>
                          <li class="level1"> <a href="index-slider_fullscreen.html"> <span>Slider - full screen / flex</span> </a> </li>
                          <li class="level1"> <a href="index-boxed.html"> <span>Slider - boxed / revolution</span> </a> </li>
                          <li class="level1"> <a href="index-footer_maxi.html"> <span>Footer - maxi</span> </a> </li>
                          <li class="level1"> <a href="megamenu.html"> <span>Megamenu</span> </a> </li>
                        </ul>
</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="listing_usual.html">Catalogue</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="listing_usual.html"> <span><strong>Listing</strong></span> </a>
                            <ul>
                              <li class="level2"> <a href="listing_usual.html"> <span>Usual</span> </a> </li>
                              <li class="level2"> <a href="listing_without_left_column.html"> <span>Without Left Column</span> </a> </li>
                              <li class="level2"> <a href="listing_small_prev.html"> <span>Small Previews</span> </a> </li>
                              <li class="level2"> <a href="listing_small_prev_without_left_column.html"> <span>Small Previews Without Left Column</span> </a> </li>
                              <li class="level2"> <a href="listing_catalogue_mode.html"> <span>Catalogue Mode </span> </a> </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="product.html"> <span><strong>Product</strong></span> </a>
                            <ul>
                              <li class="level2"> <a href="product.html"> <span>Product Page</span> </a> </li>
                              <li class="level2"> <a href="product_custom.html"> <span>Product + Custom Block</span> </a> </li>
                              <li class="level2"> <a href="product_related.html"> <span>Product + Related Block</span> </a> </li>
                              <li class="level2"> <a href="product-elevatezoom.html"> <span>Product Page + ElevateZoom </span> </a> </li>
                              <li class="level2"> <a href="product-elevatezoom-fancybox.html"> <span>Product Page + Fancybox</span> </a> </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="blog_listing_view.html">BLOG</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="blog_listing_view.html"> <span>Listing View</span> </a> </li>
                          <li class="level1"> <a href="blog_table_view.html"> <span>Table View</span> </a> </li>
                          <li class="level1"> <a href="blog_single_post.html"> <span>Single Post</span> </a> </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="gallery_3d.html">gallery</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="gallery_3d.html"> <span>Gallery: 3D Effect</span> </a> </li>
                          <li class="level1"> <a href="gallery_2_columns.html"> <span>Gallery: 2 Columns</span> </a> </li>
                          <li class="level1"> <a href="gallery_3_columns.html"> <span>Gallery: 3 Columns</span> </a> </li>
                          <li class="level1"> <a href="gallery_4_columns.html"> <span>Gallery: 4 Columns</span> </a> </li>
                          <li class="level1"> <a href="gallery_4_columns_no_space.html"> <span>Gallery: 4 Columns no space</span> </a> </li>
                          <li class="level1"> <a href="gallery_single_page.html"> <span>Gallery: Single Page</span> </a> </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="shortcodes_headings.html">Shortcodes</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="shortcodes_headings.html"><span> Headings</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_alerts.html"><span> Alerts</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_buttons.html"><span>Buttons</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_dropcap.html"><span> Dropcap</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_call_to_action.html"><span> Call To Action</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_columns.html"><span> Columns</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_icons.html"><span> Icons</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_list.html"> <span>List styles</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_popup.html"> <span>Modal Popup</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_pricing_tables.html"><span> Pricing Tables</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_tabs.html"><span> Tabs</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_team_members.html"><span> Team Members</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_testimonials.html"><span> Testimonials</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_toggle.html"> <span>Toggle</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_video.html"><span> Video</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_tables.html"><span> Tables</span> </a> </li>
                          <li class="level1"> <a href="shortcodes_quotes.html"><span> Quotes</span> </a> </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="typography.html">Pages</a>
                <ul class="level0 one-column">
                  <li>
                    <ul class="shadow">
                      <li class="list_column">
                        <ul class="list_in_column">
                          <li class="level1"> <a href="typography.html"> <span>Typography</span> </a> </li>
                          <li class="level1"> <a href="infographic.html"> <span>Infographic</span> </a> </li>
                          <li class="level1"> <a href="404.html"> <span>Page 404</span> </a> </li>
                          <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
                          <li class="level1"> <a href="our_office.html"> <span>Our office</span> </a> </li>
                          <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                          <li class="level1"> <a href="team_members.html"> <span>Team Members</span> </a> </li>
                          <li class="level1"> <a href="our_store.html"> <span>Our store</span> </a> </li>
                          <li class="level1"> <a href="pricing_tables.html"> <span>Pricing table</span> </a> </li>
                          <li class="level1"> <a href="our_services.html"> <span>Our services</span> </a> </li>
                          <li class="level1"> <a href="delivery.html"> <span>Delivery</span> </a> </li>
                          <li class="level1"> <a href="video_section.html"> <span>Video section</span> </a> </li>
                          <li class="level1"> <a href="sitemap.html"> <span>Sitemap</span> </a> </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li> <a href="contact.php">contact us</a> </li>
              <li> <a href="#">buy theme</a> </li>
            </ul>
            <!--MENU--> 
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--CONTENT-->
  
  <section id="content">
    <div class="container top">
      <div class="content_top">
        <div class="breadcrumbs"><a href="#">Home</a> <span>&#8250;</span> Contact Us</div>
      </div>
      <div class="row">
        <div class="span6">
          <h3>CONTACT INFORMATION</h3>
          <div class="row-fluid">
            <div class="span6">
              <p><strong>OUR ADDRESS:</strong><br>
                9863 - 9867 Mill Road, <br>
                Cambridge, MG09 99HT<br>
              </p>
              <p><strong>CONTACT PHONE:</strong><br>
                321321321, 321321321 </p>
            </div>
            <div class="span6">
              <p><strong>E-MAIL ADDRESSES:</strong><br>
                <a href="mailto:sales@mydomain.com">SALES@MYDOMAIL.COM</a> <br>
                <a href="mailto:info@mydomain.com">INFO@MYDOMAIN.COM</a></p>
              <p><strong>SKYPE:</strong><br>
                TEST.SHOP, SHOP.TEST</p>
            </div>
          </div>
          <br>
          <br>
          <p>Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis. Pellentesque adipiscing nisi. Nulla facilisi. Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
        </div>
        <div class="span6">
          <h3>FIND US</h3>
          <div class="map-outer">
            <iframe style="width:100%; height:270px; margin:0; border:0; overflow:hidden;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=LA+Aurora&amp;aq=&amp;sll=39.762235,-104.98827&amp;sspn=0.092238,0.209255&amp;ie=UTF8&amp;t=m&amp;st=112334869561858955379&amp;rq=1&amp;ev=zi&amp;split=1&amp;hq=LA&amp;hnear=%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0,+%D0%90%D1%80%D0%B0%D0%BF%D0%B0%D1%85%D0%BE,+%D0%9A%D0%BE%D0%BB%D0%BE%D1%80%D0%B0%D0%B4%D0%BE&amp;fll=39.757286,-104.986639&amp;fspn=0.046122,0.104628&amp;ll=39.775957,-104.899006&amp;spn=0.046176,0.072956&amp;z=13&amp;output=embed"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <h3>CONTACT Form</h3>
		  <div id="success"> 
			<span class="green textcenter">
				<p>Your message was sent successfully!</p>
            </span>
		  </div>
          <div id="error"> 
			<span>
				<p>Something went wrong, try refreshing and submitting the form again.</p>
            </span>
		  </div>
          <form id="contactForm" name="contact" method="post" novalidate="novalidate">
            <div class="row">
              <div class="span3">
                <p>Name:</p>
                <input type="text" class="form-control" name="name" value="">
              </div>
              <div class="span3 pull-right">
                <p>Last Name:</p>
                <input type="text" class="form-control" name="lastname" value="">
              </div>
            </div>
            <div class="row">
              <div class="span3">
                <p>Telephone:</p>
                <input type="text" class="form-control" name="phone" value="">
              </div>
              <div class="span3 pull-right">
                <p>E-Mail:</p>
                <input type="text" class="form-control" name="email" value="">
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <p>Comment:</p>
                <textarea cols="1" rows="2" class="form-control" name="message"></textarea>
              </div>
            </div>
            <div class="wrapper">
              <div class="pull-left margin-2">
                <div class="capcha">
                  <div id="captchaimage"><a href="" id="refreshimg" onClick="refreshimg(); return false;" title="Click to refresh image"><img src="captcha/image.php?<?php echo time(); ?>" alt="Captcha image"  /></a></div>
                </div>
			  </div>
              <div class="pull-left padding-2">
                <p>Antispam code:</p>
                <input class="captcha form-control input-small" type="text"  name="captcha" id="captcha" >
              </div>
            </div>
            <div class="row">
              <div class="span6">
                <button class="btn-mini margin-2" onClick="document.getElementById('form-contact').submit()">SEND MESSAGE</button>
			</div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div id="push"></div>
</div>
<!--FOOTER-->
<div  id="footer">
  <div id="footer_line">
    <div id="footer_popup" class="footer_bg allowHover">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="row">
              <div class="span3">
                <h3>Information</h3>
                <p> <a href="about_us.html">About</a> </p>
                <p> <a href="delivery.html">Delivery</a> </p>
                <p> <a href="our_store.html">Privacy Policy</a> </p>
                <p> <a href="our_store.html">Terms &amp; Conditions</a> </p>
              </div>
              <div class="span3">
                <h3>CUSTOMER SERVICE</h3>
                <p> <a href="contact.php">Contact Us </a> </p>
                <p> <a href="our_services.html"> Returns</a> </p>
                <p> <a href="sitemap.html"> Site Map </a> </p>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row">
              <div class="span3">
                <h3>MY ACCOUNT</h3>
                <p> <a href="account.html">My Account </a> </p>
                <p> <a href="shopping-cart.html"> Order History</a> </p>
                <p> <a href="wishlist.html"> Wish List</a> </p>
                <p> <a href="contact.php"> Newsletter</a> </p>
              </div>
              <div class="span3">
                <h3>NEWSLETTER SIGNUP</h3>
                <form class="form-mail">
                  <input type="text" class="input-medium" value="enter your e-mail..." onblur="if (this.value == '') {this.value = 'enter your e-mail...';}" onfocus="if(this.value == 'enter your e-mail...') {this.value = '';}">
                  <button type="submit" class="btn"><i class="icon-email"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer_button"><i class="icon-up"></i></div>
    <div class="container" id="footer_bottom">
      <div class="row">
        <div class="span12">
          <div class="pull-left noHover"><span class="hidden-phone payment_icons"><img src="img/payment1.png" alt=""><img src="img/payment2.png" alt="" height="26"><img src="img/payment3.png" alt=""><img src="img/payment4.png" alt=""><img src="img/payment5.png" alt=""></span><span class="text">&copy; 2013 <a href="#"><span class="custom_color">BUY</span>SHOP</a>. All Rights Reserved. </span></div>
          <div class="pull-right noHover"><a href="#"><i class="icon-facebook"></i></a> &nbsp; <a href="#"><i class="icon-twitter-bird"></i></a> &nbsp;&nbsp;&nbsp; <a href="#"><i class="icon-linkedin"></i></a> &nbsp; <a href="#"><i class="icon-pinterest"></i></a> &nbsp; <a href="#"><i class="icon-gplus"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<script src="js/jquery-ui.min.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.elastislide.js"></script> 
<script src="js/jquery.selectbox-0.2.js"></script> 
<script src="js/jquery.nouislider.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/cloudzoom.js"></script> 
<script src="js/jquery.inview.js"></script> 
<script src="js/jquery.jcarousel.min.js"></script> 
<script src="js/scripts.js"></script>
<script src="js/doubletaptogo.js"></script>
<script src="js/navigation.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script> 
<script type="text/javascript">
	$("body").on("click", "#refreshimg", function(){
		$.post("captcha/newsession.php");
		$("#captchaimage").load("captcha/image_req.php");
		return false;
	});
// validate book form
$(function() {
    $('#contactForm').validate({
        rules: {
			name: {
                required: true,
                minlength: 2
            },
			lastname: {
                required: true,
                minlength: 2
            },
			phone: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
			captcha: {
				required: true,
				remote: "captcha/process.php"
			}

        },
        messages: {
			captcha: "Correct captcha is required. Click the captcha to generate a new one",
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            lastname: {
                required: "Please enter your last name",
                minlength: "Your last name must consist of at least 2 characters"
            },
			phone: {
                required: "Please enter your contact phone",
                minlength: "Your name must consist of at least 5 characters"
            },
			email: {
                required: "Please enter your email"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                      $('#success').fadeIn();
					  $( '#contactForm' ).each(function(){this.reset();});
                },
                error: function() {
                    $('#contactForm').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});
</script>

<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</body>
</html>