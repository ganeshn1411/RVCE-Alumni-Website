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
$f_name=$_POST['First_name'];
$m_name=$_POST['Middle_name'];
$l_name=$_POST['Last_name'];
$YOA=$_POST['YOA'];
$YOG=$_POST['YOG'];
$branch=$_POST['Branch'];

if((!empty($YOA))&&(!empty($YOG)))
{
	$query1="select * from member where f_name='$f_name'";
	$result1=mysqli_query($db,$query1) or die("cannot retrieve");
	$row1=mysqli_fetch_array($result1);
	$dbm_name=$row1['m_name'];
	$dbl_name=$row1['l_name'];
	$dbbranch=$row1['Branch'];
	$dbYOA=$row1['YOA'];
	$dbYOG=$row1['YOG'];
	if($YOA==$YOA&&$dbYOG==$YOG&&$dbm_name==$m_name&&$dbl_name==$l_name&&$dbbranch==$branch)
	{
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
		<input name="First_name" type="text" class="input username" placeholder="First Name" />
        <input name="Middle_name" type="text" class="input password" placeholder="Middle Name" />
		<input name="Last_name" type="text" class="input password" placeholder="Last Name" />
        <input name="YOA" type="text" class="input password" placeholder="Year Of Admission" />  
        <input name="YOG" type="text" class="input password" placeholder="Year Of Graduation" />   
		<input name="Branch" type="text" class="input password" placeholder="Department" /> 	

		</div>

		<div class="footer">
		<input type="submit" class="button" name="submit" Value="Submit">
		<a href="login_next1.php" class="register" style="text-decoration:none" ></a>
		</div>
		</form>
</div>
<div class="gradient"></div>
</body>
<?php
}//if ends
?>