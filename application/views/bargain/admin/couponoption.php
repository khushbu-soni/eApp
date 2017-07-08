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
                <h2>Coupon Options</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/deal/updatecouponoption'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-6'>
                  <div class="form-group">
                    <input type="text" id="datepicker" class="form-control"  name="expiry_date" placeholder="Expiry Date" value='<?php $date=date_create($couponoption['expiry_date']);
echo date_format($date,"Y/m/d"); ?>' required>
                          <input name="id" id="id" value="<?php echo $couponoption['id'];?>" type="hidden">
                        <span class="help-block"><p id="characterLeft" class="help-block ">Expiry Date</p></span>                    
                  </div>
                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-5">
                          <input name="display_price" id="checkboxes-5" value="<?php echo $couponoption['display_price'];?>" <?php if($couponoption['display_price']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Display Price</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-15">
                          <input name="display_merchant_address" id="checkboxes-15" value="<?php echo $couponoption['display_merchant_address'];?>" <?php if($couponoption['display_merchant_address']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Display Merchant Address</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-4">
                          <input name="display_merchant_contact_info" id="checkboxes-4" value="<?php echo $couponoption['display_merchant_contact_info'];?>" <?php if($couponoption['display_merchant_contact_info']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Display Merchant Contact Info</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-14">
                          <input name="display_fine_print" id="checkboxes-14" value="<?php echo $couponoption['display_fine_print'];?>" <?php if($couponoption['display_fine_print']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_fine_print" class="help-block ">Display Fine Print</p></span>                    
                  </div>
                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-18">
                          <input name="display_highlights" id="checkboxes-18" value="<?php echo $couponoption['display_highlights'];?>" <?php if($couponoption['display_highlights']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_highlights" class="help-block ">Display Highlights</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-11">
                          <input name="display_merchant_logo" id="checkboxes-11" value="<?php echo $couponoption['display_merchant_logo'];?>" <?php if($couponoption['display_merchant_logo']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_merchant_logo" class="help-block ">Display Merchant Logo</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-71">
                          <input name="display_product_image" id="checkboxes-71" value="<?php echo $couponoption['display_product_image'];?>" <?php if($couponoption['display_product_image']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_product_image" class="help-block ">Display Product Image</p></span>                    
                  </div>

                  <div class="form-group">
                <label>Upload Barcode Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name='imgImp'>
                        </span>
                    </span>
                    <input type="text" id='barcode_image' name='barcode_image' class="form-control" value='<?php echo $couponoption['barcode_image'];?>' readonly>
                </div>
             
                  
                <img id='img-upload'/>
                  
                </div>  
                 <?php
                  if(!empty($couponoption['barcode_image'])){
                    $logo=$couponoption['barcode_image'];?>
                <img id='img-upload1'src='<?php echo base_url();?>assets/bargain/deals/barcode/<?php echo $couponoption['barcode_image'];?>'/>
                  <?php }?>
        
                
      
                  
                  
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
$(document).ready( function() {

     
     

      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
    
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
                $('#img-upload1').hide();

            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        
        readURL(this);
    });   
    

  });
 

 </script>
</script>
</body>
</html>