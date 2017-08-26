<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>BatteryBoss - India's Leading Car Batteries & Inverters Store</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/website/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/website/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/website/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/website/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="<?php echo base_url();?>assets/website/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="<?php echo base_url();?>assets/website/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="<?php echo base_url();?>assets/website/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom Colors -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/red.css">
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/orange.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/blue.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/pink.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/green.css">-->
<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/website/colors/purple.css">-->
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/website/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/website/images/favicon-icon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/website/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/website/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/website/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<style type="text/css">
  .select {
    height: 38px;
    line-height: 17px;
    position: relative;
}
.user_login{
  border: 0px !important;
}
.header_search button{
  width:20px;
}
</style>
<body>

<script src="<?php echo base_url();?>assets/website/js/jquery.min.js"></script>
<script type="text/javascript">
  

$("document").ready(function(){

 $('select option[value="0"]').attr("selected",true);

   $('#productType').on('change', function() {
      $('#makeType').prop('disabled',false);
    var productId=$(this).find('option:selected').attr('value');
      
      $.ajax({
        url: "<?php echo base_url();?>admin/make/getMake?id="+productId,
        
        type: "POST",
        success: function (data) {
         data = $.parseJSON(data);
         var li="";
         var option='<option value="0">Select Make</option>';
                   $.each(data, function(k, v) {
                    if(k!='li')
                      option+='<option value='+v.id+'>'+v.name+'</option>';
                      else
                        li=v.name;
                      // alert(option); 
                      
                   });
            $('#makeType').html(option);
            // $('div.make_list').find('ul.dropdown-menu').html(li);
            // $('.selectpicker').selectpicker('refresh');
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });


    })


    $('#makeType').on('change', function() {
    var modelId=$(this).find('option:selected').attr('value');
    $(this).attr('selected');
      
      $.ajax({
        url: "<?php echo base_url();?>admin/model/getModel?id="+modelId,
        
        type: "POST",
        success: function (data) {
         data = $.parseJSON(data);
         var li="";
         var option='<option>Select Model</option>';
                   $.each(data, function(k, v) {
                    if(k!='li')
                      option+='<option value='+v.id+'>'+v.name+'</option>';
                      else
                        li=v.name;
                      // alert(option); 
                      
                   });
            $('#model_list').html(option);
            // $('div.model_list').find('ul.dropdown-menu').html(li);
            // $('.selectpicker').selectpicker('refresh');
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });


    })

    $(search_form).submit(function(){

    if($('#productType').val()==0){
      alert("please select product");
      return false;
      }
      if($('#makeType').val()==0){

      alert("please select make");
      return false;
         
      }

    })

  });


</script>

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
              <a href="mailto:info@example.com">info@batteryboss.in</a> </div>
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
            <div class="login_btn">
              
              <select  id="city" name="city" class="form-control">
                  <!-- <option value="0">Select city</option> -->
                  <?php foreach ($product_list as $product){?>
                   <option value="<?php echo $product->id;?>"><?php echo "Mumbai";?></option>
                   <?php  }?>
                </select>
            </div>
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
           <a href="tel:7588010101">Help:<i class="fa fa-phone" aria-hidden="true"></i>  <i class="fa fa-angle-down" aria-hidden="true"></i>7588010101</a>
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
          
          <li class='active' ><a href="<?php echo base_url(); ?>welcome" >Home</a>
            
          </li>
          <li><a href="<?php echo base_url()?>about">About Us</a></li>
          <li><a href="<?php echo base_url(); ?>battery_brands">Shop By Brands</a></li>
          <li><a href="<?php echo base_url(); ?>car_battries">Shop By Cars</a></li>
         
            
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


<!--Banner-->
<section id="banner2">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
     <!-- Wrapper for slides -->
     <div class="carousel-inner">
          <!--item-1-->
        <div class="item active">
              <img src="<?php echo base_url();?>assets/website/images/img11.jpg" alt="image">
              <div class="carousel-caption">
                <div class="banner_text text-center div_zindex white-text">
                        <h1>Buy Your New Battery. </h1>
                        <h3>We have more than a thousand Batteries for you to choose. </h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
              </div>
          </div>
        
          <!--item-2-->
        <div class="item">
              <img src="<?php echo base_url();?>assets/website/images/ig12.jpg" alt="image">
              <div class="carousel-caption">
                <div class="banner_text text-center div_zindex white-text">
                        <h1>Find Your Dream Battery.</h1>
                        <h3>We have more than a thousand cars for you to choose. </h3>
                        <a href="#" class="btn">Read More</a>
                    </div>
              </div>
          </div>
     </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <div class="icon-prev"></div>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <div class="icon-next"></div>
          </a>
    </div>
</section>
<!--/Banner-->


<!-- Filter-Form -->
<section id="filter_form2">
  <div class="container">
    <div class="main_bg white-text">
        <h3>Find Your Battery</h3>
        <div class="row">
          <form action="<?php echo base_url();?>productList/filter" name="search_form" method="post">
            <div class="form-group col-md-3 col-sm-6">
              <div class="select">
                <select  id="productType" name="product_type_id" class="form-control">
                  <option value="0">Select Product</option>
                  <?php foreach ($product_list as $product){?>
                   <option value="<?php echo $product->id;?>"><?php echo $product->name;?></option>
                   <?php  }?>
                </select>
              </div>
            </div>
            <div class="form-group col-md-3 col-sm-6">
              <div class="select">
                <select  id="makeType" name="make_id" class="form-control">
                 <option value="0">Select Make</option>
                  <!-- <?php foreach ($make_list as $make){?>
                   <option value="<?php echo $make->id;?>"><?php echo $make->name;?></option>
                   <?php  }?> -->
                </select>
              </div>
            </div>
            <div class="form-group col-md-3 col-sm-6">
              <div class="select">
                <select id='model_list' name="model_id" class="form-control">
                   <option value="0">Select Model</option>
                  <!-- <?php foreach ($model_list as $model){?>
                   <option value="<?php echo $model->id;?>"><?php echo $model->name;?></option>
                   <?php  }?> -->
                </select>
              </div>
            </div>
            
            <!-- <div class="form-group col-md-6 col-sm-6">
              <label class="form-label">Price Range ($) </label>
              <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
            </div>
            
            
            <div class="form-group col-md-3 col-sm-6">
              <div class="select">
                <select class="form-control">
                  <option>Type of Car </option>
                  <option>New Car</option>
                  <option>Used Car</option>
                </select>
              </div>
            </div> -->
            <div class="form-group col-md-3 col-sm-6">
              <button  id="search_product" type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search  </button>
            </div>
          </form>
        </div>
    </div>
  </div>
</section>
<!-- /Filter-Form --> 


<!--About-us-->
<section id="about_us" class="section-padding">
  <div class="container">
      <div class="section-header text-center">
          <h2>Welcome to BatteryBoss</h2>
            <p>BatteryBoss.in store is created as a simple and quick method for one to purchase batteries at competitive costs either online or via phone. Our costs quoted by web or by phone are completely inclusive of VAT. We import batteries directly from the certified suppliers, enabling the consumer, you, to reap the benefits of not only exceptionally competitive costs but also by having direct access to superior quality products. </p>
        </div>
        
        <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="about_info">
                    <div class="icon_box">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <h5>LOWEST PRICE GUARANTEED</h5>
                    <p>We offer our batteries at the cheapest price available. We will beat any high street price.</p><br/>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="about_info">
                    <div class="icon_box">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <h5>100% GENUINE PRODUCTS </h5>
                    <p>You will only get 100% genuine quality product from the best brands. We follow a very strict guidelines.</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="about_info">
                    <div class="icon_box">
                        <i class="fa fa-history" aria-hidden="true"></i>
                    </div>
                    <h5>WIDE RANGE OF BRANDS</h5>
                    <p>With a robust selection of popular batteries on hand, we offer all the leading brands out there </p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="about_info">
                    <div class="icon_box">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <h5>TRUSTED BY THOUSANDS</h5>
                    <p>We give great value to customer satisfaction and can boast proudly of having trusted by thousands of clients.
 </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/About-us-->

<!--Fan-Fact-->
<section id="fun-facts" class="dark-bg vc_row">
    <div class=" col-md-6 vc_col section-padding">
        <div class="fact_m white-text">
            <h2>About BatteryBoss</h2>
            <p>We’re among the India’s fastest growing stored energy suppliers and we’re committed to supplying complete advice as well as an excellent product variety in a price point that is highly competitive.</p>
    
            <ul>
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <h2>40+</h2>
                    <p>Years In Business</p>                    
                </li>
                
                <li>
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <h2>1200+</h2>
                    <p>New Cars For Sale</p>                    
                </li>
                
                <li>
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <h2>1000+</h2>
                    <p>Used Cars For Sale</p>                    
                </li>
                
                <li>
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h2>600+</h2>
                    <p>Satisfied Customers</p>        
                </li>
            </ul>
        </div>
    </div>
  <div class=" col-md-6 vc_col section-padding">
      <div class="facts_section_bg"></div>
  </div>
</section>
<!--/Fan-fact-->

<!--Featured Car-->
<!-- <section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Featured Special Offers</h2>
     
    </div>
    <div class="row">
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" id="compare">
                <label for="compare">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">New Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">Used</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" id="compare2">
                <label for="compare2">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">Used Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-list-3">
        <div class="featured-car-list">
          <div class="featured-car-img"> <a href=""><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="Image"></a>
            <div class="label_icon">Used</div>
            <div class="compare_item">
              <div class="checkbox">
                <input type="checkbox" id="compare3">
                <label for="compare3">Compare</label>
              </div>
            </div>
          </div>
          <div class="featured-car-content">
            <h6><a href="#">Used Car Name</a></h6>
            <div class="price_info">
              <p class="featured-price">$90,000</p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
            </div>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i>0,000 km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i>143 kW</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /Featured Car--> 


<!-- Services -->
<section id="our_services" class="dark-bg vc_row">
  <div class="col-md-6 vc_col section-padding">
      <div class="facts_section_bg"></div>
  </div>
    
    <div class=" col-md-6 vc_col section-padding">
        <div class="our_services white-text">
            <h2>OUR CORE VALUES</h2>
            <p>We go through extensive training so that we may provide you with the knowledge you need to make an educated decision in choosing the right batteries that is right for your vehicle and lifestyle.</p>
            <ul>
              <li>Stress-free multiple payment options.</li>
              <li>Robust selection of popular battery brands.</li>
              <li>100s of quality batteries offers on site, trusted by a community.</li>
              <li>Maintain your car to stay safe on the road</li>
            </ul>
            <!--Services-info-->
            
            <!--Services-info-->
        </div>
    </div>
</section>
<!-- /Services -->


<!--Testimonial -->
<section id="testimonial" class="section-padding">
  <div class="container div_zindex">
    <div class="section-header text-center">
      <h2>Our Testimonial</h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div id="testimonial-slider-2">
           <div class="testimonial_wrap">
               <div class="testimonial-img">
                  <img src="<?php echo base_url();?>assets/website/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Donald Brooks</h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
               <div class="testimonial-img">
                  <img src="<?php echo base_url();?>assets/website/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
               <div class="testimonial-img">
                  <img src="<?php echo base_url();?>assets/website/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Donald Brooks</h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
               <div class="testimonial-img">
                  <img src="<?php echo base_url();?>assets/website/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
               <div class="testimonial-img">
                  <img src="<?php echo base_url();?>assets/website/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
      </div>
    </div>
  </div>

</section>
<!-- /Testimonial--> 


<!-- Help-Number--> 
<section id="help" class="section-padding">
  <div class="container">
      <div class="div_zindex white-text text-center">
            <h2>Have Any Question ?<br>
            (+61) 123 456 7890</h2>
        </div>
    </div>
    
  <!-- Dark-overlay-->    
    <div class="dark-overlay"></div>
</section>
<!-- /Help-Number--> 


<!--Blog -->
<!-- <section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Latest Updates In Automobile Industry </h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
            <div class="share_article">
              <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>15 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>10 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">But I must explain to you how all this mistaken idea.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
            <div class="share_article">
              <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>10 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>21 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">On the other hand, we denounce with righteous indignation.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
      <div class="col-md-4 col-sm-4">
        <article class="blog-list">
          <div class="blog-info-box"> 
             <div class="share_article">
              <p><i class="fa fa-share-alt" aria-hidden="true"></i></p>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <a href="#"><img src="<?php echo base_url();?>assets/website/images/600x380.jpg" class="img-responsive" alt="image"></a>
            <ul>
              <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Latest Cars</a></li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>05 Nov 2016</li>
              <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>18 Comments</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>
            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
            <a href="#" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </article>
      </div>
    </div>
  </div>
</section> -->
<!-- /Blog--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url();?>assets/website/images/100x60.png" class="img-responsive" alt="image"></a></div>
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
            <li><a href="#">Car Brand Name</a></li>
            <li><a href="#">Car Brand Name 2</a></li>
            <li><a href="#">Car Brand Name 3</a></li>
            <li><a href="#">Car Brand Name 4</a></li>
            <li><a href="#">Car Brand Name 5</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">Careers</a></li>
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
<script src="<?php echo base_url();?>assets/website/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/website/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="<?php echo base_url();?>assets/website/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="<?php echo base_url();?>assets/website/js/slick.min.js"></script> 
<script src="<?php echo base_url();?>assets/website/js/owl.carousel.min.js"></script>

</body>
</html>