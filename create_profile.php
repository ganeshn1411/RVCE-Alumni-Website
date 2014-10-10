<head>
<link rel="stylesheet" type="text/css" href="create_profile.css">
</head>
<div class="ph-line-nav nav">
        <a href="home.html">Home</a>
         <a href>About</a>
         <a href>Help</a>
         <a href="login.html">Login</a>
        <br>
        <br>
       <div class="effect"></div>
    </div>

<form enctype="multipart/form-data" method="post" action="create_profile.php" >

<br>
<br>
<div class="container1">
<h1>Personal Info</h1>

		<br>	
		<div>
			<label for="first_name">First Name<p class="help-inline">*</p></label>
			<input id="first_name" type="text" name="first_name" required>
			
		</div>
		<br>
		<div>
			<label for="middle_name">Middle Name<p class="help-inline"></p></label>
			<input id="middle_name" type="text" name="middle_name">
			
		</div>
<br>
                <div>
			<label for="last_name">Last Name<p class="help-inline">*</p></label>
			<input id="last_name" type="text" name="last_name" required>
			
		</div>
	<br>	
<div>
			<label for="gender">Gender<p class="help-inline">*</p></label>
			<select name="gender" id="gender"> 
			<option id="gender" name="gender" value="Male">Male</option>
			<option id="gender" name="gender" value="Female">Female</option>
			</select>
		</div>
<br>

		<div>
			<label for="DOB">Date Of Birth
                        <p class="help-inline">*</p></label>
			<input id="DOB" type="date" name="DOB" required>
		</div>
		<br>
		<div>
			<label for="YOA">Year Of Admission<p class="help-inline">*</p></label>
			<input id="YOA" type="number" name="YOA"  step="1" value="2013" required>
			
		</div>
<br>
<div>
			<label for="YOG">Year Of Graduation<p class="help-inline">*</p></label>
			<input id="YOG" type="number" name="YOG"  step="1" value="2013" required>
			
		</div>

<br>
		</div>
	</div>
<div class="container1">
  <h1>Professional Details</h1>
		
		<div>
			<label for="C_name">Oragnization Name<p class="help-inline"></p></label>
			<input id="c_name" type="text" name="c_name">
		</div>
	         <br>       		
		<div>
			<label for="Location">Location<p class="help-inline"></p></label>
			<input id="location" type="text" name="location">
                        
		</div>
		<br>
		<div>
			<label for="experience">Experience<p class="help-inline"></p></label>
			<input id="exp" type="number" name="exp" min="0" max="200" step="1" value="10">
			
		</div>
<br>
		</div>

<div class="container1">
  <h1>Contact Details</h1>
		
		<div>
				
		<div>
			<label for="Email ID">Email ID<p class="help-inline">*</p></label>
			<input id="email" type="text" name="email" required>
					</div>
	<br>	
		<div>
			<label for="Phone No.">Contact Number<p class="help-inline">*</p></label>
			<input id="phone" type="text" name="phone" required>
			
		</div>	
		<br>		<div>
			<label for="address">Address<span class="help-inline">*</span></label>
            <textarea name="address" required></textarea>	
			
		</div>
		
<br>
<div>
			<label for="profpic">Profile Picture<span class="help-inline">*</span></label>
			<input type="file" name="screenshot" id="screenshot">
</div>	
		</div>
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
define('GW_UPLOADPATH', 'profile_pics/');
if(isset($_POST['submit']))
{
//echo "submitted";
$db=mysqli_connect("127.0.0.1","root","","alumni");
//echo "con";
if(!$db){
die("connection error");
}
session_start();
	$username=$_SESSION['username'];
$f_name=$_POST['first_name'];
$m_name=$_POST['middle_name'];
$l_name=$_POST['last_name'];
$gender=$_POST['gender'];
$dob=$_POST['DOB'];
$yoa=$_POST['YOA'];
$yog=$_POST['YOG'];
$c_name=$_POST['c_name'];
$loc=$_POST['location'];
$exp=$_POST['exp'];
$email=$_POST['email'];
$ph=$_POST['phone'];
$add=$_POST['address'];
$screenshot=$_FILES['screenshot']['name'];
$target = GW_UPLOADPATH . $screenshot;
move_uploaded_file($_FILES['screenshot']['tmp_name'], $target);
$sql="UPDATE member SET f_name='$f_name',m_name='$m_name',l_name='$l_name',gender='$gender',DOB='$dob',YOA='$yoa',YOG='$yog',Org_Name='$c_name',
Location='$loc',Experience='$exp',Email_ID='$email',Ph_No='$ph',Address='$add',profile_pic='$target' where Username='$username'";

$result=mysqli_query($db,$sql) or die("error in database");
if($result){
header('Location:login.php');
}
mysqli_close($db);
}
?>
