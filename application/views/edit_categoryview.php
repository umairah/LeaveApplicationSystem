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
<center><font size = '6'>
<br><br>List of Category</br>
<table border = '5' cellspacing = '3' cellpadding = '5'>
<tr><br><br><th>Category ID</th><th>Category Name</th><th>Remarks</th></tr>
<?php 
foreach($records as $rec): ?>

<tr><td align = 'center'>
	

<?php echo $rec->C_ID; ?> 
</td>
<td>
<input type="text" name="categoryname" value=<?php echo $rec->C_Name; ?> disabled="true">
</td>
<td align = 'center'>
<a href = "edit_categoryLeave/UpdateCategory/<?php echo $rec->C_ID; ?>">Edit</a>
&nbsp;&nbsp;&nbsp;
<a href = "edit_categoryLeave/delete/<?php echo $rec->C_ID; ?>">Delete</a>
</td>
</tr>

<?php endforeach; ?>

</table>


<br>


<div id="footer">
				<p class="footer">Copyright 2013 by<b> Junior Programmer</b></p>
			</div>
			
</body>
</html>
</body>
</html>
