<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>DriveLTD Admin</title>	
	
	<link rel="stylesheet" href="<?php echo $base_url.'css/screen.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/plugin.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/custom.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	<link rel="icon" type="image/png" href="<?php echo $base_url."img/favicon.ico";?>">
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
	
				<li class="mega mega-current">
					<a href="<?php echo $base_url.'main';?>" class="mega-link">Dashboard</a>	
				</li>
		
				<li class="mega">
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
		
		<div class="portlet x3" style="min-height: 300px;">
			
			<div class="portlet-header">
				<h4>Initial Test Booking</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="info_table">
					<tbody>
						<tr>
							<td class="value">Date of Test</td>
							<td class="full">Monday, June 6, 2011</td>
						</tr>
						<tr>
							<td class="value">Test Center</td>
							<td class="full">Uxbridge</td>
						</tr>
						<tr>
							<td class="value">Fee paid</td>
							<td class="full">&pound;62</td>
						</tr>
						<tr>
							<td class="value">Category</td>
							<td class="full">B - Car</td>
						</tr>
						<tr>
							<td class="value">Days left to cancel</td>
							<td class="full">5</td>
						</tr>
						<tr>
							<td class="value">Change Test Details</td>
							<td class="full">DSA Website</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
		<div id='how_to_us'>
			<p>
				<h1>How To Use</h1>
				<h4>
				Click on <i>'details'</i> on the menu to the left and enter your driving test details, Licence Number, Theory Test Number, etc. (Make sure you've booked a date on the DSA website beforehand as that is 
				the only way to get the details).
				</h4>
				<h4>
				Come back here (Dashboard page) and click on the start button below.
				</h4>
				<h4>
				Yes, it really is that simple.
				</h4>
				<h4>
				We'll notify you by email as soon as we find you an early test (usually within an hour). 
				</h4>
				<h4>
				You can also set it to auto book. Which means that as soon as we find a date that is within your specified time frame, we book it. This is the best option as it ensures that you will get the date. Bookings go really fast.
				</h4>
				<h4>
				We also continue searching for earlier dates (if you want choose to) so that you can get the best and earliest date possible.
				</h4>
			</p>
			<button class="btn btn-orange">Start Search</button>
		</div>
		
		<div class="xbreak"></div> <!-- .xbreak -->
		
		<div class="portlet x6">			
			<div class="portlet-header">
				<h4>Earlier Test Dates Found</h4>
				
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				
				<div id="openreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket closed">booked</span></td>
							<td class="full">Monday, April 1, 2011 - 09:10 am</td>
							<td class="who"><h5>Test Booked</h5></td>
						</tr>
	
						<tr>
							<td><span class="ticket open">earliest</span></td>
							<td class="full">Monday, April 3, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket open">earliest</span></td>
							<td class="full">Monday, April 4, 2011 - 10:10 am</td>
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket open">earliest</span></td>
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
	
						<tr>
							<td><span class="ticket open">earliest</span></td>
							<td class="full">Monday, April 3, 2011 - 10:10 am</td>
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket open">earliest</span></td>
							<td class="full">Monday, April 4, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<!--Dividing line. Do another search for the earlys here.-->
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
	
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 3, 2011 - 10:10 am</td>

							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 4, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket responded">early</span></td>
	
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
							
	
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
	
							
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						<tr>
							<td><span class="ticket responded">early</span></td>
							<td class="full">Monday, April 5, 2011 - 10:10 am</td>
							
	
							<td class="who"><button class="btn btn-orange">Book This</button></td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->

			</div> <!-- .portlet-content -->			
		</div>  <!-- .portlet -->
		
		
		<div class="portlet x6">
			
			<div class="portlet-header">
				<h4>Tips</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="inbox_table">
					<tbody>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.png';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><b>Blahhhhhhhhhhhhhh</b><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna al</td>
							<td class="who">Sent by Peter</td>
						</tr>
	
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.png';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><b>Blahhhhhhhhhhhhh</b><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc.</td>
							<td class="who">Sent by Carla</td>
						</tr>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.png';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><b>Blahhhhhhhhhhhhh</b><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</td>
							<td class="who">Sent by Bruce</td>
						</tr>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.png';?>" width="55" alt="avatar" class="avatar_img" /></td>
	
							<td class="full"><b>Blahhhhhhhhhhhh</b><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
							<td class="who">Sent by Jane</td>
						</tr>					
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
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