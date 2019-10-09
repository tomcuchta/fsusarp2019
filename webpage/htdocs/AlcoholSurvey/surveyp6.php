<?php
include("databasesubmit.php")
?>
<html lang="en">
<head>
<title>Survey Permitting the use of Tabacco on Campus</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<head>

<body>

<center><img src="survey.png" alt="SurveyMonkey LOGO"</center>
<center><h1> <font color="white"> We Need Your Feedback!</font></h1></center>


 <form action="surveyp7.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>
		<tr>
			<center><td><b>To verify that you are a student, staff, or falculty member and are eligible to recieve the Starbucks gift card, please fill out the next few pages!</b></td></center>
	    </tr>

 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
