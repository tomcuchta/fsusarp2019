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

$sql = "INSERT INTO usbtest (pubipaddress, locipaddress, macaddress, requesttime, fileid, uid) VALUES (\"". $_SERVER['REMOTE_ADDR'] ."\" , \"nolocip\", \"nomac\", \"". $_SERVER['REQUEST_TIME'] ."\" , \"fileid?\", \"uid?\")";

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
