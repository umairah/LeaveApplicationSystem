<?php

echo "Details of Applicant</br>";
echo "<table>
<tr><th>Type Leave</th></br><th>Applicant Name</th><th>Start Date</th><th>End Date</th><th>Remark</th><th>Status</th></tr>";

foreach($records as $rec){
 
	echo "<tr><td>";
	echo $rec->Type;
	echo "</td>";
	echo "<td>";
	echo $rec->Applicant;
	echo "</td>";
	echo "<td>";
	echo $rec->Start_date;
	echo "<td>";
	echo $rec->End_date;
	echo "</td>";
	echo "<td>";
	echo $rec->Remark;
	echo "</td>";
	echo "<td>";
	echo $rec->Status;
	echo "</td>";
	echo "</tr>";
}

    echo "</table>";
?>