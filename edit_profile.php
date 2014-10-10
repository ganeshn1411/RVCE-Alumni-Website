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
<?php
require_once('db/connect.php');
session_start();
$uname=$_SESSION['username'];
$query1="select * from member where Username='$uname'";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
$row1=mysqli_fetch_array($result1);
$dbfname=$row1['f_name'];
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
?>	

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
				<br>
				</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
<form method="post" actio="feedback.php">
		<div class="container1">
<h1>Personal Info</h1>

		<br>	
		<div>
			<label for="first_name">First Name<p class="help-inline">*</p></label>
			<input id="first_name" type="text" name="first_name" required value="<?php if(!empty($dbfname)) echo $dbfname; ?>"</input>
			
		</div>
		<br>
		<div>
			<label for="middle_name">Middle Name<p class="help-inline"></p></label>
			<input id="middle_name" type="text" name="middle_name" value="<?php if(!empty($dbmname)) echo $dbmname; ?>">
			
		</div>
<br>
                <div>
			<label for="last_name">Last Name<p class="help-inline">*</p></label>
			<input id="last_name" type="text" name="last_name" required value="<?php if(!empty($dblname)) echo $dblname; ?>">
			
		</div>
	<br>	
<!--<div>
			<label for="gender">Gender<p class="help-inline">*</p></label>
			<select name="gender" value="<?php if(!empty($dbgender)) echo $dbgender; ?>"> 
			<option id="gender" name="gender" value="Male">Male</option>
			<option id="gender" name="gender" value="Female">Female</option>
			</select>
		</div>
<br>

		<!--<div>
			<label for="DOB">Date Of Birth
                        <p class="help-inline">*</p></label>
			<input id="DOB" type="date" name="DOB" required placeholder="<?php if(!empty($dbdob)) echo $dbdob; ?>">
		</div>
		<br>-->
		<div>
			<label for="YOA">Year Of Admission<p class="help-inline">*</p></label>
			<input id="YOA" type="number" name="YOA"  step="1" value="<?php if(!empty($dbYOA)) echo $dbYOA; ?>">
			
		</div>
<br>
<div>
			<label for="YOG">Year Of Graduation<p class="help-inline">*</p></label>
			<input id="YOG" type="number" name="YOG"  step="1" value="<?php if(!empty($dbYOG)) echo $dbYOG; ?>">
			
		</div>

<br>
		</div>
	</div>
<div class="container1">
  <h1>Professional Details</h1>
		
		<div>
			<label for="C_name">Oragnization Name<p class="help-inline"></p></label>
			<input id="c_name" type="text" name="c_name" value="<?php if(!empty($dborg)) echo $dborg; ?>" >
		</div>
	         <br>       		
		<div>
			<label for="Location">Location<p class="help-inline"></p></label>
			<input id="location" type="text" name="location" value="<?php if(!empty($dbloc)) echo $dbloc; ?>">
                        
		</div>
		<br>
		<div>
			<label for="experience">Experience<p class="help-inline"></p></label>
			<input id="exp" type="number" name="exp" min="0" max="200" step="1" value="<?php if(!empty($dbexp)) echo $dbexp; ?>">
			
		</div>
<br>
		</div>

<div class="container1">
  <h1>Contact Details</h1>
		
		<div>
				
		<div>
			<label for="Email ID">Email ID<p class="help-inline">*</p></label>
			<input id="email" type="text" name="email"  value="<?php if(!empty($dbemail)) echo $dbemail; ?>">
					</div>
	<br>	
		<div>
			<label for="Phone No.">Contact Number<p class="help-inline">*</p></label>
			<input id="phone" type="text" name="phone"  value="<?php if(!empty($dbphno)) echo $dbphno; ?>">
			
		</div>	
		<br>		<div>
			<label for="address">Address<span class="help-inline">*</span></label>
            <textarea name="address"  value="<?php if(!empty($dbadd)) echo $dbadd; ?>"></textarea>	
			
		</div>
		
<!--<br>
<div>
			<label for="profpic">Change Profile Picture<span class="help-inline"></span></label>
			<input type="file" name="screenshot" id="screenshot" value="<?php if(!empty($dbfname)) echo $dbpic; ?>">
</div>-->	
		</div>
		</div>
	</div>
	</div>
<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit" />
<a href="g_profile.php" name="cancel" class="submit1" style="text-decoration:none">Cancel</a>
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
$dbfaname=$_POST['first_name'];
$dbmaname=$_POST['middle_name'];
$dblaname=$_POST['last_name'];
$dbgaender=$_POST['gender'];
$dbYaOA=$_POST['YOA'];
$dbYaOG=$_POST['YOG'];
$dboarg=$_POST['c_name'];
$dblaoc=$_POST['location'];
$dbeaxp=$_POST['exp'];
$dbpahno=$_POST['phone'];
$dbeamail=$_POST['email'];
$dbaadd=$_POST['address'];

$sql="update member set f_name='$dbfaname',m_name='$dbmaname',l_name='$dblaname',Gender='$dbgaender',YOA='$dbYaOA',YOG='$dbYaOG',Org_Name='$dboarg',
Location='$dblaoc',Experience='$dbeaxp',Ph_No='$dbpahno',Email_ID='$dbeamail',Address='$dbaadd' where Username='$uname'";
$result=mysql_query($sql,$db);
if($result){
echo "<script>alert('Updated Successfully');</script>";
}
mysql_close($db);

}


?>