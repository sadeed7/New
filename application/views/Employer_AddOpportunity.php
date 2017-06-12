<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Add Opportunity</title>
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
				<li><a href="<?php echo base_url(); ?>index.php/Employers"><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Employers/AddOpportunity"><i class="icon-edit"></i><span class="hidden-tablet">Add Opportunity</span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/Employers/EmployerCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Employee's Availability</span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/Employers/Schedule"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<!-- start: Content -->
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
					<a href="<?php echo base_url(); ?>index.php/Employeer/AddOpportunity">Opportunity</a>
				</li>
			</ul>

			<div class="row-fluid sortable">
			<div class="box  span12">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><strong>Add Opportunity</strong></h2>
			</div>

					    <div class="box-content">
					   
            <br>
	<form class="form form-horizontal"  style="color: black;" method="post" 
	 action="<?php echo base_url(); ?>index.php/Employers/SaveOpportunityData">
						<fieldset>
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
                   	<!-- <h3 class="btn btn-primary">From</h3><br><br> -->
					<div class="control-group span6">
					<label class="control-label" for="date01" style="font-weight:bold;">From:</label>
					<div class="controls">
					<input type="date" class="input-xlarge focused"  name="From" data-date="" data-date-format="YYYY-MM-DD" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="YYYY-MM-DD"  required="" />
					</div>
					</div>
					<!-- <h3 class="btn btn-primary">To</h3><br><br> -->
					<div class="control-group span6">
					<label class="control-label" for="date01" style="font-weight:bold;">To:</label>
					<div class="controls">
					<input type="date" class="input-xlarge focused" name="To" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this formart YYYY-MM-DD"/>
					</div>
					</div>

					<div class="control-group">
					<label class="control-label" style="font-weight:bold;">Shift:</label>
					<div class="controls">

					<label class="span1"><input type="checkbox" name="am">&nbsp;AM</label>
					<label class="span1"><input type="checkbox" name="pm">&nbsp;PM</label>
					<label class="span2"><input type="checkbox" name="night">&nbsp;Nightly</label>
					</div>
					</div>
					
					

					    <div class="form-actions">
						<button type="submit" name="save" class="btn btn-primary">Save Opportunity</button>
						<button class="btn">Cancel</button>
						</div>
						</fieldset>
						</form>
					    </div>

					   
					</div>

				</div><!--/span-->
				<br><br><br><br><br><br><br><br><br><br>
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
	
		<script src="<?php echo base_url();?>assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/counter.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/retina.js"></script>


		
	 

		
		
		
	<!-- end: JavaScript-->
	
</body>
</html>
