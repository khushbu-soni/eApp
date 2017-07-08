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
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

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
					<h3 style='color:#f44336'>Order # <?php echo $orders['orderID'];?> | <?php echo $orders['purchased_on'];?></h3>
					<div class="col_3"></div>

			<!-- switches -->
		<div class="switches">
			<div class="col-4">
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Order # <?php echo $orders['orderID'];?></h3>
							<?php if(!$orders['isOrderConfirmationEmailSend']){?>
									<p>(the order confirmation email was not sent).<span onclick='sendConfirmationEmail()' class="btn label label-warning">Send Again</span></p>
									 <!-- <button class='label label-warning'>Send cnfirmation email</button> -->

									 <div class="progress" id='confirmationEmail' width="20">
									  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									    <h4 class="modal-title" id="myModalLabel"><p id="demo"></p>%</h4>
									  </div>
									</div>

							<?php }?>
							<?php if($orders['isOrderConfirmationEmailSend']){?>
									<p>(the order confirmation email was sent).</p>
							<?php }?>
							<?php if($orders['isCouponPdfSend']){?>
									<p>(the Coupon Pdf email was sent).</p>
							<?php }?>
							<?php if(!$orders['isCouponPdfSend']){?>
									<p>(the Coupon Pdf email was not sent).<span onclick='sendPdfEmail()' class="btn label label-success">Send Again</span></p>
									 <div class="progress" id='pdfSend' width="20">
									  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									    <h4 class="modal-title" id="myModalLabel"><p id="demo"></p>%</h4>
									  </div>
									</div>
							<?php }?>
							<ul>
								<li>Order Date: <?php echo $orders['purchased_on'];?></li>
								<li>Order Status: <?php

								 if($orders['status']==0)
			                          echo "Pending";
			                      if($orders['status']==1)
			                          echo "Cancled";
			                      if($orders['status']==2)
			                          echo "Invoiced";
			                      if($orders['status']==3)
			                          echo "Shipped";
			                      if($orders['status']==4)
			                          echo "Complete";;

								?></li>
								<li>Placed from IP:<?php echo $orders['placed_from_ip'];?></li>
								<li>Dealtype:<?php echo $orders['dealtype'];?></li>
							</ul>
						</div>
					</div>
					<div class="sparkline"><!-- 
						<canvas id="line" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
							<script>
									var lineChartData = {
										labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
										datasets : [
											{
												fillColor : "#fff",
												strokeColor : "#F44336",
												pointColor : "#fbfbfb",
												pointStrokeColor : "#F44336",
												data : [20,35,45,30,10,65,40]
											}
										]
										
									};
									new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							</script>
					 --></div>
				</div>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Account Information</h3>
							<p>&nbsp;</p>
							<ul>
								<li>Customer Name: <?php echo $orders['customer_name'];?></li>
								<li>Email: <?php echo $orders['email'];?></li>
								<li>Customer Group: General</li>
							</ul>
						</div>
					</div>
					<div class="sparkline"><!-- 
						<canvas id="bar" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
							<script>
								var barChartData = {
									labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
									datasets : [
										{
											fillColor : "#8BC34A",
											strokeColor : "#8BC34A",
											data : [25,40,50,65,55,30,20,10,6,4]
										},
										{
											fillColor : "#8BC34A",
											strokeColor : "#8BC34A",
											data : [30,45,55,70,40,25,15,8,5,2]
										}
									]
									
								};
									new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							</script>
					 --></div>
				</div>
				<?php if($dealtype_info->dealtype_id!=1){?>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<h3>Billing Address</h3>
							<p>&nbsp;</p>
							<ul>
								<li><?php echo $orders['billing_address'];?></li>
							</ul>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="sparkline">
						<!--graph-->
						<link rel="stylesheet" href="css/graph.css">
						<script src="js/jquery.flot.min.js"></script>
					<!--//graph-->
							<script>
								$(document).ready(function () {
								
									// Graph Data ##############################################
									var graphData = [{
											// Returning Visits
											data: [ [4, 4500], [5,3500], [6, 6550], [7, 7600],[8, 4500], [9,3500], [10, 6550], ],
											color: '#FFCA28',
											points: { radius: 7, fillColor: '#fff' }
										}
									];
								
									// Lines Graph #############################################
									$.plot($('#graph-lines'), graphData, {
										series: {
											points: {
												show: true,
												radius: 1
											},
											lines: {
												show: true
											},
											shadowSize: 0
										},
										grid: {
											color: '#fff',
											borderColor: 'transparent',
											borderWidth: 10,
											hoverable: true
										},
										xaxis: {
											tickColor: 'transparent',
											tickDecimals: false
										},
										yaxis: {
											tickSize: 1200
										}
									});
								
									// Graph Toggle ############################################
									$('#graph-bars').hide();
								
									$('#lines').on('click', function (e) {
										$('#bars').removeClass('active');
										$('#graph-bars').fadeOut();
										$(this).addClass('active');
										$('#graph-lines').fadeIn();
										e.preventDefault();
									});
								
									$('#bars').on('click', function (e) {
										$('#lines').removeClass('active');
										$('#graph-lines').fadeOut();
										$(this).addClass('active');
										$('#graph-bars').fadeIn().removeClass('hidden');
										e.preventDefault();
									});
								
								});
							</script>
							<div id="graph-wrapper">
								<div class="graph-container">
									<div id="graph-lines"> </div>
									<div id="graph-bars"> </div>
								</div>
							</div>
					</div>
				</div>
				<?php }?>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //switches -->
		<div class="col_1">
			<div class="col-md-12 span_12">
				<div class="activity_box">
					<h3>
