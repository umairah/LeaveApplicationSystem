<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Leave Application System </title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #CCEEFF;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #01030B;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 2px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Delete User Details </h1>

<br>	
	<div id="body">
		<p> <center><b> List of Employee </b></center> </p>
	
<br>

<?php

echo form_open('deleteUser/delete', array('nam' => 'myfor'));

echo "<center>";
echo "<table border = '1' cellpadding = '10' cellspacing = '2'><tr><th>Id</th><th>Name</th><th>Email</th><th>Address</th><th>Action</th></tr>";

foreach($records as $rec){
echo "<tr><td>";
	
	
echo $rec->E_Id;
echo "</td>";
echo "<td>";
echo $rec->E_FullName;
echo "</td>";
echo "<td>";
echo $rec->E_Email;
echo "</td>";
echo "<td>";
echo $rec->E_Address;
echo "</td>";
echo "<td>";
echo '<input type="submit" name = "delete" value = "Delete"/>';
echo "</td>";
echo "</tr>";

}

echo "</table></center>";

?>

	</div>

	<p class="footer"><center>Copyright 2013 by<b> Junior Programmer</b></center></p>
</div>
<?php 
    
    echo form_close(); ?>
</body>
</html>