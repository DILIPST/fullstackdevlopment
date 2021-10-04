 <?php
	$sname = "sql207.epizy.com";
	$uname = "epiz_28433216";
	$password = "KwQXsYkBpEI";
	$db_name = "epiz_28433216_raisemyvoice";
	$conn = mysqli_connect($sname, $uname, $password, $db_name);
	
	if (!$conn) 
	{
		echo "Connection failed!";
		exit();
	}
?>