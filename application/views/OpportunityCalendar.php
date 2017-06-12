<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Schedule</title>
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
				<li><a href="<?php echo base_url(); ?>index.php/Employees"><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/Employee_AddAvailability"><i class="icon-edit"></i><span class="hidden-tablet">Add Availability</span></a></li>
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Opportunity"><i class="icon-edit"></i><span class="hidden-tablet">Opportunity Calendar </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/EmployeeCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/Offers"><i class="icon-edit"></i><span class="hidden-tablet">Offers </span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Calendar</a></li>
			</ul>

			<div class="row-fluid sortable">
			<div class="box span12">
			<div class="box-header"  align="center">
			<h2><i class="halflings-icon calendar"></i>
			<strong>Opportunity Calendar</strong></h2>
			</div>
				  
				  <div class="box-content">
                  <div id="calendar" class="span9">
                  </div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div><!--/row-->
		

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="requestmodal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Offer Services</h3>
		</div>
		<div class="modal-body" style="overflow-x: hidden;">
			<form class="span12">
			    <div class="span1">
					<label><b>Rate:</b></label>
				</div>
				<div class="span1">
					<input class="input-large" name="offerrate" id="offerrate" type="email" placeholder="Enter Offer"  required="" />
				</div>
				
				<div class="clearfix"></div>
			</form>	
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Offer Service</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
<span style="text-align:left;float:left">&copy; 2017 - CreaDev Solutions | Lawyers Scheduler Portal</span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.min.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
        <script src='<?php echo base_url();?>assets/js/fullcalendar.min.js'></script>  
		<script src="<?php echo base_url();?>assets/js/excanvas.js"></script>
	<script>

	$(document).ready(function() {
		

 <?php	 $colors=array('#93f806','#3cb936','#47b0e4','#08c','#ff231c','#111','#27052c'); ?>

		$('#calendar').fullCalendar({
			
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: '<?php echo date('Y-m-d'); ?>',
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: false, // allow "more" link when too many events

			events: [

				<?php 
				$color = '#47b0e4';
				$green = 'green';

				if (isset($opportunities) && $opportunities) {
					foreach ($opportunities as $opportunity) {
						echo '{
							title: "'.$opportunity->FirstName.' '.$opportunity->LastName.'| Shift: '.$opportunity->shift.'",
                			start: "'.$opportunity->from.'",
                			end:  "'.$opportunity->to.'",
                			backgroundColor: "'.$color.'",
                			borderColor: "#69e6ff",
                			textColor: "black"
						},';
					}
				} ?>
				
               
			],
			eventClick: function(calEvent, jsEvent, view) {
				$('#requestmodal').modal('show');
			}
		});
		
	});

</script>
<style>

	body {

		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		width: 100%;
		margin: 0 auto;
	}

</style>
		<script src="<?php echo base_url();?>assets/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/counter.js"></script>
	
		<script src="<?php echo base_url();?>assets/js/retina.js"></script>

		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
