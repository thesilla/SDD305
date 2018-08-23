<?php 





include '../includes/sql/db_connect.php';
//include '../includes/db.inc.php';

$sql = "SELECT * FROM consents";

if ($result = mysqli_query($dbc, $sql)){
		print '<table class = "results">';
		print "<tr><th> ID </th> <th> Email </th> <th> Interview Date </th> <th> Interview Time </th> <th> Name </th><th>Phone</th><th>Status</th><th>Date Consented</th></tr>";
	while($row = mysqli_fetch_array($result)){


		print "<tr>";
		print "<td>" . $row['ID'] . "</td>";
		print "<td>" . $row['Email'] . "</td>";
		print "<td>" . $row['InterviewDate'] . "</td>";
		print "<td>" . $row['InterviewTime'] . "</td>";
		print "<td>" . $row['ParticipantName'] . "</td>";

		print "<td>" . $row['Phone'] . "</td>";
		print "<td>" . $row['Status'] . "</td>";
		print "<td>" . $row['DateConsented'] . "</td>";


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
//mysqli_free_result($result);

mysqli_close($dbc);

?>