<style type="text/css">


.panel.panel-warning .panel-heading {
    background-color: #ffca28 !important;
    border-color: #ffca28;
    color: #fff;
}

.panel.panel-sky .panel-heading {
    background-color: #00bcd4 !important;
    border-color: #00bcd4;
    color: #fff;
}

.profile_details{
    float: left !important;
}

.social_icons {
    float: left  !important;
    width: 57% !important;
}
.btn-danger{
    background-color: #f44336 !important;
    border-color: #f44336;
    color: #f44336;

}

.dataTables_paginate .paging_full_numbers{


}

.btn-green { 
  color: #fff; 
  background-color: #8BC34A; 
  border-color: #8BC34A; 
} 

.first , .previous, .next, .last{
	border: medium none;
background: #27CCE4 none repeat scroll 0% 0%;
padding: 9.5px 12px;
outline: medium none;
float: right;
border-radius: 5px;
margin-right: 10px;

}
.first:hover, .previous:hover, .next:hover, .last:hover{
	    color: #FFF;
    background-color: #449D44;
    border-color: #398439;
}
.first:focus, .previous:focus, .next:focus, .last:focus{
	color: #333;
text-decoration: none;
    outline: thin dotted;
    outline-offset: -2px;
}
span   .current{
	border: medium none;
color: #333;
background-color: #DC4E41!important;
border-color: #CCC;
padding: 9.5px 12px;
outline: medium none;
float: right;
border-radius: 5px;
margin-right: 10px;
}
span  .paginate_button {
	border: medium none;
color: #333;
background-color: #F8F0F0;
border-color: #CCC;
padding: 9.5px 12px;
outline: medium none;
float: right;
border-radius: 5px;
margin-right: 10px;
}
.dataTables_filter{
	float: right;
}

.label-green {
    background-color: #8bc34a;
}

.label-purple {
    background-color: #9358ac;
}
.label-yellow {
    background-color: rgb(244, 67, 54);
}

</style>
<link href="<?php echo base_url();?>assets/bargain/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/bargain/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>assets/bargain/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bargain/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url();?>assets/bargain/admin/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url();?>assets/bargain/admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url();?>assets/bargain/admin/js/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/bargain/admin/js/jquery-1.12.0.min.js"></script>
<link href="<?php echo base_url();?>assets/bargain/admin/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/bargain/admin/js/jquery.dataTables.min.js"></script>
	<script>
		   $(function() {
    $( "#datepicker" ).datepicker(({ dateFormat: 'yy-mm-dd' }));
    $( "#to_datepicker" ).datepicker(({ dateFormat: 'yy-mm-dd' }));
  });
	</script>