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

if(empty($_SERVER['HTTP_X_FOWARDED_FOR']))
{
	$xforwardedfor="0";
}
else
{
	$xforwardedfor=$_SERVER['HTTP_X_FORWARDED_FOR'];
}

$sql = "INSERT INTO usbtest (id, pubipaddress, locipaddress, macaddress, requesttime, fileid, uid) VALUES (null, \"".$_SERVER['REMOTE_ADDR'] ."\", \"". $_SERVER['REMOTE_PORT'] ."\" , \"".$xforwardedfor ."\", \"". $_SERVER['REQUEST_TIME'] ."\", \"".$_GET['fid'] ."\", \"".$_GET['uid'] ."\")";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>

<img src="./fsulogo.png" />
