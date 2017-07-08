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
          <h3 class="blank1">Manage Deals & Offers</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>EDIT Deal</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/deal/adddeal'>
                <div class='col-md-3'>
                   <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" value='' placeholder="Name" required>
                    </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Deal Type</p></span>                    
                    <select id="dealtype" name="dealtype_id" class="form-control">
                      <?php foreach ($dealtype as $junk) { ?>
                      <option value="<?php echo $junk->id;?>"><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Merchant</p></span>                    
                    <select id="merchant" name="merchant_id" class="form-control">

                      <?php foreach ($merchants as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" ><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Country</p></span>                    
                    <select id="country_id" name="country_id" class="form-control">
                      <?php foreach ($country as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" ><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select State</p></span>                    
                    <select id="state_id" name="state_id" class="form-control">
                      <?php foreach ($state as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" ><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select City </p></span>                    
                    <select id="city_id" name="city_id" class="form-control">
                      <?php foreach ($city as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" ><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                   <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Town </p></span>                    
                    <select id="town_id" name="town_id" class="form-control">
                      <?php foreach ($town as $junk) { ?>
                      <option value="<?php echo $junk->id;?>"><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>

            </div>
                  
                <div class='col-md-3'>
                   
                 <div class="form-group">
                    <input type="text" id="datepicker" class="form-control"  name="valid_from" placeholder="Valid From" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Deal Valid From</p></span>
                        <input type='hidden' name='created_at' value='<?php echo date('Y-m-d');?>'/>      
                        <input type="hidden" class="form-control" id="is_deleted" name="is_deleted" value="0" placeholder="is_deleted" required>              
                  </div>
                    <div class="form-group">
                    <input type="text" id="to_datepicker" class="form-control"  name="valid_to" placeholder="Valid To" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Deal Valid To</p></span>                    
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="SKU" name="SKU" placeholder="SKU" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">SKU</p></span>                    
                  </div> 
                 <div class="form-group">
                    <input type="text" class="form-control" id="url_key" name="url_key" placeholder="URL" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">URL Key</p></span>                    
                  </div> 
                  <div class="form-group">
                    <input type="number" step="0.01" class="form-control" id="discounted_price" name="discounted_price" placeholder="Discounted Price" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Discounted Price</p></span>                    
                  </div> 
                   <div class="form-group">
                    <input type="number" step="0.01" class="form-control" id="actual_price" name="actual_price" placeholder="Actual Price" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Acutal Price</p></span>                    
                  </div> 
                   <div class="form-group">
                      <select id="visibilty" name="visibilty" class="form-control">
                      <option value="0" >Select Visibilty</option>
                      <option value="1" >Not Visible Individually</option>
                      <option value="2" >Catalog</option>
                      <option value="3" >Search</option>
                      <option value="4" >Catalog & Search</option>
                    </select>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Deal Visibilty</p></span>                    
                  </div> 
                                   
                  </div>
                <div class='col-md-3'>
                   <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-5">
                          <input name="gift_option" id="checkboxes-5" value=""  type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Allow To gift</p></span>                    
      
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="highlights" name='highlights' placeholder="Highlights" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Highlights</p></span>                    
                  </div>
                        
                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="policies" name='policies' placeholder="Policies" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Policies</p></span>                    
                  </div>

                 
                 
                </div>
                <div class='col-md-3'>
                 
                   <div class="form-group">
                    <textarea class="form-control" type="textarea" id="about" name='about' placeholder="about" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">About Deal, What You get</p></span>                    
                  </div>
                </div>

                 <div class="form-group">
                    <a href='<?php echo base_url();?>admin/deal' class="btn btn-default" >Close</a>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
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