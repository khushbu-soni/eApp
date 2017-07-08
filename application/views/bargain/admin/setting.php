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
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/settings/edit'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-6'>
                  <div class="form-group">
                          <input name="id" id="id" value="<?php echo $config['id'];?>" type="hidden">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Home Page Deals Display From City</p></span>                    
                    <select id="dealtype" name="home_page_display_deals_city" class="form-control">
                      <?php foreach ($city as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$config['home_page_display_deals_city']) echo "selected"; ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                        <input type="number" class="form-control" id="max_number_of_slide_deals" name="max_number_of_slide_deals" value='<?php echo $config['max_number_of_slide_deals'];?>' placeholder="Name" required>
                        <span class="help-block"><p id="max_number_of_slide_deals" class="help-block ">Max Number of slide deals</p></span>                    
                  </div>

                   <div class="form-group">

                <label>Top Add Banner Image</label>
                                   
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name='imgImp'>

                        </span>
                    </span>
                    <input type="text" id='top_add_banner_image' name='top_add_banner_image' class="form-control" value='<?php echo $config['top_add_banner_image'];?>' readonly>
                </div>
             
                  
                <img id='img-upload'/>
                  <span class="help-block"><p id="top_add_banner_image" class="help-block ">Upload Image of 1200 X 131 Only </p></span>     
                </div>  
                 <?php
                  if(!empty($config['top_add_banner_image'])){
                    $logo=$config['top_add_banner_image'];?>
                <img id='img-upload1'src='<?php echo base_url();?>assets/bargain/adds/banner/<?php echo $config['top_add_banner_image'];?>' width='50%' height='20%'/>
                  <?php }?>


                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-45">
                          <input name="display_top_add_banner" id="checkboxes-45" value="<?php echo $config['display_top_add_banner'];?>" <?php if($config['display_top_add_banner']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_top_add_banner" class="help-block ">Display Top Add Banner</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-35">
                          <input name="enable_subscribe_popup" id="checkboxes-35" value="<?php echo $config['enable_subscribe_popup'];?>" <?php if($config['enable_subscribe_popup']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="enable_subscribe_popup" class="help-block ">Enable Subscribe Popup</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-25">
                          <input name="enable_ecommerce" id="checkboxes-25" value="<?php echo $config['enable_ecommerce'];?>" <?php if($config['enable_ecommerce']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="enable_ecommerce" class="help-block ">Enable Eccomerce</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-65">
                          <input name="display_popular_deals_on_home_page" id="checkboxes-65" value="<?php echo $config['display_popular_deals_on_home_page'];?>" <?php if($config['display_popular_deals_on_home_page']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_popular_deals_on_home_page" class="help-block ">Display popular deals on home page`</p></span>                    
                  </div>

                  <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-85">
                          <input name="display_featured_deals_on_home_page" id="checkboxes-85" value="<?php echo $config['display_featured_deals_on_home_page'];?>" <?php if($config['display_featured_deals_on_home_page']) echo "checked"; ?> type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="display_popular_deals_on_home_page" class="help-block ">Display Featured deals on home page`</p></span>                    
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