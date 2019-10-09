<?php
session_start();
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

//create table speartest7 ( id int auto_increment primary key, firstname int, lastname int, accountvalue text, remoteport text, requesttime text, useragent text, category int, year int, decision int, useproducts int, smokecigs int, dipquestion int, thoughts int, univemail int, idnumber int, address int, phonenum int, dob int, gender int, ipaddress text, submittingpage text );



//check to see if they inserted a firstname
if(empty($_POST["first"])){
        $firstnamecode = 0;
}
else{
        $firstnamecode = 1;
}

//check to see if they inserted a lastname
if(empty($_POST['last'])){
        $lastnamecode = 0;
}
else{
        $lastnamecode = 1;
}


//check to see if there is category
if(empty($_POST['category'])){
	$categorycode=0;
}
else{
	$categorycode=1;
}

//check to see if there is year
if(empty($_POST['year'])){
	$yearcode=0;
}
else{
	$yearcode=1;
}

//check to see if there is a decision
if(empty($_POST['decision'])){
	$decisioncode=0;
}
else{
	$decisioncode=1;
}

//check to see if there is useproducts
if(empty($_POST['useproducts'])){
	$useproductscode=0;
}
else{
	$useproductscode=1;
}

//check to see if there is smokecigs
if(empty($_POST['smokecigs'])){
	$smokecigscode=0;
}
else{
	$smokecigscode=1;
}

//check to see if there is dipquestion
if(empty($_POST['dipquestion'])){
	$dipquestioncode=0;
}
else{
	$dipquestioncode=1;
}

//check to see if there is thoughts
if(empty($_POST['thoughts'])){
	$thoughtscode=0;
}
else{
	$thoughtscode=1;
}

//check to see if there is univemal

if(empty($_POST['univemail'])){
	$univemailcode=0;
}
else{
	$univemailcode=1;
}

//check to see if there is idnumber

if(empty($_POST['idnumber'])){
	$idnumbercode=0;
}
else{
	$idnumbercode=1;
}

//check to see if there is address

if(empty($_POST['address'])){
	$addresscode=0;
}
else{
	$addresscode=1;
}

//check to see if there is phonenum
if(empty($_POST['phonenum'])){
	$phonenumcode=0;
}
else{
	$phonenumcode=1;
}

//check to see if there is dob
if(empty($_POST['DOB'])){
	$dobcode=0;
}
else{
	$dobcode=1;
}


//check to see if there is gender
if(empty($_POST['gender'])){
	$gendercode=0;
}
else{
	$gendercode=1;
}

$sql = "INSERT INTO tobaccosurvey (firstname, lastname, accountvalue, remoteport, requesttime, useragent, category, year, decision, useproducts, smokecigs, dipquestion, thoughts, univemail, idnumber, address, phonenum, dob, gender, ipaddress, submittingpage) VALUES (\"". $firstnamecode ."\" , \"".$lastnamecode ."\", \"". $_GET['accountvalue'] ."\", \"". $_SERVER['REMOTE_PORT'] ."\" , \"". $_SERVER['REQUEST_TIME'] ."\", \"".$_SERVER['HTTP_USER_AGENT']."\", \"". $categorycode ."\", \"". $yearcode ."\", \"". $decisioncode ."\", \"". $useproductscode ."\", \"". $smokecigscode ."\", \"". $dipquestioncode ."\", \"". $thoughtscode ."\", \"". $univemailcode ."\", \"". $idnumbercode ."\", \"". $addresscode ."\", \"". $phonenumcode ."\", \"". $dobcode ."\", \"". $gendercode ."\", \"". $_SERVER['REMOTE_ADDR'] ."\", \"". $_SESSION['prevpage'] ."\")";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

$_SESSION['prevpage']=$_SERVER['SCRIPT_FILENAME'];
?>
