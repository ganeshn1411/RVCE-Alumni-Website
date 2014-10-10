<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>RVCE Alumni</title>
		<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css1/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css1/demo.css" />
		<link rel="stylesheet" type="text/css" href="css1/icons.css" />
		<link rel="stylesheet" type="text/css" href="css1/component.css" />
		<link rel="stylesheet" type="text/css" href="../common.css" />
		<script src="js1/modernizr.custom.js"></script>
	</head>
<?php
if(isset($_POST['submit']))
{
$db=mysql_connect("127.0.0.1","root","","alumni");
if(!$db){
die("connection error");
}
mysql_select_db("alumni",$db);
$sql="DELETE FROM member WHERE USN=$_POST['usn']";
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
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu" >
					<div class="mp-level" style="background-color:#FFFFFF;color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);">
						<h2 class="icon" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);">All Categories</h2>
						<ul>
							<li class="icon icon-arrow-left">
								<a class="icon" href="#" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);">Student Archive</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Student Archive</h2>
									<ul>
<li class="icon" ><a class="icon " href="student1.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="abc.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon" href="#" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:20px;">Activities</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Activities</h2>
									<ul>
<li class="icon" ><a class="icon " href="activity.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon" href="#" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:20px;">Events</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Events</h2>
									<ul>
<li class="icon" ><a class="icon " href="seminar.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
								<a class="icon" href="#" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:20px;">Contributions</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Contributions</h2>
									<ul>
<li class="icon" ><a class="icon " href="fund.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li><li class="icon icon-arrow-left">
								<a class="icon" href="#" style="color:rgba(0,0,0,0.8);
text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:20px;">Acheivements</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Acheivements</h2>
									<ul>
<li class="icon" ><a class="icon " href="achievements.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li>
							<li class="icon icon-arrow-left">
<a class="icon" href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:20px;">Visit</a>
<div class="mp-level" style="background-color:#FFFFFF; style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);" >
									<h2 class="icon" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);">Visit</h2>
									<ul>
<li class="icon" ><a class="icon " href="visit.php" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Insert</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Delete</a></li>
<li class="icon" ><a class="icon " href="#" style="color:rgba(0,0,0,0.8); text-shadow: 0 0 1px rgba(0,0,0,0.1);font-size:18px;">Update</a></li>	
									</ul>
								</div>
							</li>							
					</div>
				</nav>
	<div ><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<!-- Top Navigation -->
						<div class="codrops-top clearfix" style="position:fixed;top:0px;height:60px; background-color:#FFFFFF; z-index:10;">
						<a href="./a_profile.php" style="position:relative;left:20px;border-right-width:thin;border-color:#5f6f81;border-right-style:solid;"><span class="fontchange">Home</span></a>
						<span class="right"><a href="../logout.php" style="position:relative;left:-0px;border-left-width:thin;border-color:#5f6f81;border-left-style:solid">
						<span class="fontchange">Logout</span></a></span>
						</div>
						<header>
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
	
		</div>
	</div>
</div>
		<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit"/>
<a href="./a_profile.php" class="submit1" style="text-decoration:none;">Cancel</a>
</div>
	</div>
<br>
						</header>
						<div class="content clearfix" >
							<div class="block block-40 clearfix" >
								<p><a href="#" id="trigger" class="menu-trigger" style="color:#000000;position:fixed;top:80px;left:50px;"></a></p>
								</div>
							</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="js1/classie.js"></script>
		<script src="js1/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
				
	</form>
	</body>
</html>