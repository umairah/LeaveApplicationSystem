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
   		<h1>Welcome <?php echo "$username"?> !</h1>
   		<br><br><br><br>
   		<center>
   		<form action="AdminViewCon/redirect">
        <input type="submit"  name="submit" value="   Category   "></form>
        <form action="AdminViewCon/redirect">
        <input type="submit"  name="submit" value="   View Applicant  "></form>
        <form action="AdminViewCon/redirect">
        <input type="submit"  name="submit" value="   Add User Account   "></form>
   		<form action="AdminViewCon/redirect">
        <input type="submit"  name="submit" value="   Approval   "></form>
        <form action="AdminViewCon/redirect">
        <input type="submit"  name="submit" value="   Logout   "></form>
        </center>
   		<br><br><br><br>
   		<div id="footer">
				<p class="footer">Copyright 2013 by<b> Junior Programmer</b></p>
			</div>
 	</body>
</html>

