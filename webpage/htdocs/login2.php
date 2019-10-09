<?php
$servername="#####";
$username="#####";
$password="#####";
$dbname="#####";
$trainingtype=$_GET['tval'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//check to see if they inserted a password
if(empty($_POST["Password"])){
	$passwordcode = 0;
}
else{
	$passwordcode = 1;
}

if(empty($_SERVER['HTTP_X_FOWARDED_FOR']))
{
	$xforwardedfor="0";
}
else
{
	$xforwardedfor=$_SERVER['HTTP_X_FORWARDED_FOR'];
}

$sql = "INSERT INTO phishdata (username, ipaddress, ipaddress2, port, requesttime, browser, emailid, training, password, packet) VALUES (\"". $_POST["UserName"] ."\" , \"".$_SERVER['REMOTE_ADDR'] ."\", \"".$xforwardedfor."\", \"". $_SERVER['REMOTE_PORT'] ."\" , \"". $_SERVER['REQUEST_TIME'] ."\", \"".$_SERVER['HTTP_USER_AGENT']."\", \"".$_GET['accountvalue'] ."\", \"". $_GET['tval'] ."\", \"".$passwordcode. "\", \"".$_GET['pval'] ."\")";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

if($_GET['tval']==0){
 		echo "Thank you for registering to take the survey. Please expect a followup email containing the survey!";
}
else
{
	if($trainingtype==1){
		echo readfile("/opt/lampp/htdocs/PhishInstruct.html");
	}
	elseif($trainingtype==2){
		echo readfile("/opt/lampp/htdocs/training.htm");
	}
	elseif($trainingtype==3){
		echo readfile("/opt/lampp/htdocs/2018_AEP_Vulnerabilities_of_Healthcare_IT_Systems.pdf.htm");
	}
}

?>
