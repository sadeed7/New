<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Profile</title>
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
						<li><a href="<?php echo base_url(); ?>Logout"><i class="halflings-icon off"></i> Logout</a></li>
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
				<li ><a href="<?php echo base_url(); ?>Employees"><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
				<li><a href="<?php echo base_url(); ?>Employees/Employee_AddAvailability"><i class="icon-edit"></i><span class="hidden-tablet">Add Availability</span></a></li>
				<li><a href="<?php echo base_url(); ?>Employees/EmployeeCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Employee Calendar </span></a></li>
				<li class="active"><a href="<?php echo base_url(); ?>Employees/Offers"><i class="icon-edit"></i><span class="hidden-tablet">Offers </span></a></li>
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
					<a href="<?php echo base_url(); ?>Employees">Profile</a>
				</li>
			</ul>


             	<div class="row-fluid sortable">
			<div class="box blue span12">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><strong>Offers Information</strong></h2>
			<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
			</div>

					    <div class="box-content">
					   <?php
						if($this->session->flashdata('Success'))
						{
							echo '
						<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>'.$this->session->flashdata('Success').'</strong>
						</div>';
					    }   
					    if($this->session->flashdata('Error'))
						{
							echo '
						<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>'.$this->session->flashdata('Error').'</strong> 
						</div>';
					    }   
						?>
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
                        <a class="btn btn-success" href="'.base_url().'Employees/Offerstatus?id='.$value->id.'&status=Accepted">
						 <i class="halflings-icon white zoom-in"></i>  
						 </a>
                         <a class="btn btn-danger" href="'.base_url().'Offerstatus?id'.$value->id.'&status=Rejected">
						 <i class="halflings-icon white trash"></i> 
						 </a>
                       </tr>
                     	';
                     }



						  ?>

					  </tbody>
					  </table>  
					  </form>
					  </div>

				</div><!--/span-->
			</div><!--/row-->
 
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

		