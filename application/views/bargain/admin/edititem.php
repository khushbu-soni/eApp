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
<link href="<?php echo base_url(); ?>assets/css/editor.css" rel="stylesheet" type="text/css" />  
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
          <h3 class="blank1">Manage Products</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>EDIT Product</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding  " style="display: block;">
               <form role="form"  method="post"  enctype="multipart/form-data" action='<?php echo base_url()?>admin/dataList/edit'>
                <div class='col-md-3'>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Product Type</p></span>                    
                    <select id="product_type_id" name="product_type_id" class="form-control">
                    <option value="0+">Please Select</option>
                      <?php foreach ($product_type as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['product_type_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Make</p></span>                    
                    <select id="make_id" name="make_id" class="form-control">
                      <?php foreach ($make as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['make_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                    <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Model</p></span>                    
                    <select id="model_id" name="model_id" class="form-control">
                      <?php foreach ($model as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['model_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Fuel Type</p></span>                    
                    <select id="fuel_type" name="fuel_type" class="form-control">
                      <?php foreach ($fueltype as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['fuel_type']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select State</p></span>                    
                    <select id="state_id" name="state_id" class="form-control">
                      <?php foreach ($state as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['state_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select City </p></span>                    
                    <select id="city_id" name="city_id" class="form-control">
                      <?php foreach ($city as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['city_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                   

            </div>
                  
                <div class='col-md-3'>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Brand </p></span>                    
                    <select id="brand_id" name="brand_id" class="form-control">
                      <?php foreach ($brand as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['brand_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select AH </p></span>                    
                    <select id="ah_id" name="ah_id" class="form-control">
                      <?php foreach ($ah as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['ah_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Warrenty </p></span>                    
                    <select id="warrenty_id" name="warrenty_id" class="form-control">
                      <?php foreach ($warrenty as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['warrenty_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="help-block"><p id="characterLeft" class="help-block ">Select Pro-rata </p></span>                    
                    <select id="prorata_id" name="prorata_id" class="form-control">
                      <?php foreach ($pro_rata as $junk) { ?>
                      <option value="<?php echo $junk->id;?>" <?php if($junk->id==$deal['prorata_id']) echo "selected" ?>><?php echo $junk->name?></option>
                      <?php }?>
                    </select>
                  </div>
                    
                  <div class="form-group">
                    <input type="text" class="form-control" id="model_name" name="model_name" placeholder="model_name" value='<?php echo $deal['model_name'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Model Name</p></span>                    
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" id="product_code" name="product_code" placeholder="product_code" value='<?php echo $deal['product_code'];?>' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">product_code</p></span>                    
                  </div> 
                    
                  </div>
                 
                                   
                <div class='col-md-3'>
                        
                <div class="form-group">
                    <input type="number" step="0.01" class="form-control" id="discount" name="discount" value='<?php echo $deal['discount'];?>' placeholder="discount " value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Discount</p></span>                    
                  </div> 

                   <div class="form-group">
                    <input type="number" step="0.01" class="form-control" id="mrp" name="mrp" value='<?php echo $deal['mrp'];?>' placeholder="Actual Price" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Acutal MRP</p></span>                    
                  </div>
                   <div class="form-group">
                    discount<input type="number" step="0.01" class="form-control" id="without_old_battery_mrpdiscount" name="without_old_battery_mrp" value='<?php echo $deal['without_old_battery_mrp'];?>' placeholder="Actual Price" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block "> MRP with old battery</p></span>                    
                  </div> 
                   <div class="form-group">
                    <input type="number" step="0.01" class="form-control" id="with_old_battery_mrp" name="with_old_battery_mrp" value='<?php echo $deal['with_old_battery_mrp'];?>' placeholder="Actual Price" value='' required>
                        <span class="help-block"><p id="characterLeft" class="help-block "> MRP without old battery</p></span>                    
                  </div> 
                 <div class="form-group">
                    <textarea class="form-control" type="textarea" id="description" name='description' placeholder="Description" maxlength="140" rows="7"><?php echo $deal['description']?></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Description</p></span>                    
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="key_benefits" name='key_benefits' placeholder="Key Benefits"  rows="7"><?php echo $deal['key_benefits']?></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Key Benefits</p></span>                    
                  </div>
                 
                </div>
                 <div class='col-md-3'>
                 <!--   <div class="form-group">
                        <label class="checkbox-inline" for="checkboxes-5">
                          <input name="gift_option" id="checkboxes-5" value=""  type="checkbox" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                        <span class="help-block"><p id="allow_merchant_to_edit_add" class="help-block ">Allow To gift</p></span>                    
      
                  </div> -->
                  
                        
                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="key_features" 
                    name='key_features' placeholder="Key Features"  rows="7"><?php echo $deal['key_features']?></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Key Features</p></span>                    
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" type="textarea" id="recomanded_for" name='recomanded_for' placeholder="recomanded_for"  rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Recomanded For</p></span>                    
                  </div>
                 
                 
                </div>

                 <div class="form-group">
                    <a href='<?php echo base_url();?>admin/dataList' class="btn btn-default" >Close</a>
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
<script src="<?php echo base_url();?>assets/js/editor.js"></script>
<script type="text/javascript">
  
   // $("#key_features").Editor(); 
</script>
 
 </script>
</script>
</body>
</html>