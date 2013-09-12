<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Leave Application System</title>

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

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #01030B;
		background-color: transparent;
		border-bottom: 2px solid #D0D0D0;
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
		font-size: 14px;
		border-top: 2px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 2px solid #1083C5;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<marquee>Welcome to Leave Application System!</marquee>
<br><br>
<div id="container">
	<h1>Category of Leave</h1>

	<div id="body">

		<p>
			<ol>
			<li>Emergency leave.</li>
			<li>Maternity leave.</li>
			<li>Annual Leave.</li>
		
			</ol>
			
			<form >
			ID Category: <input type="text" name="id" value=""><br>
			Name Category: <input type="text" name="category" value=""><br>
			<input type="submit" value="Submit" onclick="JavaScript:alert('Do you want to add type of category?')"/>
			<input type="submit" value="edit" onclick="JavaScript:alert('Do you want to edit type of category?')"/>
			<input type="submit" value="delete" onclick="JavaScript:alert('Are you sure to delete the type of category?')"/>
			</form>
			
		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
