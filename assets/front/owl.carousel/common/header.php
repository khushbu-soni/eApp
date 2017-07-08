<header>
        <div class="top-bar bg-light hdden-xs container-fluid  ">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-2 list-inline list-unstyled no-margin hidden-xs">
                <p class="no-margin">
                 <a href="index.php"><img src="images/dummy_logo.png" class="img-responsive">
                          </p></a>
                      </div>
                      
                      <div class="pull-right col-sm-6 col-md-4 top_nav">
                        <ul class="list-inline list-unstyled pull-right">
                          <li class="active">
                            <a href="contact.php">
                              <i class="ti-cart">
                              </i>
                              Contact us
                            </a>
                          </li>
                          <li class="active">
                            <a href="faq.php">
                              <i class="ti-cart">
                              </i>
                              Faq
                            </a>
                          </li>
                          <li>
                            <a href="log_in.php">
                              Sign In
                            </a>
                          </li>
                          <li>
                            <a href="registration.php">
                              Sign Up
                            </a>
                          </li>
                          <li>
                            <a href="cart.php">
                              <i class="ti-shopping-cart">
                              </i>
                              Cart
                            </a>
                          </li>
                        </ul>
                      </div>
                      <?php include('common/location.php');?>
                  </div>
              </div>
          </div>
          <div id="nav-wrap">
            <div class="nav-wrap-holder">
              <div class="container" id="nav_wrapper">
                <nav class="navbar navbar-static-top nav-white" id="main_navbar" role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
                      <span class="sr-only">
                        Toggle navigation
                                  </span>
                                  <span class="icon-bar">
                                  </span>
                                  <span class="icon-bar">
                                  </span>
                                  <span class="icon-bar">
                                  </span>
                              </button>
                              
                          </div>
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse" id="Navbar">
                            <!-- regular link -->
                            <ul class="nav navbar-nav ">
                             <li>
                                <a href="results.php">
                                  Category 1st
                                </a>
                              </li>
                              <li>
                                <a href="results.php">
                                  Category 2nd
                                </a>
                              </li>
                              <li>
                                <a href="results.php">
                                  Category 3rd
                                </a>
                              </li>
                              <li>
                                <a href="results.php">
                                  Category 4th
                                </a>
                              </li>
                              <li>
                                <a href="results.php">
                                  Category 5th
                                </a>
                              </li>
                              </ul>
                              <ul class="nav navbar-nav pull-right">
                              <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  
                                  </i>
                                  Hello Jhon
                                  <i class="fa fa-user"></i>

                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li>
                                    <a href="user_edit.php">
                                     Edit Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a href="user_edit.php">
                                     Log Out
                                    </a>
                                  </li>
                                  
                                </ul>
                              </li>
                            </ul>
                          </div>
                      </nav>
                  </div>
              </div>
              <!-- /.div nav wrap holder -->
          </div>
          <!-- /#nav wrap -->
      </header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

      <script type="text/javascript">
        
$(document).ready(function($) {
   $('.cart1').hide();
  $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.top_nav').hide();
        $('.top-bar').css("height","67");

        $('.cart1').show();
     }
    else
     {
      $('.top_nav').fadeIn();
       $('.top-bar').css("height","90");
       $('.cart1').hide();
     }
 });
});
      </script>