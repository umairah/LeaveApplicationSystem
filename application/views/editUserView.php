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
	<h1>Add User Details </h1>

<br>	
	<div id="body">
	
<?php 

    echo form_open('editUser/save', array('name' => 'myform'));
    ?>
      
		<b>
		 <table border='0'>
	<tr>
		<td align='left'> Username</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="username" size="70" > </input> </td>
		
	</tr>
	<tr>
		<td align='left'> Password</td>
		<td align='left'> :</td>
		<td align='left'> <input type="password" name="password" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> Full Name</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="fullname" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> Address</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="address" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> Phone Number</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="phone" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> Email</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="email" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> Position</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="position" size="70" > </input></td>
		
	</tr>
	<tr>
		<td align='left'> User Type</td>
		<td align='left'> :</td>
		<td align='left'> <input type="text" name="usertype" size="70" > </input></td>
		
	</tr>
	
</table>	
</b>
<br>

 <input type="submit"  name="submit" value="Add" onClick="alert('Data has been saved')"></input>
 <input type="reset"  value="Reset"/></input>
 <input type="submit"  name="submit" value="Back" onClick=""></input>
	
	</div>
	<p class="footer"><center>Copyright 2013 by<b> Junior Programmer</b></center></p>
</div>
<?php 
    
    echo form_close(); ?>
</body>
</html>
