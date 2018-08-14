<?php 





//include 'includes/sql/db_connect.php';
//include '../includes/db.inc.php';

$sql = "SELECT * FROM participants";

if ($result = mysqli_query($dbc, $sql)){
		print '<table class = "results">';
		print "<tr><th> ID </th> <th> Email </th> <th> Full Name </th> <th> Date </th> <th> Time </th></tr>";
	while($row = mysqli_fetch_array($result)){


		print "<tr>";
		print "<td>" . $row['id'] . "</td>";
		print "<td>" . $row['email'] . "</td>";
		print "<td>" . $row['fullname'] . "</td>";
		print "<td>" . $row['date_entered'] . "</td>";
		print "<td>" . $row['time_entered'] . "</td>";


	}

	print "</table>";

}


/*
// Associative array
$row = mysqli_fetch_assoc($result);
echo "<table><tr><th>id</th><th>email</th><th>fullname</th><th>date_entered</th><th>time_entered</th></tr>";
foreach ($result as $row){
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" . $row['fullname'] . "</td><td><td>" . $row['date_entered'] . "</td></tr>" ;

}
echo "</table>"; 

*/
// Free result set
mysqli_free_result($result);

mysqli_close($dbc);

?>