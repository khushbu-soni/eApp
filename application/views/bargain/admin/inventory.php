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
          <h3 class="blank1">Manage Deals</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>Inventory Options</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/deal/editInventory'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-6'>
                   <div class="form-group">
                    <input type="text" class="form-control" id="target_qty" name="target_qty" placeholder="Target Qty" value='<?php echo $inventory_info['target_qty'];?>' required>
                    <input type="hidden" class="form-control" id="id" name="id" placeholder="id" value='<?php echo $inventory_info['id'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Target Qty</p></span>                    
                    </div>

                   <div class="form-group">
                    <input type="number" class="form-control" id="username" name="max_purchase_per_customer" placeholder="" value='<?php echo $inventory_info['max_purchase_per_customer'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Max Purchase Qty Per Customer</p></span>                    
                    </div>

                    
                     <div class="form-group">
                    <input type="number" class="form-control" id="qty_item_out_stock" name="qty_item_out_stock" placeholder="" value='<?php echo $inventory_info['qty_item_out_stock'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Qty Item out stock</p></span>                    
                    </div>
                              
                  

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-5">
                          <input name="notify_for_qty_below" id="checkboxes-5" value="<?php echo $inventory_info['notify_for_qty_below'];?>" <?php if($inventory_info['notify_for_qty_below']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Notify_for below qty</p></span>                    
                  </div>
                  <div class="form-group">
                      <select id="stock_availbilty" name="stock_availbilty" class="form-control">
                      <option value="0" >Select Visibilty</option>
                      <option value="1" <?php if($inventory_info['stock_availbilty']==1) echo "selected";?> >In Stock</option>
                      <option value="2"  <?php if($inventory_info['stock_availbilty']==2) echo "selected";?>>Out Of Stock</option>
                    </select>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Deal Visibilty</p></span>                    
                  </div> 
      
                  
                  
                  <div class="form-group">
                    <a type="button" href='<?php echo base_url();?>admin/deal' class="btn btn-default" data-dismiss="modal">Close</a>
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