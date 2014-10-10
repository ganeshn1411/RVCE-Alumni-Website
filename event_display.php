<?php
/*require_once('db/connect.php');
session_start();
$uname=$_SESSION['username'];
$query1="select * from activity";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
$row1=mysqli_fetch_array($result1);
$dbaname=$row1['A_Name'];
$dbmname=$row1['m_name'];
$dblname=$row1['l_name'];
$dbgender=$row1['Gender'];
$dbdob=$row1['DOB'];
$dbYOA=$row1['YOA'];
$dbYOG=$row1['YOG'];
$dborg=$row1['Org_Name'];
$dbloc=$row1['Location'];
$dbexp=$row1['Experience'];
$dbphno=$row1['Ph_No'];
$dbemail=$row1['Email_ID'];
$dbadd=$row1['Address'];
$pic=$row1['profile_pic'];
*/?>
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
				<style>
		.button{
	padding:11px 25px;
	height:45px;
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 18px;
	color: #fff;
	text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
	
	background: #56c2e1;
	border: 1px solid #46b3d3;
	border-radius: 5px;
	cursor: pointer;
	
	box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);		
		
		transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
		}
		
		.button:hover {
	background: #3f9db8;
	border: 1px solid rgba(256,256,256,0.75);
	
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	}

 	
		</style>
			</head>


<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main" style="z-index:10;">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
								<a class="gn-icon gn-icon-cog" href="edit_profile.php">Edit Profile</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-download" href="history.php">History</a>
								</li>
								<li><a class="gn-icon gn-icon-illustrator">Activities</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-article">Events</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-archive">Contributions</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-download">Achievements</a>
								</li>
								<li>
								<a class="gn-icon gn-icon-pictures" href="images.php">Images</a>
								</li>
								<li><a class="gn-icon gn-icon-help" href="feedback.php">Feedback</a>
								</li>
								</ul>
								</div><!-- /gn-scroller -->
					</nav>
					<div style="float:right">
				<li><a class="codrops-icon-drop" href="g_profile.php"><span>Home</span></a></li>
				<li><a class="codrops-icon-drop" href="profile.php"><span>My Account</span></a></li>
				<li><a class="codrops-icon-drop" href="register.php"><span>Register</span></a></li>
				
				<li class="gn-search-item" style="padding-right:10px;padding-left:10px">
				<form method="post" action="profile_search1.php">
				<input placeholder="Search" style="width:300px;padding:11px 25px;font-family:Arial;height:45px"  
				id="searchbox" name="pplsearch" type="text" class="gn-search" >
				<input type="submit" value="Search" name="submit" class="button" required>
				</form>
				</li>
				
				<li><a class="codrops-icon-drop" href="contact.php"><span>Contact Us</span></a></li>
				<li><a class="codrops-icon-drop" href="logout.php"><span>Logout</span></a></li>
					</div>
				</li>
				<li><a href></a></li>
				</ul>
				</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
<br>
<br>
<form method="post" action="activity_display.php">
<div class='container1'>
<h1>Events by the Alumni</h1>
</div>	
<?php 
require_once('db/connect.php');
$query1="select * from seminars,member where seminars.USN=member.USN order by Date";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");

while($row1=mysqli_fetch_array($result1))
{echo "<div class='container1'> <p class='help1-inline' style='font-size:22px;font-weight:bold'>".$row1['f_name']."</p>"."<p class='help1-inline' style='font-size:22px;font-weight:bold'>".$row1['m_name']."<p class='help1-inline' style='font-size:22px;font-weight:bold'>".$row1['l_name']."</p>";
echo "<br><p class='help1-inline'>Event Date   :    </p><p class='help1-inline'>".$row1['date']." </p>"."<br>"."<p class='help1-inline'>Event Type   :    </p><p class='help1-inline'>".$row1['Type']." </p>"."<br>".
"<p class='help1-inline'>Purpose  :    </p><p class='help1-inline'>".$row1['purpose']." </p>"."<br>"."<p class='help1-inline'>Topic   :    </p><p class='help1-inline'>".$row1['Topic']." </p>"."<br>"."<p class='help1-inline'>Target Audience   :    </p><p class='help1-inline'>".$row1['Target_audience']."</div>";
}?>


	<br>
	</form>
