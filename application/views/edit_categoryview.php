
<html>
<head>
<title>Category Of Leave</title>
</head>
<body>
<?php
echo "<bgcolor = 'red'>";
echo "<center><font size = '6'>";
echo "<br>List Of Category";
echo "<br><br>Record from database<br><br>";
echo "<table border = '5' cellspacing = '3' cellpadding = '5'><tr><th>Category ID</th><th>Category Name</th><th>Remarks</th></tr>";

foreach($records as $rec){
	echo "<tr><td align = 'center'>";
	
	
echo $rec->C_ID;
echo "</td>";
echo "<td align = 'center'>";
echo $rec->C_Name;
echo "</td>";
echo "<td align = 'center'>";
echo '<input type="submit" name = "edit" value = "Edit"/>&nbsp;&nbsp;&nbsp;<input type="submit" name = "delete" value = "Delete"/>';
echo "</td>";
echo "</tr>";

}

echo "</table>";

?>
</body>
</html>