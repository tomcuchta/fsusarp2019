<?php 
session_start(); 
$_SESSION['prevpage']=$_SERVER['SCRIPT_FILENAME']; 
?>
<html lang="en">
<head>
<title>Survey Permitting the use of Tobacco on Campus</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>

<body>

<center><img src="survey.png" alt="SurveyMonkey LOGO"</center>
<center><h1> <font color="white"> We Need Your Feedback!</font></h1></center>


 <form action="surveyp2.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>
 	 <tr>
 	 	<center><td><b>First Name:</b></td></center>
 	 	<td><input type="text" name="first"/></td>
 	 </tr>

 	 <tr>
	 	<center><td><b>Last Name:</b></td></center>
	 	<td><input type="text" name="last"/></td>
 	 </tr>
 	</table>
    <input type="submit" />
</form>

</body>
</html>
