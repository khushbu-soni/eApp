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
                <h2>Deals</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding" style="display: block;">
                 <a type="submit" class="btn btn-sm btn-warning warning_33 pull-right" href="<?php echo base_url();?>admin/deal/add" >Add</a>
               <table  class="table table-striped" id='example' class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr class="warning">
                      <th>#</th>
                      <th>Name</th>
                      <th>Merchant</th>
                      <th>Deal Type</th>
                      <th>Manage Images</th>
                      <th>Inventory Options</th>
                      <th>Options</th>
                      <th>Status</th>
                      
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                  <tbody >
                    <?php
                     $i=1;
                     foreach ($deals as $junk) {?>
                      
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $junk->name;?></td>
                      <td><?php echo $junk->merchant_name;?></td>
                      <td><?php echo $junk->dealtype;?></td>
                      <td><a class='label label-warning' href='<?php  echo base_url()?>admin/deal/images?id=<?php echo $junk->id;?>'>Images</a>
                      <td><a class='label label-green' href='<?php  echo base_url()?>admin/deal/inventory?id=<?php echo $junk->id;?>'>Inventory Options</a>
                      <td>
                        <?php 
                        if($junk->dealtype_id!=1){?>
                        <a class='label label-purple' href='<?php  echo base_url()?>admin/deal/customoption?id=<?php echo $junk->id;?>'>Custom Options</a>
                        <?php }?>
                        <?php if($junk->dealtype_id==1){?>
                        <a class='label label-yellow' href='<?php  echo base_url()?>admin/deal/couponoption?id=<?php echo $junk->id;?>'>Coupon Options</a>
                        <?php } ?>
                      </td>

                     <td>
                        <?php 
                        if($junk->status){?>
                        <button class='btn btn-xs btn-warning warning_44' id='disable' onclick='disable(<?php echo $junk->id;?>)'>Enable</button>
                        <?php } ?>
                         <?php if(!$junk->status){?>
                        <button class='btn btn-danger' id='enable' onclick='enable(<?php echo $junk->id;?>)'>Disable</button>
                        <?php } ?>
                       

                        </td>
                     
                      <td><a class='btn btn-info' href='<?php  echo base_url()?>admin/deal/editdeal?id=<?php echo $junk->id;?>'>Edit</button></a>
                      <td><button class='btn btn-danger' onclick='deleteDeal(<?php echo $junk->id;?>)'>Delete</button></td>
                    </tr>
                    <?php $i++;  } ?>
                     
                                      
                  </tbody>
                  <tfoot>
            <tr class="warning">
                     <th>#</th>
                     <th>Name</th>
                      <th>Merchant</th>
                      <th>Deal Type</th>
                      <th>Manage Images</th>
                      <th>Inventory Options</th>
                      <th>Options</th>
                      <th>Status</th>
                      
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                </tfoot>
                </table>
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
   </section>
 </body>
  
<?php echo $footer;?>

 <script type="text/javascript">

function deleteDeal(id){
      if(confirm('Are you Sure..?')){
        $.ajax({
          type:'GET',
          url: "<?php echo base_url()?>admin/deal/deleteDeal",
          data:{id:id},
          success: function(result){
          window.location.href='';
      }});
        
      }
    }

      function enable(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/deal/enable",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }

     function disable(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/deal/disable",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }

    
 </script>
</script>
</body>
</html>