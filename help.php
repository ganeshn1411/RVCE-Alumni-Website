<head>
<link rel="stylesheet" type="text/css" href="create_profile.css">
</head>

<?php
if(isset($_POST['submit']))
{
$db=mysql_connect("127.0.0.1","root","","alumni");
if(!$db){
die("connection error");
}
mysql_select_db("alumni",$db);
$sql="INSERT INTO help(name,problem,suggestions) VALUES ('$_POST[name]','$_POST[problem]','$_POST[sugg]')";

$result=mysql_query($sql,$db);
if($result)
{
echo "<script>alert('Thank you for your suggestion');
window.location.assign('home.html');
</script>";
}
mysql_close($db);
}?>

<div class="ph-line-nav nav">
        <a href="home.html">Home</a>
         <a href></a>
         <a href></a>
         <a href></a>
        <br>
        <br>
       <div class="effect"></div>
    </div>
<br>
<br>
<br>
<form method="post" action="help.php">
<div class="container1">
<h1>Help</h1>

			<div>
			<label for="Name">Name<p class="help-inline">*</p></label>
			<input id="name" type="text" name="name" required>
		</div>
			<br>
			<div>
			<label for="address">Please state your Problem<p class="help-inline">*</p></label>
			<textarea name="problem" required></textarea>	
			
		</div>
<br>
<div>
			<label for="address">Suggestions</label>
<textarea name="sugg" ></textarea>	
			
		</div>

</div>

<div class="container2" class="footer">
<div class="footer">
<input type="submit" name="submit" value="Submit" class="submit" />
<a href="home.html" class="submit1" style="text-decoration:none">Cancel</a>
</div>
</div>
<br>
	</form>