Items Ordered
</h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<table  class="table table-striped" id='example' class="display" cellspacing="0" width="100%">
                  <thead>
                    <tr class="warning">
                      <th>#</th>
                      <th>Product</th>
                      <th>Item Status</th>
                      <th>Original Price</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Subtotal</th>
                      <th>Tax Amount</th>
                      <th>Tax Percentage</th>
                      <th>Discount Amount</th>
                      <th>Row Total</th>
                      
                    
                    </tr>
                  </thead>

                  <tbody >
                    <?php

                     $i=1;
                     foreach ($orders_items as $junk) {?>
                      
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $junk->product_name;?></td>
                      <td><?php 
                      if($junk->item_status==0)
                      	echo "Ordered";
                      if($junk->item_status==1)
                      	echo "Invoiced";
                      if($junk->item_status==2)
                      	echo "Shipped";
                      ?></td>
                      <td><?php echo $junk->original_price;?></td>
                      <td><?php echo $junk->price;?></td>
                      <td><?php echo $junk->qty;?></td>
                      <td><?php echo $junk->sub_total;?></td>
                      <td><?php echo $junk->tax_amount;?></td>
                      <td><?php echo $junk->tax_per;?></td>
                      <td><?php echo $junk->discount_amount;?></td>
                      <td><?php echo $junk->row_total;?></td>
                     
                      <!-- <td><a class='btn btn-info' href='<?php  echo base_url()?>admin/country/editcountry?id=<?php echo $junk->id;?>'>Edit</button></a> -->
                      <!-- <td><button class='btn btn-danger' onclick='deleteCountry(<?php echo $junk->id;?>)'>Delete</button></td> -->
                    </tr>
                    <?php $i++;  } ?>
                     
                                      
                  </tbody>
                  <tfoot>
            <tr class="warning">
                    <th>#</th>
                      <th>Product</th>
                      <th>Item Status</th>
                      <th>Original Price</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Subtotal</th>
                      <th>Tax Amount</th>
                      <th>Tax Percentage</th>
                      <th>Discount Amount</th>
                      <th>Row Total</th>
                      
                      
                    </tr>
        </tfoot>
                </table>
					</div>
				</div>
				<div class="switch-right-grid" style='float:right'>
						<div class="switch-right-grid1">
							<h3>Order Totals</h3>
							<ul>
								<li>Subtotal: <?php echo $subtotal_info->sub_total;?></li>
								<li>Tax: <?php echo $tax_info->tax_amount;?></li>
								<li>Discount Amount: <?php echo $discount_info->discount_amount;?></li>
								<li>Grand Total:  <?php echo $row_totals->total;?></li>
								
							</ul>
						</div>
					</div>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<?php echo $footer;?>
<script type="text/javascript">
	$('#confirmationEmail').hide();
$(document).ready(function(){
	$('#pdfSend').hide();
});

function sendConfirmationEmail(){
	$('#confirmationEmail').show();

}

function sendPdfEmail(){
	$('#pdfSend').show();

}

var myVar=setInterval(function(){myTimer()},1);
var count = 0;

function myTimer() {

if(count < 100){
  $('.progress').css('width', count + "%");
  count += 0.05;
   document.getElementById("demo").innerHTML = Math.round(count) +"%";
   // code to do when loading
   if(count>100){
	$('#confirmationEmail').hide();
	$('#pdfSend').hide();
   	
   }
   	
}
  
  else if(count > 99){  
      // code to do after loading
  count = 0;

  
  }
}
</script>
</body>
</html>