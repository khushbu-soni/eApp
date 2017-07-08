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
              <form action="<?php echo base_url(); ?>merchant/merchant/update_product" method="POST" enctype="multipart/form-data" >
                <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Add Product details</h4>
                      <!-- <form class="form-horizontal style-form" method="get"> -->
                          
                          <input type="hidden" name="product_id" value="<?php echo $product->id ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Title</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="title" value="<?php echo $product->title ?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Location</label>
                            <div class="col-sm-4">
                              <select class="form-control" name="location" >
                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                <?php
                                foreach ($locations as $loc)
                                {
                                  ?>
                                <option value="<?php echo $loc->id; ?>"><?php echo $loc->name; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Category</label>
                            <div class="col-sm-4">
                              <select class="form-control" name="category">
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                <?php
                                foreach ($categories as $cat)
                                {
                                  ?>
                                <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                                <?php } ?>

                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Initial quantity</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->initial_qty ?>" name="initial_qty" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Remaining quantity</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->remaining_qty ?>" name="remaining_qty" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Actual Price</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->actual_price ?>" name="actual_price" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Discount percentage</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->discount_per ?>" name="discount_per"  required>
                              </div>
                          </div>

                          <!-- <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Discount price</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->discount_price ?>" name="discount_price" required>
                              </div>
                          </div> -->

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sold limit</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" value="<?php echo $product->sold_limit ?>" name="sold_limit" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Additional information</label>
                              <div class="col-sm-4">
                                  <textarea class="form-control" rows="3" style="resize: none;" name="additional_info" required><?php echo $product->additional_info ?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Policies</label>
                              <div class="col-sm-4">
                                  <textarea class="form-control" rows="3" style="resize: none;" name="policies" required><?php echo $product->policies ?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">What you get</label>
                              <div class="col-sm-4">
                                  <textarea class="form-control" rows="3" style="resize: none;" name="what_you_get" required><?php echo $product->what_you_get ?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-4">
                                  <textarea class="form-control" rows="3" style="resize: none;" name="description" required><?php echo $product->description ?></textarea>
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <div class="col-sm-4">
                              <select class="form-control" name="is_active">
                                <option value="<?php echo $product->is_active; ?>"><?php echo $product->is_active == '0' ? 'Enable' : 'Disable'; ?></option>
                                <option value="0">Enable</option>
                                <option value="1">Disable</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Select Image</label>
                            <div class="col-sm-4">
                              <img src="<?php echo base_url(); ?>assets/images/<?php echo $product->image; ?>" width="100px" height="100px" class="img-responsive">
                              <input class="form-control" type="file" name="img">
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">SKU (Stock Keeping Unit)</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="sku" value="<?php echo $product->sku;?>" required>
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Select Barcode</label>
                            <div class="col-sm-4">
                              <img src="<?php echo base_url(); ?>assets/bargain/merchant/logo/<?php echo $product->barcode; ?>" width="100px" height="100px" class="img-responsive">
                              <input class="form-control" type="file" name="barcode">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Featured</label>
                            <div class="col-sm-4">
                              <input type="checkbox" name="is_featured" <?php if($product->is_featured){echo 'checked';} ?>> Check me out
                            </div>
                          </div>



                          <!-- <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Select File</label>
                              <div class="col-sm-4">
                                <input class="form-control" id="input-1" type="file">
                            </div>
                          </div> -->

                          <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary" value="Update product" name="update_product">
                            <a href="<?php echo base_url();?>merchant/merchant/products" class="btn btn-default">Cancel</a>
                          </div>

                      <!-- </form> -->
                  </div>
                </div><!-- col-lg-12--> 				
              </form>
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
  </section>

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
    </script>
  

  </body>
</html>
