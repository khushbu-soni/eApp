<!DOCTYPE html>
<html lang="en">
  
  
<!-- Mirrored from codenpixel.com/demo/kupon/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2015 06:59:47 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>
    Kupon - Deals and Coupons bootstrap template
  </title>
  <meta name="generator" content="#" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/themify-icons.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/animsition.css" rel="stylesheet">
  <link href="css/plugins.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <link rel="shortcut icon" href="#">
  <link rel="apple-touch-icon" href="#">
  <link rel="apple-touch-icon" sizes="72x72" href="#">
  <link rel="apple-touch-icon" sizes="114x114" href="#">
  </head>
  
  <body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
     <?php include('common/header.php');?>
      <?php include('common/location.php');?>
     
      <!-- /.search form -->
      
      <section id="page" class="container">
        <div class="row">
          
          <!-- Main Col -->
          <div class="main-col col-md-9">
            
            <div class="panel-body frameLR bg-white shadow mTop-30 mBtm-50">
              
              <!-- Checkout Accordion -->
              <div class="panel-group checkout" id="accordion">
                
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading heading-iconed">
                    <h4 class="panel-title case-c">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
                        <i class="icon-left">
                          1
                        </i>
                        checkout method
                      </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" role="button">
                    
                    <!-- Panel Body -->
                    <div class="panel-body">
                      
                      <!-- Row -->
                      <div class="row">
                        
                        <!-- Col -->
                        <div class="col-md-6 mgb-30-xs">
                          <h6>
                            New Customer
                          </h6>
                          <p>
                            Dont have an account? Pick one of the options below.
                          </p>
                          <div class="radio">
                            <label>
                              <input value="" name="acnt-opt" type="radio" checked="">
                              Register Account
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input value="" name="acnt-opt" type="radio">
                              Checkout as guest
                            </label>
                          </div>
                          <p>
                            Register with us for a fast and easy checkout and easy access to your order history and status
                          </p>
                          <button class="btn btn-primary btn-raised ripple-effect">
                            continue
                          </button>
                        </div>
                        <!-- /Col -->
                        
                        <!-- Col -->
                        <div class="col-md-6">
                          
                          <h6>
                            Sign In
                          </h6>
                          
                          <!-- Form -->
                          <form>
                            <!-- Form Group -->
                            <div class="form-group">
                              <label>
                                Email Address
                              </label>
                              <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <!-- /Form Group -->
                            
                            <!-- Form Group -->
                            <div class="form-group">
                              <label>
                                Password
                              </label>
                              <input type="password" class="form-control" placeholder="password">
                            </div>
                            <!-- /Form Group -->
                            
                            <!-- Form Group -->
                            <div class="form-group">
                              <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                Remember me
                              </label>
                            </div>
                            <!-- /Form Group -->
                            
                            <button class="btn btn-primary btn-raised ripple-effect">
                              sign in
                            </button>
                            
                          </form>
                          <!-- /Form -->
                          
                        </div>
                        <!-- /Col -->
                        
                      </div>
                      <!-- /Row -->
                      
                    </div>
                    <!-- /Panel Body -->
                    
                  </div>
                  <!-- /Collapse -->
                  
                </div>
                <!-- /Panel -->
                
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading heading-iconed">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                        <i class="icon-left">
                          2
                        </i>
                        Billing Information
                      </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" role="button">
                    
                    <!-- Panel Body -->
                    <div class="panel-body">
                      <!-- Form -->
                      <form>
                        <!-- Row -->
                        <div class="row">
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                First Name
                              </label>
                              <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            
                          </div>
                          <!-- /Col -->
                          
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                Second Name
                              </label>
                              <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                          </div>
                          <!-- /Col -->
                          
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                Country
                              </label>
                              <select class="form-control">
                                <option>
                                  Select country
                                </option>
                                <option>
                                  England
                                </option>
                                <option>
                                  Germany
                                </option>
                                <option>
                                  France
                                </option>
                                <option>
                                  Spain
                                </option>
                              </select>
                            </div>
                          </div>
                          <!-- /Col -->
                          
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                City / Town
                              </label>
                              <select class="form-control">
                                <option>
                                  Select city
                                </option>
                                <option>
                                  New York
                                </option>
                                <option>
                                  Paris
                                </option>
                                <option>
                                  Nairobi
                                </option>
                                <option>
                                  Cairo
                                </option>
                              </select>
                            </div>
                          </div>
                          <!-- /Col -->
                          
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                Phone Number
                              </label>
                              <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                          </div>
                          <!-- /Col -->
                          
                          <!-- Col -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>
                                Postal Code
                              </label>
                              <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                          </div>
                          <!-- /Col -->
                          
                        </div>
                        <!-- /Row -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                          <label>
                            Address Line 1
                          </label>
                          <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <!-- /Form Group -->
                        
                        <!-- Form Group -->
                        <div class="form-group">
                          <label>
                            Address Line 2
                          </label>
                          <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        
                        <!-- /Form Group -->
                        
                      </form>
                      <!-- Form -->
                      
                    </div>
                    <!-- /Panel Body -->
                    
                  </div>
                  <!-- /Collapse -->
                  
                </div>
                <!-- /Panel -->
                
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading heading-iconed">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                        <i class="icon-left">
                          3
                        </i>
                        Shippping Information
                      </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" role="button">
                    
                    <!-- Panel Body -->
                    <div class="panel-body">
                      <p>
                        Please select a shipping method.
                      </p>
                      <div class="radio">
                        <label>
                          <input value="" name="acnt-opt" type="radio" checked="">
                          Cash on delivery
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input value="" name="acnt-opt" type="radio">
                          Send by courier
                        </label>
                      </div>
                    </div>
                    <!-- /Panel Body -->
                    
                  </div>
                  <!-- /Collapse -->
                  
                </div>
                <!-- /Panel -->
                
                <!-- Panel -->
                <div class="panel panel-default">
                  <!-- Heading -->
                  <div class="panel-heading heading-iconed">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed" aria-expanded="false">
                        <i class="icon-left">
                          4
                        </i>
                        Payment Information
                      </a>
                    </h4>
                  </div>
                  <!-- /Heading -->
                  
                  <!-- Collapse -->
                  <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" role="button">
                    
                    <!-- Panel Body -->
                    <div class="panel-body">
                      
                      <p>
                        Please select a payment method.
                      </p>
                      <div class="radio">
                        <label>
                          <input value="" name="acnt-opt" type="radio">
                          Cash on delivery
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input value="" name="acnt-opt" type="radio">
                          Paypal
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input value="" name="acnt-opt" type="radio" checked="">
                          Credit Card
                        </label>
                      </div>
                      
                      <hr>
                      
                      <!-- Row -->
                      <div class="row">
                        
                        <!-- Col -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>
                              Name on card
                            </label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                          </div>
                        </div>
                        <!-- /Col -->
                        
                        <!-- Col -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>
                              Credit card number
                            </label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                          </div>
                        </div>
                        <!-- /Col -->
                        
                        <!-- Col -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>
                              Card Type
                            </label>
                            <select class="form-control">
                              <option>
                                Select country
                              </option>
                              <option>
                                England
                              </option>
                              <option>
                                Germany
                              </option>
                              <option>
                                France
                              </option>
                              <option>
                                Spain
                              </option>
                            </select>
                          </div>
                        </div>
                        <!-- /Col -->
                        
                        <!-- Col -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>
                              Expiration date
                            </label>
                            <select class="form-control">
                              <option>
                                Select city
                              </option>
                              <option>
                                New York
                              </option>
                              <option>
                                Paris
                              </option>
                              <option>
                                Nairobi
                              </option>
                              <option>
                                Cairo
                              </option>
                            </select>
                          </div>
                        </div>
                        <!-- /Col -->
                        
                        <!-- Col -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>
                              CCV Code
                            </label>
                            <input type="text" class="form-control" placeholder="3 digits only">
                          </div>
                        </div>
                        <!-- /Col -->
                        
                      </div>
                      <!-- /Row -->
                      
                      <hr>
                      
                      <button class="btn btn-primary btn-raised ripple-effect ">
                        complete order
                      </button>
                      <button class="btn btn-danger btn-raised ripple-effect ">
                        cancel order
                      </button>
                    </div>
                    <!-- /Panel Body -->
                  </div>
                  <!-- /Collapse -->
                  
                </div>
                <!-- /Panel -->
                
              </div>
              <!-- /Accordion -->
              
            </div>
            
          </div>
          <!-- /Main Col -->
          
          <!-- Side Col -->
          <div class="side-col col-md-3">
            <div class="panel-body frameLR bg-white shadow mTop-30 mBtm-50">
              <!-- Side Widget -->
              <div class="order-summary">
                <table id="cart-summary" class="std table">
                  <tbody>
                    <tr>
                      <td>
                        Total products
                      </td>
                      <td class="price">
                        $216.51
                      </td>
                    </tr>
                    <tr style="">
                      <td>
                        Shipping
                      </td>
                      <td class="price">
                        <span class="success">
                          Free shipping!
                        </span>
                      </td>
                    </tr>
                    <tr class="cart-total-price ">
                      <td>
                        Total (tax excl.)
                      </td>
                      <td class="price">
                        $216.51
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Total tax
                      </td>
                      <td class="price" id="total-tax">
                        $0.00
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Total
                      </td>
                      <td class=" site-color" id="total-price">
                        $216.51
                      </td>
                    </tr>
                  </tbody>
                  <tbody>
                  </tbody>
                </table>
                <button class="btn btn-danger btn-raised ripple-effect btn-block">
                  edit cart
                </button>
                <button class="btn btn-success btn-raised ripple-effect btn-block">
                  complete order
                </button>
              </div>
              <!-- /Side Widget -->
            </div>
            
            
          </div>
          <!-- /Side Col -->
          
        </div>
      </section>
      <!-- /#page ends -->
  
      <!-- /.CTA -->
       <?php include('common/footer.php');?>
  </div>
  <!-- /animitsion -->
  <!-- JS files -->
  <script src="js/jquery.min.js">
  </script>
  <script src="js/kupon.js">
  </script>
  <script src="js/bootstrap.min.js">
  </script>
  <script src="js/jquery.animsition.min.js">
  </script>
  <script src="owl.carousel/owl.carousel.js">
  </script>
  <script src="js/jquery.flexslider-min.js">
  </script>
  <script src="js/plugins.js">
  </script>
  
  </body>
  

<!-- Mirrored from codenpixel.com/demo/kupon/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Dec 2015 06:59:47 GMT -->
</html>