<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Login | Scheduler</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(<?php echo base_url();?>assets/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						
					</div>
					<h1 align="center"><b>Login To Your Account!</b></h1>
					   <?php
             if($this->session->flashdata('Error'))
             {
             	 echo '<b style="float:center;color:red">&nbsp;&nbsp;Sorry! Wrong Username or Password..Please Try Again!</b>';
             }
      ?>
					<hr>
   <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Login_controller/login"
   method="post">
						<fieldset>
							
							<div class="input-prepend" title="Email">
							<label class="span2" style="float: left;padding: 5px ;"><b>Email:</b></label>
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span8" name="email" id="email" 
								type="email" placeholder="Enter Email"  required="" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
							<label class="span2" style="float: left;padding: 5px ;"><b>Password:</b></label>
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span8" name="password" id="password" type="password" placeholder="Enter Password" required="" />
							</div>
							<div class="clearfix"></div>
							
							<div class="button-login"  style="float: right;padding: 10px ;margin: 10px">	
								<button type="submit" name="btn_login" class="btn btn-primary">Sign In</button>
							</div>
							<hr>
							<div class="button-login" >Don't Have an Account? Sign Up Here....
				<a  class="btn btn-success" onclick="$('#myModal').modal('show');">SignUp</a>
							</div>
					</form>
					<hr>
				</div><!--/span-->
			</div><!--/row-->
			
	<div class="modal hide fade" id="myModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-header"  style="background-color:#06A2CB;overflow:hidden;">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3 align="center" style="color:#FFF;">Make Your Email And Password</h3>
   
		</div>
		<div class="modal-body">
                <form class="span12" align="center">
			    <div class="input-prepend " title="Email">
				<label class=""><b>Email:</b></label>
				<span class="add-on"><i class="halflings-icon user"></i></span>
				<input class="input-large" name="addemail" id="addemail" 
								type="email" placeholder="Enter Email"  required="" />
				</div>

				<div class="clearfix"></div>

				<div class="input-prepend " title="Password">
				<label class=""><b>Password:</b></label>
				<span class="add-on"><i class="halflings-icon lock"></i></span>
				<input class="input-large" name="addpassword" id="addpassword" type="password" placeholder="Enter Password" required="" />
				</div>

                <div class="clearfix"></div>

				<div class="control-group">
				<label class="control-label" style="font-weight:bold;">Role:</label>
				<div class="controls">
				<select id="role" name="role" required="">
				<option value="Employee">Employee</option>
				<option value="Employer">Employer</option>
				</select>
				</div>
				</div>
                </form>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a id="savesignup" class="btn btn-primary">Save</a>
		</div>
	</div>
	<button style="display: none" id="notify" class="btn btn-primary noty" data-noty-options='{"text":"Account Created..Please Login To Complete profile","layout":"top","type":"information"}'><i class="halflings-icon white bell"></i></button>
	<button style="display: none" id="errornotify" class="btn btn-primary noty" data-noty-options='{"text":"Sorry..Account Not Created..Please Try Again!","layout":"top","type":"information"}'><i class="halflings-icon white bell"></i></button>
	<div class="clearfix"></div>
	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->



	    	<!-- start: JavaScript-->

		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.0.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
       
       $('#savesignup').click(function()
       {
       //	e.preventDefault();

       	$.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>index.php/Login_controller/SignUp',
          cache: false,
          data: {email: $('#addemail').val(), password: $('#addpassword').val(),
                 role:$('#role').val()},
          dataType: 'json',

          success: function(data)
          {
          	console.log(data);
          
            if(data=='Duplicate')
            {
            	alert('Email Already Exist..Please Change Email');
            }
            else if(data=='Success')
          	{
             $('#notify').click();
             $('#addemail').val('');
             $('#addpassword').val('');
             $('#myModal').modal('hide');
            }
            else
            {
              $('#errornotify').click();
            }
          },
          error: function(data)
          {
             $('#errornotify').click();
          },



       		});


       })

		});
	</script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
		<script src='<?php echo base_url();?>assets/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url();?>assets/js/excanvas.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.stack.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url();?>assets/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>

		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	<!-- end: JavaScript-->
    
	
	
</body>
</html>
