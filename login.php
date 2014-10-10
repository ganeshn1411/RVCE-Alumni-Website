<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<?php
require_once('db/connect.php');
$displayForm=True;
if(isset($_POST['submit']))
{
$displayForm=False;
$uname=$_POST['username'];
$pass=$_POST['password'];
$user=$_POST['user'];
$enc_pass=sha1($pass);
//echo "$enc_pass";
if((!empty($uname))&&(!empty($pass)))
{
if($user=="Admin")
{
$query1="select * from admin_login where Username='$uname'";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
	$row1=mysqli_fetch_array($result1);
	$dbPass=$row1['Password'];
	$dbUname=$row1['Username'];
	//echo "\n$dbPass";
if($pass==$dbPass && $dbUname==$uname){
//echo "equal";
session_start();
		$_SESSION['username']=$uname;
		header('Location:admin/a_profile.php');
		}
	else 
	{		
	echo "<script>alert('Wrong entry. Please enter Again');</script>";
	$displayForm=True;
	}
}	
else if($user=="Alumni"){
$query1="select * from member where Username='$uname'";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
	$row1=mysqli_fetch_array($result1);
	$dbPass=$row1['Password'];
	$dbUname=$row1['Username'];
	
if($enc_pass==$dbPass&&$dbUname==$uname){
session_start();
		$_SESSION['username']=$uname;
		//redirect to game
		header('Location:g_profile.php');
		}
	else //passwords dont match
	{		
	echo "<script>alert('Wrong entry. Please enter Again');</script>";
	$displayForm=True;
	}
}
}
else
{
echo "<script>alert('Please fill the details');</script>";
	$displayForm=True;
}
}
if($displayForm)
{
	?>


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
		<h1>Login Form</h1>
		<span></span>
		</div>
			<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" required/>
		<!--<div class="user-icon"></div>-->
		<input name="password" type="password" class="input password" placeholder="Password" required/>
		<div class="pass-icon"></div>		
<select name="user" type="text" class="input password" placeholder="User">
<option style="height:47px;" >Alumni</option>
<option style="height:47px;" >Admin</option>
</select>
		<div class="user-icon1"></div>		
		</div>


		<div class="footer">
<input type="submit" name="submit" value="Login" class="button" />
<a href="login_next.php" class="register" style="text-decoration:none" >Sign Up</a> 
		</div>
	</form>

</div>
<div class="gradient"></div>
<?php
}//if ends
?>
</body>
</html>