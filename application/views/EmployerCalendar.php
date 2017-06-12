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
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Employers/EmployerCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Employee's Availability</span></a></li>
				<li ><a href="<?php echo base_url(); ?>index.php/Employers/Schedule"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar</span></a></li>
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
			<div class="box  span12">
			<div class="box-header"  align="center">
			<h2><i class="halflings-icon calendar"></i>
			<strong>Employee's Availability Calendar</strong></h2>
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
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
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
			  eventClick: function(event) {
        if (event.url) {
            window.open(event.url);
            return false;
        }
    },
			events: [
               <?php
               for($i=0;$i<=count($Calendar)-1;$i++)
               {
               	echo '
               { 
             
                title: "'.$Calendar[$i]->FirstName.' '.$Calendar[$i]->LastName.' |  Rate:'.
                $Calendar[$i]->Rate.'",
                start: "'.$Calendar[$i]->FromDate.'",
                end:  "'.$Calendar[$i]->ToDate.'",
                backgroundColor: "'.$colors[$i].'",
                borderColor: "#69e6ff",
                url: "'.base_url().'index.php/Employers/EmployeeProfile/'.$Calendar[$i]->loginid.'",
                textColor: "black"
              
               },	';
               }
               ?>
			]
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
