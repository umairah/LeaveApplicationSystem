
<?php


echo "Record from database</br>";
echo "<table><tr><th>id</th><th>name</th><th>button</th></tr>";

foreach($records as $rec){
	echo "<tr><td>";
	
	
echo $rec->C_ID;
echo "</td>";
echo "<td>";
echo $rec->C_Name;
echo "</td>";
echo "<td>";
echo '<input type="submit" name = "edit" value = "Edit"/><input type="submit" name = "delete" value = "Delete"/>';
echo "</td>";
echo "</tr>";

}

echo "</table>";

?>