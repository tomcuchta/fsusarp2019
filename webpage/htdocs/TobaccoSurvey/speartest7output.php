<?php
$servername="#####";
$username="#####";
$password="#####";
$dbname="#####";

$conn = mysqli_connect($servername,$username,$password,$dbname); //your connection

$sql = "SELECT * FROM speartest7";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";
?>
<tr><td>id</td><td>firstname</td><td>lastname</td><td>accountvalue</td><td>remoteport</td><td>requesttime</td><td>useragent</td><td>category</td><td>year</td><td>decision</td><td>useproducts</td><td>smokecigs</td><td>dipquestion</td><td>thoughts</td><td>univemail</td><td>idnumber</td><td>address</td><td>phoenum</td><td>dob</td><td>gender</td><td>ip address</td></tr>
<?php
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";



$conn->close();
?>
