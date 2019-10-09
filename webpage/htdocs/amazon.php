<?php
$servername="#####";
$username="#####";
$password="#####";
$dbname="#####";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	$xforwardedfor=0;
}
else
{
	$xforwardedfor=$_SERVER['HTTP_X_FORWARDED_FOR'];
}

$sql = "INSERT INTO firstaccess (emailid, ipaddress, ipaddress2, requesttime, port, browser, packet) VALUES (\"". $_GET['accountvalue'] ."\" , \"".$_SERVER['REMOTE_ADDR'] ."\", \"".$xforwardedfor."\", \"". $_SERVER['REQUEST_TIME'] ."\" , \"". $_SERVER['REMOTE_PORT'] ."\", \"".$_SERVER['HTTP_USER_AGENT']."\", \"".$_GET['pval'] ."\")";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<html>
<body>
THANK YOU!
</body>
</html>
