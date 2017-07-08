<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<?php echo $header;?>
<style type="text/css">
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

      <!--logo and iconic logo start-->
      <div class="logo">
        <h1><a href="index.html">Easy <span>Admin</span></a></h1>
      </div>
      <div class="logo-icon text-center">
        <a href="index.html"><i class="lnr lnr-home"></i> </a>
      </div>

      <!--logo and iconic logo end-->
      <?php echo $sidebar;?>
    
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content">
      <!-- header-starts -->
      <?php echo $head;?>
    
    <!-- //header-ends -->
      <div id="page-wrapper">
        <div class="graphs">
          <h3 class="blank1">Manage Customer</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>EDIT Customer</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/customer/edit'>
                <div class='col-md-3'>
                   <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Customer Name</p></span>                    
                    <input type="text" class="form-control" id="name" name="name" value='<?php echo $customer['name'];?>' placeholder="Name" required>
                    <input type="hidden" class="form-control" id="id" name="id" value='<?php echo $customer['id'];?>' placeholder="Name" required>
                    </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Customer Group</p></span>
                    <select id="customergroup" name="customergroup_id" class="form-control">
                      <?php foreach ($customergroup as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$customer['group_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Email</p></span>
                    <input type="text" class="form-control" id="email" name="email" value='<?php echo $customer['email'];?>' placeholder="Email" required>
                    </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Password</p></span>
                    <input type="password" class="form-control" id="password" name="password" value='<?php echo $customer['password'];?>' placeholder="Password" required>
                    </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Contact no.</p></span>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" value='<?php echo $customer['phone_no'];?>' placeholder="Contact no." required>
                    </div>
            </div>
                  
                <div class='col-md-3'>

                <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Country</p></span>
                    <input type="text" class="form-control" id="country" name="country" value='<?php echo $customer['country'];?>' placeholder="Country" required>
                    </div>
                   
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">State</p></span>
                    <input type="text" class="form-control" id="state" name="state" value='<?php echo $customer['state'];?>' placeholder="State" required>
                    </div>

                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Home Town</p></span>
                    <input type="text" class="form-control" id="home_town" name="home_town" value='<?php echo $customer['home_town'];?>' placeholder="Home Town" required>
                    </div>


                 <div class="form-group">
                 <span class="help-block"><p id="characterLeft" class="help-block ">Registeration Date</p></span> 
                    <input type="text" id="datepicker" class="form-control"  name="registration_date" placeholder="Valid From" value='<?php $date=date_create($customer['registration_date']);
echo date_format($date,"Y/m/d"); ?>' required>
                    <input type='hidden' name='created_at' value='<?php echo date('Y-m-d');?>'/>
                                           
                  </div>
                                                      
              </div>
                <div class='col-md-6'>
                  <div class="form-group">
                  <span class="help-block"><p id="characterLeft" class="help-block ">Permanent Address</p></span>
                    <textarea class="form-control" type="textarea" id="permanent_address" name='permanent_address' placeholder="Permanent Address" maxlength="140" rows="7"><?php echo $customer['permanent_address'];?></textarea>
                  </div>
                        
                  <div class="form-group">
                  <span class="help-block"><p id="characterLeft" class="help-block ">Shipping Address</p></span> 
                    <textarea class="form-control" type="textarea" id="shipping_address" name='shipping_address' placeholder="Shipping Address" maxlength="140" rows="7"><?php echo $customer['shipping_address'];?></textarea>
                  </div>
                

                  <div class="form-group">
                    <a href='<?php echo base_url();?>admin/customer' class="btn btn-default" >Close</a>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
                  </div>
                 
                 
                </div>
                
              </form>
    </div>

<!-- 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
      </div> -->
              </div>
            </div>
           </div>
        </div>
      </div>
        <!--footer section start-->
      <footer>
         <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
      </footer>
        <!--footer section end-->

      <!-- main content end-->
      <!-- Edit Modal -->

      <!-- Modal -->

      <!-- Edit Modal -->
   </section>
  
<?php echo $footer;?>

 
 </script>
</script>
</body>
</html>