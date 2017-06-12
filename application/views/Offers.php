<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Offers</title>
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
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		 <style>
		 input {
    border-style: solid;border-color: #000;
}
            #box {
    float: left;
    height: 150px;
    width: 250px;
    background: #FFF;
}

      </style>
       <script type="text/javascript">
            
            function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(180);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }



        </script>
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
		<a class="brand" href=""><span><strong>Scheduler Portal</strong></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
								<?php echo $Email; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								
						  <li class="dropdown-menu-title">
						  <span><i class="halflings-icon user"></i>Profile</span>
						 </li>
						<li><a href="<?php echo base_url(); ?>index.php/Logout"><i class="halflings-icon off"></i> Logout</a></li>
						</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
					<br>
				<li ><a href="<?php echo base_url(); ?>index.php/Employees"><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/Employee_AddAvailability"><i class="icon-edit"></i><span class="hidden-tablet">Add Availability</span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Opportunity"><i class="icon-edit"></i><span class="hidden-tablet">Opportunity Calendar </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/EmployeeCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar </span></a></li>
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Employees/Offers"><i class="icon-edit"></i><span class="hidden-tablet">Offers </span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<!-- start: Content -->
			<div id="content" class="span10">

			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a>Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="<?php echo base_url(); ?>index.php/Employees/Offers">offers</a>
				</li>
			</ul>

			 
			<div class="row-fluid sortable" id="profiledata">
			<div class="box span12">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><strong>offers Information</strong></h2>
			<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
			</div>

				<div class="box-content" style="height: 1000px">
			
            <br>
		            <form class="form-horizontal" style="color: black">
	            <table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Sr. No.</th>
								  <th>Employer Name</th>
								  <th>Employer Email</th>
								  <th>From</th>
								  <th>To</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  <?php
						  $x=0;
						  if(isset($offers) && $offers)
                     foreach ($offers as $value) 

                     {
                     	
                     	echo '
                       <tr>
                         <td>'.++$x.'</td>
						 <td class="center">'.$value->FirstName.' '.$value->LastName.'</td>
						 <td class="center">'.$value->Email.'</td>
						 <td class="center">'.$value->FromDate.'</td>
						 <td class="center">'.$value->ToDate.'</td>
						 <td class="center">'.$value->Status.'</td>
						 <td class="center">
                        <a class="btn btn-primary" href="'.base_url().'index.php/Employees/Offerstatus?id='.$value->id.'&status=Accepted">
						 <i class="halflings-icon white check" title="Accept"></i>  
						 </a>
                         <a class="btn " href="'.base_url().'index.php/Employees/Offerstatus?id='.$value->id.'&status=Rejected">
						 <i class="halflings-icon white trash" title="Reject"></i> 
						 </a>
                       </tr>
                     	';
                     }



						  ?>

					  </tbody>
					  </table>  
					  </form>
					    </div>

					   
					</div>
				</div><!--/span-->
			</div><!--/row-->
			
   

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2017 | CreaDev Solutions</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
       
       $('#savesignup').click(function()
       {
       //	e.preventDefault();
             
       	$.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>index.php/Login_controller/EditEmail',
          cache: false,
          data: {email: $('#addemail').val(), password: $('#addpassword').val()},
          dataType: 'json',

          success: function(data)
          {
          	console.log(data);

            if(data=='Failed')
            {
            	alert('Failed To Update Email or Password');
            	$('#addemail').val('');
                $('#addpassword').val('');
                $('#myModal').modal('hide');
            }
            if(data=='Duplicate')
            {
            	alert('Email Already Exist..Please Change Email');
            	$('#addemail').val('');
                $('#addpassword').val('');
                $('#myModal').modal('hide'); 
            }
            else if(data=='Success')
          	{
           
             $('#addemail').val('');
             $('#addpassword').val('');
             $('#myModal').modal('hide');
             location.href="<?php echo base_url();?>index.php/Logout";
            }
            else
            {
            
            }
          },
          error: function(data)
          {
            
          },



       		});


       })

        $('input[type="checkbox"]').click(function()
        {
        	value=$(this).attr("value");
            if($(this).prop("checked") == true)
            {
                console.log(value);
       		    $("#"+value).show();
            }
            else if($(this).prop("checked") == false)
            {
                $("#"+value).hide();
            }
        });

		});
	</script>
	    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.js"></script>	
		<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
		<script src="<?php echo base_url();?>assets/js/excanvas.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.stack.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.uniform.min.js"></script>
		
	 

		
		
		
	<!-- end: JavaScript-->
	
</body>
</html>
