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
				<li class="active"><a href="<?php echo base_url(); ?>index.php/Employees"><i class="icon-edit"></i><span class="hidden-tablet">Profile </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/Employee_AddAvailability"><i class="icon-edit"></i><span class="hidden-tablet">Add Availability</span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Opportunity"><i class="icon-edit"></i><span class="hidden-tablet">Opportunity Calendar </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/EmployeeCalendar"><i class="icon-edit"></i><span class="hidden-tablet">Schedule Calendar </span></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/Employees/Offers"><i class="icon-edit"></i><span class="hidden-tablet">Offers </span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<!-- start: Content -->
			<div id="content" class="span10">
			 	<div class="modal hide fade" id="myModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-header" >
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Change Your Email Or Password</h3>
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
                </form>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a id="savesignup" class="btn btn-primary">Save</a>
		</div>
	</div>
			
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

			<div class="row-fluid sortable">
			<div class="box span12">
			<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><strong>Edit Your Information</strong></h2>
			</div>

					    <div class="box-content">
					   
					<ul class="nav tab-menu nav-tabs" id="myTab">
					<li><button class="btn btn-medium btn-primary" id="viewprof" onclick="$('#profiledata').show(); $('div').fadeIn( 'slow' );$('body,html').animate({ scrollTop: $('body').height() }, 1000);">View Profile</button></li>
					<li>&nbsp;&nbsp;</li>
					<li><button class="btn btn-medium btn-primary" data-toggle="modal"
					data-target="#myModal">Change Email/Pass</button></li>

					</ul>
            <br>
	<form class="form-horizontal" id="employeeform" style="color: black;" method="post" 
	enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Employees/SaveData" >
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

						<h3 class="heading-h3">Profile Information</h3><br><br>

						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">First Name:</label>
						<div class="controls">
						<input class="input-xlarge focused" id="fname" name="fname" type="text" 
						placeholder="Enter First Name" required="" >
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Last Name:</label>
						<div class="controls">
						<input class="input-xlarge focused" id="lname" name="lname" type="text" 
						placeholder="Enter Last Name" required="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Gender:</label>
						<div class="controls">
						<select id="gender" name="gender" required="">
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
						</select>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Date of Birth:</label>
						<div class="controls">
						<input class="input-xlarge focused" id="dob" name="dob" type="text" 
						placeholder="DD/MM/YYY" required="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Contact Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="cnumber" 
						name="cnumber"  placeholder="Enter Contact Number" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">SmartCard Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="snumber" 
						name="snumber"  placeholder="Enter Smart Card Number" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Address:</label>
						<div class="controls">
						<textarea class="input-xlarge focused" id="address" name="address" type="text" 
						rows="4" cols="50"  required="">Enter Your Address</textarea>
						</div>
						</div>
						<div class="row">
						<div class="control-group span6">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 50px;">Choose Image:</label>
						<div class="controls">
						<input type="file" id="image" name="image" class="input-file uniform_on" onchange="readURL(this); $('#box').show();" required="">
						</div>
						</div>   
						<div class="control-group span6">
						<div id="box" style="display: none;">
                        <img id="img" style='height: 100%; width: 100%; object-fit: contain;'/> 
                        </div>
						</div>    
						</div> 
						<h3 class="heading-h3">Your Rates</h3><br><br>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Weekday:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="Weekday" 
						name="Weekday"  placeholder="Enter Weekday" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Weekend:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="Weekend" 
						name="Weekend"  placeholder="Enter Weekend" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Overnight:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="Overnight" 
						name="Overnight"  placeholder="Enter Overnight" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">National/ local Holidays:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="nlholidays" 
						name="nlholidays"  placeholder="Enter National/ local Holidays" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Full day:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="fullday" 
						name="fullday"  placeholder="Enter Full day" required="">
						</div>
						</div>
                        <h3 class="heading-h3">My Skills</h3><br><br>
                        <?php
                         if(isset($skill_documents) && !empty($skill_documents))
                         {
                         	foreach ($skill_documents as $skill) 
                         	{
                         		if($skill->Type=="Skill")
                         		{
                         		echo 
                         	'	
                        <div class="control-group">
					    <label class="control-label " style="font-weight:bold;text-align: left;margin-left: 22px;">
					    '.$skill->Name.'</label>
						<div class="controls">
						<input type="checkbox" class="input-xlarge Skill" 
						 value="'.$skill->id.'">
						<div id="'.$skill->id.'" style="display:none"><br>
						<input type="text" class="input span3 focused"  name="'.$skill->Name.'[]"  placeholder="Enter Skill" >
						<input type="text" class="input span3 focused"  name="'.$skill->Name.'[]"  placeholder="Enter Skill" >
						<input type="text" class="input span3 focused"  name="'.$skill->Name.'[]"  placeholder="Enter Skill" >
						</div>
						</div>
						</div> ';
                         		}
                         	}
                         }

                        ?>

                        <h3 class="heading-h3">My Documents</h3><br><br>
                          <?php
                         if(isset($skill_documents) && !empty($skill_documents))
                         {
                         	foreach ($skill_documents as $skill) 
                         	{
                         		if($skill->Type=="Documents")
                         		{
                         		echo 
                         	'	
                        <div class="control-group">
					    <label class="control-label " style="font-weight:bold;text-align: left;margin-left: 22px;">
					    '.$skill->Name.'</label>
						<div class="controls">
						<input type="checkbox" class="input-xlarge Skill" 
						 value="'.$skill->id.'">
						<div id="'.$skill->id.'" style="display:none"><br>
						<input type="text" class="input span4 focused"  name="'.$skill->Name.'[]"  placeholder="Enter Document Number" >
						<input type="text" class="input span3 focused"  name="'.$skill->Name.'[]"  placeholder="Issue Date" >
						<input type="text" class="input span3 focused"  name="'.$skill->Name.'[]"  placeholder="Expiry Date" >
						</div>
						</div>
						</div> ';
                         		}
                         	}
                         }

                        ?>
						<h3 class="heading-h3">Account Info</h3><br><br>
						<div class="control-group">
					    <label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Account Name:</label>
						<div class="controls">
						<input type="text" class="input-xlarge focused" id="accountname" 
						name="accountname"  placeholder="Enter Account Name" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Sort Code:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="sortcode" 
						name="sortcode"  placeholder="Enter Sort Code" required="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Account Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" id="accountnumber" 
						name="accountnumber"  placeholder="Enter Account Number" required="">
						</div>
						</div>  


					    <div class="form-actions">
						<button type="submit" name="save" class="btn btn-primary">Save changes</button>
						<button class="btn">Cancel</button>
						</div>
						</fieldset>
						</form>
					    </div>

					   
					</div>
				</div><!--/span-->
			 
			<div class="row-fluid sortable" style="display: none;" id="profiledata">
			<div class="box grey span12">
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
					    <form class="form-horizontal" style="color: black">
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">First Name:</label>
						<div class="controls">
						<input class="input-xlarge focused"  type="text" 
						value="<?php if(isset($employeeinfo)) {echo $employeeinfo->FirstName;} ?>" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Last Name:</label>
						<div class="controls">
						<input class="input-xlarge focused"  type="text" 
						value="<?php if(isset($employeeinfo)) {echo $employeeinfo->LastName;} ?>" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Gender:</label>
						<div class="controls">
						<input class="input-xlarge focused" type="text"  value="<?php if(isset($employeeinfo)) {echo $employeeinfo->Gender;} ?>" 
						placeholder="DD/MM/YYY" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Date of Birth:</label>
						<div class="controls">
						<input class="input-xlarge focused" type="text"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->DOB;} ?>"
						placeholder="DD/MM/YYY" readonly="">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Contact Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->ContactNumber;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">SmartCard Number:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused"   value="<?php if(isset($employeeinfo)) {echo $employeeinfo->SmartCardNumber;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Address:</label>
						<div class="controls">
						<textarea class="input-xlarge focused" type="text" 
						rows="4" cols="50"  readonly="" placeholder="<?php if(isset($employeeinfo)) {echo $employeeinfo->Address;} ?>"></textarea>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">
						Image:&nbsp;&nbsp;</label>
						<div id="box" style="margin: 15px">
                        <img 
                        src='<?php echo base_url();?>assets/uploads/<?php if(isset($employeeinfo)) {echo $employeeinfo->Image;} ?>' alt="No Image"
                        style='height: 100%; width: 100%; object-fit: contain;'/> 
                        </div>   
						</div>

						<h3 class="heading-h3">My Rates</h3><br><br>
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Weekday:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->WeekdayRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Weekend:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->WeekendRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Overnight:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->OvernightRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">National/ local Holidays:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->NLHolidaysRate;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Full day:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->FullDayRate;} ?>" readonly="">
						</div>
						</div> 

						<h3 class="heading-h3">Account Info</h3><br><br>
						<div class="control-group">
					    <label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Account Name:</label>
						<div class="controls">
						<input type="text" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->AccountName;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Sort Code:</label>
						<div class="controls">
						<input type="number" class="input-xlarge focused" value="<?php if(isset($employeeinfo)) {echo $employeeinfo->SortCode;} ?>" readonly="">
						</div>
						</div> 
						<div class="control-group">
						<label class="control-label" style="font-weight:bold;text-align: left;margin-left: 22px;">Account Number:</label>
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
					    <label class="control-label " style="font-weight:bold;text-align: left;margin-left: 22px;">
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
					    <label class="control-label " style="font-weight:bold;text-align: left;margin-left: 22px;">
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
