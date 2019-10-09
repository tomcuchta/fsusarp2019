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


 <form action="surveyp12.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>
 	 	<tr>
	  	  		<center><td><b>Date of Birth:</b></td>
	  	  		<td><input type="date" name="DOB" id="DOB" /><td></center>
 		</tr>
 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
