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


 <form action="surveyp5.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>

		<tr>
 	  		<center><td><b>Do you consume strong alcoholic beverages such as: liquior, vodka, rum, etc?</b></td>
	  		<td>
	  	 	<input type="radio" value="YES" name="dipquestion">Yes
	  	 	<input type="radio" value="NO" name="dipquestion">No
 	 		</td></center>
		</tr>

 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
