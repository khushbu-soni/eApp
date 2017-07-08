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
          <h3 class="blank1">Sales</h3>
           <div class="xs tabls">
            <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
              <div class="panel-heading">
                <h2>Sales Adjustment</h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding" style="display: block;">
                 <a type="submit" class="btn btn-sm btn-warning warning_33 pull-right" href="<?php echo base_url();?>admin/merchant/add" >Add</a>
               <table  class="table table-striped" id='example' class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr class="warning">
                      <th>#</th>
                      <th>OrderID</th>
                      <th>Total Amount</th>
                      <th>Discount Amount</th>
                      <th>Net Amount</th>
                      <th>Company Share</th>
                      <th>Merchant Share</th>
                    </tr>
                  </thead>

                  <tbody >
                    <?php
                     $i=1;
                     foreach ($merchant as $junk) {?>
                      
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $junk->name;?></td>
                      <td><img src='<?php echo base_url()."assets/bargain/merchant/logo/".$junk->logo;?>' width='50px' height='50px'/></td>
                      <td><?php echo $junk->email;?></td>
                      
                      <td><?php echo $junk->mobile;?></td>
                      <td><a class='label label-success' href='<?php  echo base_url()?>admin/merchant/payment?id=<?php echo $junk->id;?>'>Payment Details</button></a>
                      <td><a class='label label-warning' href='<?php  echo base_url()?>admin/merchant/account?id=<?php echo $junk->id;?>'>Merchant Account</button></a>
                      <td><a class='label label-primary' href='<?php  echo base_url()?>admin/merchant/address?id=<?php echo $junk->id;?>'>Manage Address</button></a>
                      <td>
                        <?php 
                        if($junk->status){?>
                        <button class='btn btn-xs btn-warning warning_44' id='disable' onclick='disable(<?php echo $junk->id;?>)'>Enable</button>
                        <?php } ?>
                         <?php if(!$junk->status){?>
                        <button class='btn btn-danger' id='enable' onclick='enable(<?php echo $junk->id;?>)'>Disable</button>
                        <?php } ?>
                       

                        </td>
                    </tr>
                    <?php $i++; } ?>
                     
                                      
                  </tbody>
                  <tfoot>
            <tr class="warning">
                     <th>#</th>
                      <th>OrderID</th>
                      <th>Total Amount</th>
                      <th>Discount Amount</th>
                      <th>Net Amount</th>
                      <th>Company Share</th>
                      <th>Merchant Share</th>
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
$(document).ready(function() {
    // $('#example').DataTable( {
    //     "pagingType": "full_numbers"
    // } );
} );


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
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });
function deleteMerchant(id){
      if(confirm('Are you Sure..?')){
        $.ajax({
          type:'GET',
          url: "<?php echo base_url()?>admin/merchant/delete",
          data:{id:id},
          success: function(result){
          window.location.href='';
      }});
        
      }
    }

    function enable(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/merchant/enable",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }

     function disable(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/merchant/disable",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }
 </script>
</script>
</body>
</html>