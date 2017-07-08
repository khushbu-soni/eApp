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
                <h2>Manage Country </h2>
                <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
              </div>
              <div class="panel-body no-padding" style="display: block;">
                 <a type="submit" class="btn btn-sm btn-warning warning_33 pull-right" href="<?php echo base_url();?>admin/country/add" >Add</a>
               <table  class="table table-striped" id='example' class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr class="warning">
                      <th>#</th>
                      <th>Name</th>
                      
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                  <tbody >
                    <?php
                     $i=1;
                     foreach ($countries as $junk) {?>
                      
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $junk->name;?></td>
                     
                      <td><a class='btn btn-info' href='<?php  echo base_url()?>admin/country/editcountry?id=<?php echo $junk->id;?>'>Edit</button></a>
                      <td><button class='btn btn-danger' onclick='deleteCountry(<?php echo $junk->id;?>)'>Delete</button></td>
                    </tr>
                    <?php $i++;  } ?>
                     
                                      
                  </tbody>
                  <tfoot>
            <tr class="warning">
                      <th>#</th>
                      <th>Name</th>
                    
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

function deleteCountry(id){
      if(confirm('Are you Sure..?')){
        $.ajax({
          type:'GET',
          url: "<?php echo base_url()?>admin/country/delete",
          data:{id:id},
          success: function(result){
          window.location.href='';
      }});
        
      }
    }

    
 </script>
</script>
</body>
</html>