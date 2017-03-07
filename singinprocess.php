<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	$uname = $_POST['uname'];
	$upassword = $_POST['upassword'];

	$host = "localhost";
	$userdb = "root";
	$passworddb = "";
	$dbname = "comsci_db";
	$con = mysqli_connect($host,$userdb,$passworddb,$dbname);

	$strsql = "select * from user_tb where uname='".$uname."' and upassword='".$upassword."'";
	//echo $strsql;
	$result = mysqli_query($con,$strsql);

	if($row = mysqli_fetch_array($result)){
		//ok
		echo "OK";
	}else{
		echo "ไม่ถูกต้อง";
	}
?>
	
</body>
</html>