<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
session_start();
	$username=$_SESSION['username'];
	$_SESSION['act'];
global $a;
$displayForm=True;
$db=mysqli_connect("127.0.0.1","root","","alumni");
if(!$db){
die("connection error");
}?>
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
		<script src="search.js"></script>
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
				<input placeholder="Search" style="width:300px;padding:11px 25px;height:45px;font-family:Arial"  
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
				<br>
				<br>
			</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<form method="post" action="register.php">
<?php
$fsql="select distinct A_Name from activity";
$fresult=mysqli_query($db,$fsql) or die("cannot retrieve");
if(isset($_POST['submit']))
$displayForm=False;
if($displayForm)
{?>
<form method="post" action="register.php">		
<div class="container1">
<h1>Register for Activities</h1>
		
			<br>
			<div>
			<label for="address">Activity list<p class="help-inline"></p></label>
<select type="list" id="activity" name="activity" value="activity">
<?php
while($row1=mysqli_fetch_array($fresult))
{
echo "<option name='activity'> ".$row1['A_Name']." </option>";
}
?>
</select>
</div>
<br>
</div>
<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit" />
<a href="g_profile.php" class="submit1" style="text-decoration:none">Cancel</a>
</div>
</div>
<?php
}
if(!$displayForm)
{
$a=$_POST['activity'];
$_SESSION['act']=$a;
$sql="select * from activity where A_Name='$a'";
$result=mysqli_query($db,$sql) or die("cannot retrieve");
$row=mysqli_fetch_array($result);
$date=$row['Date'];
$loc=$row['Location'];
$type=$row['Type'];
$dat=$row['Start_time'];
$pur=$row['Purpose'];
$agenda=$row['Agenda'];
echo "<div class='container1'>";
echo "<br><p class='help1-inline'>Activity Name   :    </p> $a";
echo "<br><p class='help1-inline'> Date :  </p>";
echo $date;
echo "<br><p class='help1-inline'> Location :  </p>";
echo $loc; 
echo "<br><p class='help1-inline'> Activity Type :  </p>";
echo $type;
echo "<br><p class='help1-inline'> Date and Time :  </p>";
echo $dat;
echo "<br><p class='help1-inline'> Purpose :  </p>";
echo $pur;
echo "<br><p class='help1-inline'> Agenda :  </p>";
echo $agenda;
?>
</div>
<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="confirm" value="Confirm" class="submit" />
<a href="g_profile.php" class="submit1" style="text-decoration:none">Cancel</a>
</div>
</div>
<?php
}
if(isset($_POST['confirm']))
{
$sql="select USN from member where Username='$username'";
$result=mysqli_query($db,$sql) or die("cannot retrieve");
$row=mysqli_fetch_array($result);
$usn=$row['USN'];
$aname=$_SESSION['act'];
$sql1="select Activity_Num,count,maximum from activity where A_Name='$aname'";
$result1=mysqli_query($db,$sql1) or die("cannot retrieve");
$row1=mysqli_fetch_array($result1);
$anum=$row1['Activity_Num'];
$count=$row1['count'];
$max=$row1['maximum'];
$count++;
if($count <= $max){
$sql3="UPDATE activity set count='$count' where Activity_Num='$anum'";
$result3=mysqli_query($db,$sql3) or die("retrieve");
}
else
{
"<script>alert('Sorry. The registrations are full.');
window.location.assign('g_profile.php');
</script>";
}
$sql2="INSERT INTO participates(USN,Activity_no) VALUES ('$usn','$anum')";
$result2=mysqli_query($db,$sql2);
if($result2){
echo "<script>alert('Your Response has been recorded. Thank you for your interest');
window.location.assign('g_profile.php');
</script>";
}}
?>
</form>
</body>
</html>