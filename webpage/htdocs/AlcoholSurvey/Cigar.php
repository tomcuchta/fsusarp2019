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


 <form action="DIP.php?accountvalue=<?php echo $_GET['accountvalue']; ?>" method="post">
 	<table>

		<tr>
 	  		<center><td><b>Do you consume beer?</b></td>
	  		<td>
	  	 	<input type="radio" value="YES" name="smokecigs">Yes
	  	 	<input type="radio" value="NO" name="smokecigs">No
 	 		</td></center>
		</tr>

 	 </table>

     <input type="submit" value="Next Question" />
</form>

</body>
</html>
