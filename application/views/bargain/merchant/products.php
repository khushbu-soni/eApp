<!DOCTYPE html>
<html lang="en">
  <?php echo $header;?>
  <body>
<?php echo $head;?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
            <?php echo $sidebar;?>
              <!-- sidebar menu start-->
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<div class="row">
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	
	                  	  	  
	                  	  	  <a href="<?php echo base_url(); ?>merchant/merchant/add_product" class="btn btn-primary btn-sm">Add new product</a>
	                  	  	  <br/>
	                  	  	  <hr/>
	                  	  	  <table class="table">

		                          <thead>
			                          <tr>
			                              <th>#</th>
			                              <th>Product</th>
			                              <th>Inventory</th>
			                              <th>Type</th>
			                              <th>Vendor</th>
                                    <!-- <th>Status</th>
                                    <td>Featured</td> -->
			                              <th>Action</th>
			                          </tr>
		                          </thead>
                               <tbody>
		                          <?php
		                          $i=1;
		                          foreach($products as $product)
	                  	  		  {
	                  	  			?>
		                         
			                          <tr>
			                              <td><?php echo $i; ?></td>
			                              <td><?php echo $product->title; ?></td>
			                              <td><?php echo $product->remaining_qty." in stock"; ?></td>
			                              <td><?php echo $product->cat_name;  ?></td>
			                              <td><?php echo $product->ret_name;  ?></td>
                               
			                              <td><a href="<?php echo base_url(); ?>merchant/merchant/edit_product?id=<?php echo $product->id; ?>" class="btn btn-xs btn-theme03 btn-sm">edit</a>
                                        <a href="<?php echo base_url(); ?>merchant/merchant/delete_product?id=<?php echo $product->id; ?>" class="btn btn-xs btn-theme04 btn-sm" onclick="return confirm('Are you sure you want to commit delete and go back?')">delete</a>
                                    </td>
			                          </tr>
		                          <?php
		                          $i++;}

	                  	  	 ?>
                              </tbody>

		                      </table>
	                  	  </div>
	                  </div><!-- /col-md-12 -->
          	</div>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <!-- <footer class="site-footer">
          <div class="text-center">
              &copy; 2016 - Bargaincry
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  <!-- </section> -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        /*$(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '<?php echo base_url(); ?>assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });*/
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }

        /*function enable(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>merchant/merchant/enable",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }

        function disable(id){
          //alert(id);
        $.ajax({
          type:'GET',
          url: "<?php echo base_url()?>merchant/merchant/disable",
          data:{id:id},
          success: function(result){
            window.location.href='';
      }});

      }

      function markFeatured(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>merchant/merchant/mark_featured",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }

     function unmarkFeatured(id){
      $.ajax({
        type:'GET',
        url: "<?php echo base_url()?>merchant/merchant/unmark_featured",
        data:{id:id},
        success: function(result){
          window.location.href='';
    }});

    }*/
    </script>
  </body>
</html>
