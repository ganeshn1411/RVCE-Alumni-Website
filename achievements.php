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

<form method="post" action="achievements.php">
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
								<a class="gn-icon gn-icon-download" href="student1.php">Alumni Archive</a>
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
<h1>Achievements</h1>

		<div>
			<label for="usn">USN<p class="help-inline">*</p></label>
			<input id="usn" type="text" name="usn">
			
			
		</div>
	<br>	
		<div>
		<label for="type">Acheivement Field<p class="help-inline">*</p></label>
			<select name="field" type="text">
			<option style="height:47px;" >Academic</option>
			<option style="height:47px;" >Sports</option>
			<option style="height:47px;" >Cultural</option>
			<option style="height:47px;" >Other</option>
			</select>
		</div>
	<br>
		
		<div>
			<label for="ach">Acheivement<p class="help-inline">*</p></label>
			<input id="ach" type="text" name="ach">
			
		</div>
<br>
                <div>
			<label for="desc">Description<p class="help-inline"></p></label>
			<textarea id="desc" name="desc">
			</textarea>
		</div>
	<br>	

<br>
		</div>
	</div>
	</div>
<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit" />
<input type="button" name="cancel" value="Cancel" class="submit1" />
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
$sql="INSERT INTO acheivements(qualification,Acad_Acheivment,Award,Social_recog) VALUES ('$_POST[aca_qua]','$_POST[aca_ach]','$_POST[awards]','$_POST[soc_rec]')";

$result=mysql_query($sql,$db);
mysql_close($db);

}

?>

	</html>	