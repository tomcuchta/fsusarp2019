<?php
include("databasesubmit.php")
?>
<html lang="en">
<head>
<title>Survey Permitting the use of Tobacco on Campus</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>

<body>

<center><img src="survey.png" alt="SurveyMonkey LOGO"</center>
<center><h1> <font color="white"> We Need Your Feedback!</font></h1></center>


 <form action="surveyp4.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>

		<tr>
 	  		<center><td><b>If you are a student, what year are you?</b></td>
	  		<td>
	  	 	<input type="radio" value="Freshman" name="year">Freshman
	  	 	<input type="radio" value="Sophmore" name="year">Sophmore
	  	 	<input type="radio" value="Junior" name="year">Junior
	  	 	<input type="radio" value="Senior" name="year">Senior
	  	 	<input type="radio" value="Not a student" name="year">Not a Student
 	 		</td></center>
		</tr>

 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
