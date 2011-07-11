<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin</title>	
	
	<link rel="stylesheet" href="<?php echo $base_url.'css/screen.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/plugin.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/custom.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	
	<style type="text/css" media="screen">
		
	</style>

</head>

<body>
	
<div id="wrapper" class="clearfix">
	
	<div id="top">
		<div id="header">
			<h1><a href="index2.html">DriveLTD</a></h1>
			
			<div id="info">
				<h4>Welcome James</h4>
				
				<p>
					Logged in as User
					<br />
					We have found you <a href="javascript:;">16</a> earlier dates
					<br>
					<a id='logout' href="<?php echo $base_url?>">Log Out</a>
					<br>
				</p>
		
				<img src="<?php echo $base_url.'img/avatar.png';?>" alt="avatar" />
			</div> <!-- #info -->
					
		</div> <!-- #header -->	
		
		
		<div id="nav">	
	
			<ul class="mega-container mega-grey">
	
				<li class="mega">
					<a href="<?php echo $base_url.'main'; ?>" class="mega-link">Dashboard</a>	
				</li>
		
				<li class="mega mega-current">
					<a href="<?php echo $base_url.'main/details'; ?>" class="mega-link">Details</a>	
				</li>
				
				<li class="mega">				
					<a href="widgets.html" class="mega-link">Tips</a>			
				</li>
				<li class="mega">				
					<a href="widgets.html" class="mega-link">Earnings</a>			
				</li>	
				
			</ul>
		</div> <!-- #nav -->
	</div> <!-- #top -->
	
	<div id="content" class="xfluid">
		
		<div class="portlet x9">
			<div class="portlet-header"><h4>Enter Test Details</h4></div>
			
			<div class="portlet-content">
				
											
						<form action="<?php echo $base_url.'details';?>" method="post" class="form label-inline">
	
							<div class="field"><label for="fname">Your Full Name </label> <input id="fname" name="fullname" size="50" type="text" class="medium" /></div>
							<div class="field"><label for="mobile">Mobile No.</label> <input id="address2" name='mobile' size="50" type="text" class="large" /></div>
							<div class="field"><label for="email">Email</label> <input id="address2" name='email_add' size="50" type="text" class="large" /></div>
							
								<p class="field_help">These are to log you into the DSA Website. We don't look at this information.</p>
							<div class="field"><label for="licence">Drivers Licence</label> <input id="address2" name='licence_number' size="50" type="text" class="large" /></div>
							
							<div class="field"><label for="theory">Theory Test Pass Certificate Number</label> <input id="address2" name='theory' size="50" type="text" class="large" /></div>
							<div class="field"><label for="Application_Reference">Appication Reference Number</label> <input id="address2" name='application_reference' size="50" type="text" class="large" /></div>

							</div>
							<div class="field phone_field"><label for="date">Book my test before this date </label> <input id="telephone" name='' size="3" type="text" class="xsmall" /> - <input size="3" type="text" class="xsmall" /> - <input size="4" type="text" class="xsmall" />

							</div>
		
				
							<div class="controlset field">

								<span class="label">Notify me by </span>
								<div class="controlset-pad">
									<input name="approved" id="check1" value="1" type="checkbox" />  <label for="check1">Some Option 1</label><br />
				
			
								</div>
							</div>				
							<br>
							<div class="controlset field">

								<span class="label">Autobook / </span>
								<div class="controlset-pad">
									<input name="approved" id="check1" value="1" type="checkbox" />  <label for="check1">Some Option 1</label><br />
				
			
								</div>
							</div>	
	
							<br />
							<div class="button">
						
								<button class="btn btn-orange">Save</button>
							
							</div>

						</form>

<br /><br />
<br /><br />
				
			</div>
		</div>
		
		
		<div class="portlet x3">
			<div class="portlet-header"><h4>Sidebar</h4></div>
			
			<div class="portlet-content">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>			
		</div>
		

		

		
	</div>
		
	</div> <!-- #content -->
	
	<div id="footer">
		
		<p>Copyright &copy; 2010 <a href="<?php echo $base_url;?>"> DriveLTD</a>, all rights reserved.</p>
		
	</div> <!-- #footer -->
	
</div> <!-- #wrapper -->

<script  type="text/javascript" src="js/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="js/slate/slate.js"></script>
<script  type="text/javascript" src="js/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="js/plugin.js"></script>


<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
</script>
	
</body>

</html>