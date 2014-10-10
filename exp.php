<?php
require_once('db/connect.php');
if (isset($_POST['test'])) {
    $str = $_POST['test'];
	//echo $str;
$words = explode(' ', $str);
$fname=$words[0];
$mname=$words[1];
$lname=$words[2];
$query1="select * from member where f_name='$fname' and m_name='$mname' and l_name='$lname'";
$result1=mysqli_query($db,$query1) or die("cannot retrieve");
$row1=mysqli_fetch_array($result1);
echo $row1['Org_Name'];	
	}
	?>