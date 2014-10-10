<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<?php
require_once('db/connect.php');
$displayForm=True;
if(isset($_POST['submit']))
{
$displayForm=False;
$USN=$_POST['USN'];
$YOA=$_POST['YOA'];
$YOG=$_POST['YOG'];

if((!empty($USN))&&(!empty($YOA))&&(!empty($YOG)))
{
$query1="select * from member where USN='$USN'";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
$row1=mysqli_fetch_array($result1);
	$dbYOA=$row1['YOA'];
	$dbYOG=$row1['YOG'];
	if($YOA==$YOA&&$dbYOG==$YOG){
	session_start();
	$_SESSION['usn']=$USN;
		header('Location:signup.php');
		}
else
{
echo "<script>alert('Wrong entry. Please enter Again');</script>";
$displayForm=True;
}	
}
else
{
echo "<script>alert('Please fill the details');</script>";
	$displayForm=True;
}
}
if($displayForm)
{	?>

 <div class="ph-line-nav nav">
        <a href="home.html">Home</a>
         <a href></a>
         <a href></a>
         <a href="help.php">Help</a>
        <br>
        <br>
       <div class="effect"></div>
    </div>

<div id="wrapper">

	<form name="login-form" class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
		<div class="header">
		<h1>Verify Details</h1>
		<span></span>
		</div>
	
		<div class="content">
		<input name="USN" type="text" class="input username" placeholder="USN" />
        <!--<input name="name" type="text" class="input password" placeholder="Full Name" />-->
        <input name="YOA" type="text" class="input password" placeholder="Year Of Admission" />  
        <input name="YOG" type="text" class="input password" placeholder="Year Of Graduation" />   
		<!--<input name="Branch" type="text" class="input password" placeholder="Branch" />--> 	

		</div>

		<div class="footer">
		<input type="submit" class="button" name="submit" Value="Submit">
		<a href="loin_opt.php" class="register" style="text-decoration:none" >Forgot USN</a>
		</div>
		</form>
</div>
<div class="gradient"></div>
</body>
<?php
}//if ends
?>