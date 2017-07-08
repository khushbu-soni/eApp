<!DOCTYPE html>
<html>
	<head>
		<title>Biryani House.</title>
		<?php echo $dependencies; ?>
		<script type="text/javascript">
			function deleteAccount(event){
				account = $(event.target);
				accountid = account.attr('accountid');

				$.ajax({
     type: "GET",
     url: "<?php echo site_url('manager/useraccounts/delete'); ?>" + '/' + accountid,
     
     success: function(data){
      
      //$('#page-wrapper').html(data);
      location.reload();   
      
     }
    });
			}
		</script>
		<style type="text/css">
			.pagination > li {
			  display: inline;
			  float: right !important;
			}
			
		</style>
	</head>

	<body>
		
	    <div id="wrapper">
	    <?php echo $header;?>
	    <?php echo $sidebar;?>


	    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12 rounded-6px">
				<div class="panel panel-default">
                        <div class="panel-heading">
                        <div class='search-form'>
						<select name='user' id="user">
							<option value="All">Select User</option>
							<option value="All">All</option>
							<?php foreach ($users_name as $user) {?>
							<option value="<?php echo $user->id;?>"><?php echo $user->fname." ".$user->lname ;?></option>
							<?php }?>

						</select>
						</div>
						<div class='filter-form pull-right' style="margin-top:-30px;">
						<select name='role' id="role">
							<option value="All">Select Role</option>
							<option value="All">All</option>
							<option value="0">Waiter</option>
							<option value="1">Kitchen Manager</option>
							<option value="2">Manager</option>
						</select>
						</div>
                        </div>
                        <div class="panel-body">
                        <?php 	if ($this->session->flashdata('successmsg') != ''): ?>
								<div class="alert alert-success" >
									<button type="button" class="close" data-dismiss="alert">x</button>
									<h4><?php echo $this->session->flashdata('successmsg'); ?></h4>
								</div>
							<?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User Account</th>
                                            <th>pic</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                     
                        <div class="boxheading toprounded-4px" style="padding-bottom:15px;">
							User Accounts
							<a href="<?php echo site_url('manager/useraccounts/create'); ?>" class="btn btn-info pull-right transition" style="margin-right:14px;">Create Account</a>
						</div>
							

							<?php if (empty($useraccounts)): ?>
								<div class="alert alert-danger">
									There are no user accounts to display.
								</div>
							<?php endif; ?>
                                    <?php foreach ($useraccounts as $useraccount): ?>
                                        <tr class="odd gradeX">
                                            <td>
                                            <?php
                                            if ($useraccount->role == 0) $role = "Waiter"; else if ($useraccount->role == 1) $role = "Kitchen Manager"; else $role = "Manager";
												echo $useraccount->fname . " " . $useraccount->lname . " ($role)<br/><b>Username:</b> " . $useraccount->uname."<br/><b>Password:</b> " . $useraccount->logincode;
                                            ?>
                                            </td>
                                            <td class="odd gradeX" width="150px;">
                                            	<img width="50%" height="50%" src="<?php if ($useraccount->pic == null || $useraccount->pic == '') echo base_url() . 'assets/img/default.png'; else echo base_url() . 'assets/dishes/' . $useraccount->pic; ?>"/>
                                            </td>
                                            <td>
                                            	<a href="<?php echo site_url('manager/useraccounts/edit/' . base64_encode($useraccount->id)); ?>" class="btn btn-info transition">Edit</a>
                                            
                                            </td>
                                            <td><a href="#confirm-modal" accountid="<?php echo $useraccount->id; ?>" onclick="deleteAccount(event)" data-toggle="modal" class="btn btn-danger">Delete</a></td>
                                            
                                        </tr>
                                       <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

                    </div>
		</div>
		</div>
		</div>
		</div>
		</div>


	 <script src="<?php echo base_url() . 'assets/binary-assets/js/jquery-1.10.2.js'?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url() . 'assets/binary-assets/js/bootstrap.min.js'?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url() . 'assets/binary-assets/js/jquery.metisMenu.js'?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() . 'assets/binary-assets/js/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url() . 'assets/binary-assets/js/dataTables/dataTables.bootstrap.js'?>"></script>
    
      
    
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

		<script type="text/javascript">
      	$(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

		$( "#user" ).change(function() {
			$(location).attr('href'," <?php echo site_url('manager/useraccounts/filter/'); ?>/"+$('#user').val());
		});
		$( "#role" ).change(function() {
			$(location).attr('href'," <?php echo site_url('manager/useraccounts/filter_by_role/'); ?>/"+$('#role').val());
		});
		</script>
	</body>
</html>