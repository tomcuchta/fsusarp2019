<?php
include("databasesubmit.php");
?>
<html lang="en">
<head>
<title>Survey Permitting the use of Tobacco on Campus</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>

<body>

<center><img src="survey.png" alt="SurveyMonkey LOGO"</center>
<center><h1> <font color="white"> We Need Your Feedback!</font></h1></center>


 <form action="surveyp3.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>
 	 <tr>
	 	  	 	<center><td><b>Are you a student, staff, or falculty member?</b></td></center>
	 	  	 	<td>
	 	  	 	<input type="radio" value="Student" name="category">Student
	 	  	 	<input type="radio" value="Staff" name="category">Staff
	 	  	 	<input type="radio" value="Faculty" name="category">Faculty
				</td>
 	 </tr>
 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
