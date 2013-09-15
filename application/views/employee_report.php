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
echo "<br><br><br>Details of Applicant</br>";
echo "<table border = '5' cellspacing = '3' cellpadding = '3'>
<tr><br></br><th>Type Leave</th><th>Applicant Name</th><th>Start Date</th><th>End Date</th><th>Remark</th><th>Status</th></tr>";

foreach($records as $rec){
 

	echo "<tr><td align = 'center'>";
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

<div id="footer">
				<p class="footer">Copyright 2013 by<b> Junior Programmer</b></p>
			</div>
			
</body>
</html>