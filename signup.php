<head>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<?php
if(isset($_POST['submit']))
{
$db=mysqli_connect("127.0.0.1","root","","alumni");
//echo "con";
if(!$db){
die("connection error");
}
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['cpassword'];
$mail=$_POST['epassword'];

//mysql_select_db("alumni",$db);
session_start();
	if($_SESSION['usn'])
	{$USN=$_SESSION['usn'];
	}
	if($_SESSION==NULL){
	
	}
	echo "$USN";
	if($password==$password1)
	{
	$pass_enc=sha1($password);
		
echo 'UPDATE member set Username='.$username.',Password='.$password.',Email_ID='.$mail.' where USN='.$USN;
$sql="UPDATE member set Username='$username',Password='$pass_enc',Email_ID='$mail' where USN='$USN'";
		
	$_SESSION['username']=$username;
$result=mysqli_query($db,$sql) or die("error in database");
if($result)
header('Location:create_profile.php');
}
else
	{
	echo "<script>alert('Passwords do not match. Please enter Again');</script>";
	
	}
mysqli_close($db);
}?>
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

	<form name="login-form" class="login-form" action="" method="post">
	
		<div class="header">
		<h1>Sign Up Form</h1>
		<span></span>
		</div>
	
		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" />
                <input name="password" type="password" class="input password" placeholder="Password" />
                <input name="cpassword" type="password" class="input password" placeholder="Confirm Password" />  
                <input name="epassword" type="text" class="input password" placeholder="Email ID" />   
	
		</div>

		<div class="footer">
		<input type="submit" class="button" name="submit" id="submit">
		</div>
	
	</form>

</div>
<div class="gradient"></div>

