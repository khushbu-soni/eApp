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
        <div class="activity_box">
          <h3>Product Type</h3>
          <div class="scrollbar scrollbar1" id="style-2">
            <button class='btn btn-success warning_2' data-toggle='modal' data-target='#addCategory' onclick='addCategory()'>Add</button>
            <div class="table-responsive">
              <table class="table table-bordered">
              <thead>
                <tr>
                <th>#</th>
                <th>Parent Category</th>
                <th>Sub Category</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
              </thead>
              <tbody id='category_tr' >
                
                
              </tbody>
              </table>
            </div><!-- /.table-responsive -->
          </div>
        </div>
       <!--body wrapper end-->
    </div>
        <!--footer section start-->
      <footer>
         <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
      </footer>
        <!--footer section end-->

      <!-- main content end-->
      <!-- Edit Modal -->

      <!-- Modal -->
<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <div class="modal-body" id='edit_category_form'>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick='edit()'>Save changes</button>
      </div>
    </div>
  </div>
</div>

      <!-- Edit Modal -->


        <!-- main content end-->
      <!-- Add Modal -->

      <!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Sub Category</h4>
      </div>
      <div class="modal-body" id='add_category_form'>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick='add()'>Save changes</button>
      </div>
    </div>
  </div>
</div>

      <!-- Edit Modal -->
   </section>
  
<?php echo $footer;?>
<script type="text/javascript">
$(document).ready(function(){
  
  $.ajax({url: "<?php echo base_url()?>admin/category/get_sub", success: function(result){
      $('#category_tr').html(result);
    }});


});
function ediCategory(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/category/getSubCategoryEditForm",
        data:{id:id},
        success: function(result){
      $('#edit_category_form').html(result);
    }});
    }

    function edit(){
      var name=$('#edit_category').val();
      var id=$('#category_id').val();
      var parent_id=$('#parent_id').val();
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/category/edit_sub_cat",
        data:{name:name,id:id,parent_id:parent_id},
        success: function(result){
        $('#category_tr').html(result);
        window.location.href='';
    }});
    }

    function deleteCat(id){
      if(confirm('Are you Sure..?')){
        $.ajax({
          type:'GET',
          url: "<?php echo base_url()?>admin/category/deleteSub",
          data:{id:id},
          success: function(result){
        $('#category_tr').html(result);
      }});
        
      }
    }
function addCategory(){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/category/getAddSubForm",
        success: function(result){
      $('#add_category_form').html(result);
    }});
    }

function add(){
      var name=$('#add_category').val();
      var parent_id=$('#parent_id').val();
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>admin/category/addSub",
        data:{name:name,parent_id:parent_id},
        success: function(result){
      $('#category_tr').html(result);
    }});
    }
 
</script>
</body>
</html>