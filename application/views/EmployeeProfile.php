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
.heading-h3 {
		font-size: 25px; 
		font-weight: bold;
		margin-left: 10px;
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
				<li class="active"><a><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
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
					<a href="<?php echo base_url(); ?>index.php/Employees">Profile</a>
				</li>
			</ul>
			 
			<div class="row-fluid sortable" id="profiledata">
			<div class="box  span12">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><strong>Profile Information</strong></h2>
			<div class="box-icon">
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
			</div>

					    <div class="box-content">
					   
					    <br>

					    <?php if(isset($employeeinfo) && !empty($employeeinfo))
					    {
					    ?>
	 <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Employers/saveemployeebooking" method="POST" style="color: black">
					<div class="row">
					<div class="span5">			
                    <div class="control-group">
					<label class="control-label " for="date01"><b>From</b></label>
					<div class="controls">
					<input type="date" name="From" data-date="" data-date-format="YYYY-MM-DD" placeholder="YYYY-MM-DD"/>
					</div>
					</div>
					</div>
					<div class="span5">
					<div class="control-group">
					<label class="control-label" for="date01"><b>To</b></label>
					<div class="controls">
					<input type="date" name="To" placeholder="YYYY-MM-DD" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this formart YYYY-MM-DD"/>
					</div>
					</div>
					</div>
					<div class="span2">
					<div class="control-group">
					<button type="submit" name="save" class="btn btn-medium btn-success">HIRE HIM?</button>
					<input type="hidden" name="eid" value="<?php echo $eid  ?>">
					</div>
					</div>
					</div>
                    <hr>

					    <div class="row">
					   
						<div class="span6">
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">First Name:</label>
						<div class="controls">
						<input class="input-xlarge focused"  type="text" 
						value="<?php if(isset($employeeinfo)) {echo $employeeinfo->FirstName;} ?>" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Last Name:</label>
						<div class="controls">
						<input class="input-xlarge focused"  type="text" 
						value="<?php if(isset($employeeinfo)) {echo $employeeinfo->LastName;} ?>" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Gender:</label>
						<div class="controls">
						<input class="input-xlarge focused" type="text"  value="<?php if(isset($employeeinfo)) {echo $employeeinfo->Gender;} ?>" 
						placeholder="DD/MM/YYY" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Date of Birth:</label>
						<div class="controls">
						<input class="input-xlarge focused" type="text"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->DOB;} ?>"
						placeholder="DD/MM/YYY" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Contact Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->ContactNumber;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">SmartCard No.:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->SmartCardNumber;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Address:</label>
						<div class="controls">
						<textarea class="input-xlarge focused" type="text" 
						rows="5" cols="50"  readonly="" placeholder="<?php if(isset($employeeinfo)) {echo $employeeinfo->Address;} ?>"></textarea>
						</div>
						</div>
						</div>
                       
                        <div class="control-group span6">
						<label class="control-label" style="font-weight:bold;">
						Image:&nbsp;&nbsp;</label>
						<div id="box" style="margin: 15px">
                        <img 
                        src='<?php echo base_url();?>assets/uploads/<?php if(isset($employeeinfo)) {echo $employeeinfo->Image;} ?>' alt="No Image"
                        style='height: 100%; width: 100%; object-fit: contain;'/> 
                        </div>   
						</div>
						
						</div>

						<h3 class="heading-h3">My Rates</h3><br><br>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Weekday:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->WeekdayRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Weekend:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->WeekendRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Overnight:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->OvernightRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">National/ local Holidays:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->NLHolidaysRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Full day:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->FullDayRate;} ?>" readonly="">
						</div>
						</div> 

						<h3 class="heading-h3">Account Info</h3><br><br>
						<div class="control-group">
					    <label class="control-label" style="font-weight:bold;">Account Name:</label>
						<div class="controls">
						<input type="text" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->AccountName;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Sort Code:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->SortCode;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;">Account Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->AccountNumber;} ?>" readonly="">
						</div>
						</div> 
						<?php } ?> 
						<h3 class="heading-h3">My Skills</h3><br><br>
						  <?php
                         if(isset($employeeskills) && !empty($employeeskills))
                         {
                         	$data=[];
                         	foreach ($employeeskills as $skill) 
                         	{
                         		if($skill->Type=="Skill")
                         		{
                         		echo 
                         	'	
                        <div class="control-group">
					    <label class="control-label " style="font-weight:bold;">
					    '.$skill->DataType.'</label>
					    <div class="controls">';

					    $data=explode(",",$skill->Data);
                        for($i=0;$i<=count($data)-1;$i++)
                        {
					    echo '
						<input type="text" class="input span3 focused" value="'.$data[$i].'" readonly>';
				        }
						echo '
						</div>
						</div> ';
                         		}
                         	}
                         }

                        ?>
                        <h3 class="heading-h3">My Documents</h3><br><br>
						  <?php
                         if(isset($employeeskills) && !empty($employeeskills))
                         {
                         	$data=[];
                         	foreach ($employeeskills as $skill) 
                         	{
                         		if($skill->Type=="Documents")
                         		{
                         		echo 
                         	'	
                        <div class="control-group">
					    <label class="control-label " style="font-weight:bold;">
					    '.$skill->DataType.'</label>
					    <div class="controls">';

					    $data=explode(",",$skill->Data);
                        for($i=0;$i<=count($data)-1;$i++)
                        {
					    echo '
						<input type="text" class="input span3 focused" value="'.$data[$i].'" readonly>';
				        }
						echo '
						</div>
						</div> ';
                         		}
                         	}
                         }

                        ?>
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
