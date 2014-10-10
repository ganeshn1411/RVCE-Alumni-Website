<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>RVCE Alumni</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<!--<link rel="shortcut icon" href="../favicon.ico">-->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="common.css" />
			<script src="js/modernizr.custom.js"></script>
	</head>
<?php
if(isset($_POST['submit']))
{
$db=mysql_connect("127.0.0.1","root","","alumni");
if(!$db){
die("connection error");
}
mysql_select_db("alumni",$db);
$sql="INSERT INTO member(USN,f_name,m_name,l_name,YOA,YOG,Branch) VALUES ('$_POST[usn]','$_POST[f_name]','$_POST[m_name]','$_POST[l_name]','$_POST[YOA]','$_POST[YOG]','$_POST[branch]')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($db));
  }
mysql_close($db);
}
?>
	<body>
	<form method="post" action="student1.php">
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main" style="z-index:10">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<ul>
										<li class="icon icon-arrow-left">
											<a class="icon icon-phone" href="#">Mobile Phones</a>
											<div class="mp-level">
												<h2>Mobile Phones</h2>
												<ul>
													<li><a href="#">Super Smart Phone</a></li>
													<li><a href="#">Thin Magic Mobile</a></li>
													<li><a href="#">Performance Crusher</a></li>
													<li><a href="#">Futuristic Experience</a></li>
												</ul>
											</div>
										</li>
								</ul>
								<li>
								<a class="gn-icon gn-icon-cog">Settings</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-download" href="student.php">Alumni Archive</a>
								</li>
								<li><a class="gn-icon gn-icon-illustrator" href="activity.php">Activities</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-article" href="seminar.php">Events</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-archive" href="fund.php">Contributions</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-pictures" href="visit.php">Visit</a>
								</li>
								<li><a class="gn-icon gn-icon-help" href="help.html">Help</a>
								</li>
								</ul>
						</div><!-- /gn-scroller -->
					</nav>
				<div style="float:right">
				<li><a class="codrops-icon-drop" href="a_profile.php"><span>Home</span></a></li>
				<!--<li><a class="codrops-icon-drop" href=""><span></span></a></li>-->
				<li><a class="codrops-icon-drop" href="logout.php"><span>Logout</span></a></li>
				</div>
				</ul>
			<header>
			<label>Welcome</label>
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ), document.getElementById( 'trigger' ) );
		</script>
		<br>
		<br>
		<div class="container1">
<h1>Student Archive</h1>

		<br>	
		<div>
			<label for="usn">USN<p class="help-inline">*</p></label>
			<input id="usn" type="text" name="usn" required>	
		</div>
		<br>
		<div>
			<label for="usn">First Name<p class="help-inline">*</p></label>
			<input id="f_name" type="text" name="f_name" required>	
		</div>
		<br>
		<div>
			<label for="usn">Middle Name<p class="help-inline"></p></label>
			<input id="m_name" type="text" name="m_name" required>	
		</div>
		<br>
		<div>
			<label for="usn">Last Name<p class="help-inline">*</p></label>
			<input id="l_name" type="text" name="l_name" required>	
		</div>
	<br>
		<div>
			<label for="YOA">Year Of Admission<p class="help-inline">*</p></label>
			<input id="YOA" type="number" name="YOA" required>
		</div>
<br>
        <div>
			<label for="YOG">Year Of Graduation<p class="help-inline">*</p></label>
			<input id="YOG" type="number" name="YOG" required>
		</div>
		<br>
		<div>
			<label for="usn">Branch<p class="help-inline">*</p></label>
			<input id="branch" type="text" name="branch" required>	
		</div>
		</div>
	</div>
</div>
		<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit"/>
<a href="a_profile.html" class="submit1" style="text-decoration:none;">Cancel</a>
</div>
	</div>
<br>
	</form>
	</body>
</html>