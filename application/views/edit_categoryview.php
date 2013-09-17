
<html>
<head>
<meta charset="utf-8">
<title>Leave Application System</title>
</head>

<style type="text/css">

	::selection{ background-color: #CCEEFF; color: white; }
	::moz-selection{ background-color: #CCEEFF; color: white; }
	::webkit-selection{ background-color: #CCEEFF; color: white; }
	
	body {
		background-color: #CCEEFF;
		margin: 40px;
		font: 18px/20px normal Helvetica, Arial, sans-serif;
		color: #01030B;
	}
	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: center;
		font-size: 12px;
		border-top: 2px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 2px solid #1083C5;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		align: center;
	}
	
</style>	
<body>

<?php
echo "<bgcolor = 'red'>";
echo "<center><font size = '6'>";
echo "<br><br>List of Category</br>";
echo "<table border = '5' cellspacing = '3' cellpadding = '5'>
<tr><br><br><th>Category ID</th><th>Category Name</th><th>Remarks</th></tr>";

foreach($records as $rec){
	echo "<tr><td align = 'center'>";
	
	
echo "<input type='text' name='C_ID' value='$rec->C_ID' disabled='true'></td>";
echo "<td align = 'center'><input type='text' name='C_Name' value='$rec->C_Name' disabled='true'>";
echo "</td>";
echo "<td align = 'center'>";
echo '<a href = "update_categoryview.php"><input type="submit" name="edit" value="Edit" id="C_ID"/></a>&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="Delete"/>';
echo '&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value="Save"/>';
echo "</td>";
echo "</tr>";
	
}

echo "</table>";

?>

<br>

<input type="submit"  name="submit" value="Back" onClick=""></input>

<div id="footer">
				<p class="footer">Copyright 2013 by<b> Junior Programmer</b></p>
			</div>
			
</body>
</html>
</body>
</html>