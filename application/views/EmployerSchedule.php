<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Employer Schedule</title>
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
				<li><a href="<?php echo base_url(); ?>index.php/Employers/AddOpportunity"><i class="icon-edit"></i><span class="hidden-tablet">Add Opportunity</span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/Employers/EmployerCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Employee's Availability</span></a></li>
				<li calss="active"><a href="<?php echo base_url(); ?>index.php/Employers/Schedule"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar</span></a></li>
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
			<strong>Schedule Calendar</strong></h2>
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

		<!-- Profile -->
			<div class="modal hide fade" id="casemodal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Employee Profile</h3>
		</div>
		<div class="modal-body">
			<div class="row">
				<div style="width: 230px; height: 200px;float: left;">
					<img src="<?php echo base_url(); ?>assets/uploads/8c3ec377d6413488dd9f4eaeb024b973.jpg" style="width: 200px; height: 200px;margin-left: 25px;">
				</div>
				<div >

					<h3 style="margin-left: 250px;">Personal Information:</h3>
					<label style="margin-left: 260px;"><b>Name:<b> <span>Muhammad Imran</span></label>
					<label style="margin-left: 260px;"><b>Gender:<b> <span>Male</span></label>
					<label style="margin-left: 260px;"><b>Contact:<b> <span>03311234567</span></label>
					<label style="margin-left: 260px;"><b>Address:<b> <span>House x, Street 8</span></label>
					<h3 style="margin-left: 250px;">Skills:</h3>
					<label style="margin-left: 260px;"><b>Programming:<b> <span>C++, Java, .Net</span></label>
					<label style="margin-left: 260px;"><b>Database:<b> <span>SQL, MySql, MongoDb</span></label>
					<h3 style="margin-left: 250px;">Documents:</h3>
					<label style="margin-left: 260px;"><b>Resume:<b> <span>1234, 15-10-2010, 15-10-2012</span></label>
					
				</div>
			</div>
		</div>
		
	</div>
		<!-- Profile -->
		
	<div class="modal hide fade" id="requestmodal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Response To Request</h3>
		</div>
		<div class="modal-body">
			<div class="row">
				<div style="width: 230px; height: 200px;float: left;">
					<img src="<?php echo base_url(); ?>assets/uploads/8c3ec377d6413488dd9f4eaeb024b973.jpg" style="width: 200px; height: 200px;margin-left: 25px;">
				</div>
				<div >

					<h3 style="margin-left: 250px;">Personal Information:</h3>
					<label style="margin-left: 260px;"><b>Name:<b> <span>Muhammad Imran</span></label>
					<label style="margin-left: 260px;"><b>Gender:<b> <span>Male</span></label>
					<label style="margin-left: 260px;"><b>Contact:<b> <span>03311234567</span></label>
					<label style="margin-left: 260px;"><b>Address:<b> <span>House x, Street 8</span></label>
					<h3 style="margin-left: 250px;">Skills:</h3>
					<label style="margin-left: 260px;"><b>Programming:<b> <span>C++, Java, .Net</span></label>
					<label style="margin-left: 260px;"><b>Database:<b> <span>SQL, MySql, MongoDb</span></label>
					<h3 style="margin-left: 250px;">Documents:</h3>
					<label style="margin-left: 260px;"><b>Resume:<b> <span>1234, 15-10-2010, 15-10-2012</span></label>
					
				</div>
			</div>
		</div>
		<div class="modal-footer">
			
			<a href="#" class="btn btn-primary">Accept</a>
			<a href="#" class="btn">Reject</a>
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
			editable: true,
			eventLimit: false, // allow "more" link when too many events

			events: [
				{
					title: "Case 1",
					start: "2017-06-04",
					end: "2017-06-10",
					backgroundColor: "#69e6ff",
                	borderColor: "#69e6ff",
                	textColor: "black"
				},
				{
					title: "Employee 1 | Rate : 300",
					start: "2017-06-04",
					end: "2017-06-10",
					type: "request",
					backgroundColor: "yellow",
                	borderColor: "yellow",
                	textColor: "black"
				},
				{
					title: "Employee 2 | Rate : 400",
					start: "2017-06-04",
					end: "2017-06-10",
					type: "request",
					backgroundColor: "yellow",
                	borderColor: "yellow",
                	textColor: "black"
				},
				{
					title: "Employee 3 | Rate : 600",
					start: "2017-06-04",
					end: "2017-06-10",
					type: "request",
					backgroundColor: "yellow",
                	borderColor: "yellow",
                	textColor: "black"
				},
				{
					title: "Case 2 | Employee 1 | Rate : 300",
					start: "2017-06-12",
					end: "2017-06-16",
					type: "case",
					backgroundColor: "green",
                	borderColor: "green",
                	textColor: "black"
                	
				}
               
			],
			eventClick: function(calEvent, jsEvent, view) {
				type = calEvent.type;
				if(typeof type !== undefined && type === 'request')
					$('#requestmodal').modal('show');
				else if(typeof type !== undefined && type === 'case')
					$('#casemodal').modal('show');

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
