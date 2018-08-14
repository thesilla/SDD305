<?php 
include '../includes/db.inc.php';

$sql = "SELECT * FROM participants";
$result = mysqli_query($mysqli, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);
echo "<table><tr><th>email</th><th>Last Name</th><th>First Name</th><th>Consent</th></tr>";
foreach ($result as $row){
echo "<tr><td>" . $row["email"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["first_name"] . "</td><td><td>" . $row["consent"] . "</td></tr>" ;

}
echo "</table>"; 
// Free result set
mysqli_free_result($result);

mysqli_close($mysqli);

?>