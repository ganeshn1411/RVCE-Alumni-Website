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
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="common.css" />
		<script src="js/modernizr.custom.js"></script>
			</head>

<form method="post" action="fund.php">
<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main" style="z-index:10">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
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
				<!--<li><a class="codrops-icon-drop" href=""><span>My Account</span></a></li>-->
				<li><a class="codrops-icon-drop" href="logout.php"><span>Logout</span></a></li>
				</div>
				</ul>
			<header>
			</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

<br>
<br>
<div class="container1">
<h1>Contributions</h1>

		    <div>
			<label for="dod">USN<p class="help-inline">*</p></label>
			<input id="dod" type="text" name="dod" required>
			<div>
			<br>
			<label for="dod">Date of Donation<p class="help-inline">*</p></label>
			<input id="dod" type="date" name="dod" required>
			
			
		</div>
	<br>	
		<div>
			<label for="purpose">Purpose<p class="help-inline">*</p></label>
			<input id="purpose" type="text" name="purpose" required>	
		</div>
	<br>
		
		<div>
			<label for="amt">Amount Donated<p class="help-inline">*</p></label>
			<input id="amt" type="text" name="amt" required>
			
		</div>
<br>
                
	<br>	

<br>
		</div>
	</div>
	</div>
<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit" />
<a href="a_profile.html" class="submit1" style="text-decoration:none;">Cancel</a>
</div>
</div>
<br>
	</form>
	<?php
if(isset($_POST['submit']))
{
$db=mysql_connect("127.0.0.1","root","","alumni");
echo "con";
if(!$db){
die("connection error");
}
mysql_select_db("alumni",$db);
$sql="INSERT INTO funds(date,purpose,amount) VALUES ('$_POST[dod]','$_POST[purpose]','$_POST[amt]')";

$result=mysql_query($sql,$db);
mysql_close($db);

}

?>

	</html>	