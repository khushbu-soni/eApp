<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>BatteryBoss - Responsive Battery Dealer HTML5 Template</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/style.css" type="text/css">
<!--OWL Batteryousel slider-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="<?php echo base_url(); ?>assets/website/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="<?php echo base_url(); ?>assets/website/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="<?php echo base_url(); ?>assets/website/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom Colors -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/red.css">
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/orange.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/blue.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/pink.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/green.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/colors/purple.css">-->
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/website/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/website/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/website/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/website/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/website/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>

<!--Header--> 
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.html"><img src="<?php echo base_url(); ?>assets/website/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">info@example.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+61-1234-5678-9</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <li><a href="profile-settings.html">Profile Settings</a></li>
                <li><a href="my-vehicles.html">My Vehicles</a></li>
                <li><a href="post-vehicle.html">Post a Vehicle</a></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          
          <li ><a href="<?php echo base_url(); ?>welcome" >Home</a>
            
          </li>
          <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
           <li class="dro1pdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop By Brands</a>
            
          </li>
         
           <li class="dro1pdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop By Batterys</a>
            
          </li>
          <li class="dro1pdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQ's</a>
            
          </li>
          <li class="dro1pdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
            
          </li>
          
        
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Battery Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Battery Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
            <p>1 - 8 <span>of 50 Listings</span></p>
          </div>
          <div class="result-sorting-by">
            <p>Sort by:</p>
            <form action="#" method="post">
              <div class="form-group select sorting-select">
                <select class="form-control ">
                  <option>Price (low to high)</option>
                  <option>$100 to $500</option>
                  <option>$500 to $1000</option>
                  <option>$1000 to $1500</option>
                  <option>$1500 to $2000</option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare22">
                <label for="compare22">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare23">
                <label for="compare23">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">Used</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare24">
                <label for="compare24">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare25">
                <label for="compare25">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare26">
                <label for="compare26">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/600x380.jpg" class="img-responsive" alt="image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" value="" id="compare27">
                <label for="compare27">Compare</label>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#">Battery Name Text</a></h5>
            <p class="list-price">$90,000</p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-Battery" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
            <a href="#" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="Battery-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        <div class="pagination">
          <ul>
            <li class="current">1</li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
          </ul>
        </div>
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Battery </h5>
          </div>
          <div class="sidebar_filter">
            <form action="#" method="get">
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Location</option>
                  <option>Location 1</option>
                  <option>Location 2</option>
                  <option>Location 3</option>
                  <option>Location 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Brand</option>
                  <option>Brand 1</option>
                  <option>Brand 2</option>
                  <option>Brand 3</option>
                  <option>Brand 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Select Model</option>
                  <option>Series 1</option>
                  <option>Series 2</option>
                  <option>Series 3</option>
                  <option>Series 4</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Year of Model </option>
                  <option>2016</option>
                  <option>2015</option>
                  <option>2014</option>
                  <option>2013</option>
                </select>
              </div>
              
              <div class="form-group">
                  <label class="form-label">Price Range ($)</label>
                  <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
              </div>
              <div class="form-group select">
                <select class="form-control">
                  <option>Type of Battery </option>
                  <option>New Battery</option>
                  <option>Used Battery</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Battery</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget sell_Battery_quote">
          <div class="white-text div_zindex text-center">
            <h3>Sell Your Battery</h3>
            <p>Request a quote and sell your Battery now!</p>
            <a href="#" class="btn">Request a Quote <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          <div class="dark-overlay"></div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-Battery" aria-hidden="true"></i> Recently Listed Batterys</h5>
          </div>
          <div class="recent_addedBatterys">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/200x200.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Recently Listed Battery Name</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/200x200.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Recently Listed Battery Name</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/200x200.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Recently Listed Battery Name</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url(); ?>assets/website/images/200x200.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Recently Listed Battery Name </a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url(); ?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

<!--Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h6>Top Categores</h6>
          <ul>
            <li><a href="#">Battery Brand Name</a></li>
            <li><a href="#">Battery Brand Name 2</a></li>
            <li><a href="#">Battery Brand Name 3</a></li>
            <li><a href="#">Battery Brand Name 4</a></li>
            <li><a href="#">Battery Brand Name 5</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Hybrid Batterys</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">Batteryeers</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Request a Quote</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Download Our APP:</p>
            <ul>
              <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2017 BatteryBoss. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username or Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
                  <label for="remember">Remember Me</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Login-Form --> 

<!--Register-Form -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email address*">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="<?php echo base_url(); ?>assets/website/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/website/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="<?php echo base_url(); ?>assets/website/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="<?php echo base_url(); ?>assets/website/js/slick.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/website/js/owl.carousel.min.js"></script>
</body>
</html>