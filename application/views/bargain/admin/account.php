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
          <h3 class="blank1">Manage Merchant</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>Adress </h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/merchant/updateaccount'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-6'>
                   <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value='<?php echo $merchant['username'];?>' required>
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Name" value='<?php echo $merchant['id'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Username</p></span>                    
                    </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name='password' value='<?php echo $merchant['password'];?>' placeholder="Password" required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Password</p></span>                    
                  </div>

                  <div class="form-group">
                        <span class="user-name" style='display:none;' id='error-block'><p id="characterLeft" class="help-block ">Confirm Password</p></span>                    
                    <input type="password" class="form-control" id="re_password" name='re_password' value='<?php echo $merchant['password'];?>' placeholder="Password" required>
                        <span class="help-block" ><p id="characterLeft" class="help-block ">Password Mast Match</p></span>                    
                  </div>
                   <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-0">
                          <input name="allow_merchant_to_add_edit_deals" id="checkboxes-0" value="<?php echo $merchant['allow_merchant_to_add_edit_deals'];?>" <?php if($merchant['allow_merchant_to_add_edit_deals']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Allow Merchant To Edit & Add</p></span>                    
      
                  </div>
                  
                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-1">
                          <input name="allow_merchant_to_delete_deals" id="checkboxes-1"  type="checkbox" value="<?php echo $merchant['allow_merchant_to_delete_deals'];?>" <?php if($merchant['allow_merchant_to_delete_deals']) echo "checked"; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_delete_deals" class="help-block ">Allow Merchant To Delete</p></span>                    
      
                  </div>
                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-2">
                          <input name="allow_merchant_to_view_their_sales" id="checkboxes-2" value="<?php echo $merchant['allow_merchant_to_view_their_sales'];?>" type="checkbox" <?php if($merchant['allow_merchant_to_view_their_sales']) echo "checked"; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_view_their_sales" class="help-block ">View_thier_sales</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-3">
                          <input name="require_administrator_approval" id="checkboxes-3" value="<?php echo $merchant['require_administrator_approval'];?>" type="checkbox" <?php if($merchant['allow_merchant_to_view_their_sales']) echo "checked"; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="require_administrator_approval" class="help-block ">Require Administrator Approval</p></span>                    
                  </div>

                    <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-4">
                          <input name="edit_and_view_their_details" id="checkboxes-4" value="<?php echo $merchant['edit_and_view_their_details'];?>" type="checkbox" <?php if($merchant['allow_merchant_to_view_their_sales']) echo "checked"; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="edit_and_view_their_details" class="help-block ">edit_and_view_their_details </p></span>                    
                  </div>
      
                  <div class="form-group">
                    <a type="button" href='<?php echo base_url();?>admin/merchant' class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary" id='save' data-dismiss="modal" onclick='check(event)'>Save changes</button>
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

 <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );

function check(e){
  var password=$('#password').val();
  var re_password=$('#re_password').val();
  if(password!=re_password){
    e.preventDefault() ;
      $('#error-block').show();
  
      return false;
  }
}

 

 </script>
</script>
</body>
</html>