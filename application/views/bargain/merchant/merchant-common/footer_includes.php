  <script src="<?php echo base_url();?>assets/merchant/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/merchant/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/merchant/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>assets/merchant/img/login-bg.jpg", {speed: 500});
    </script>
    <script type="text/javascript">

    	/*function signIn(){
    		var username=$('#username').val();
    		var password=$('#password').val();

    		$.ajax({
              type:'GET',
			  url: "<?php echo base_url()?>merchant/merchant/login",
              data:{username:username,password:password},
			  success:function(res){
                window.location.href=''
              },
			}).done(function() {
			  $( this ).addClass( "done" );
			});

    	}*/

    </script>
