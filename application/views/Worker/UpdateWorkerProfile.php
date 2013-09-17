<html>
	<head>
		<title>Update Worker Profile</title>
		
		<script type="text/javascript">
					var req=['update_password','update_fullname', 'update_address', 'update_phone', 'update_email', 'update_position']

					function Valid(blank_space)
					{
						var i = 0, check

					    while(check = blank_space[req [i++]])
						{
							if(check.value == '')
							{
								alert('All fields are required!')
								check.focus();
								return false
							}
						}
					}
		</script>
 	</head>
 	
 	<body>
   		<h1>Update Worker Profile</h1>
   		
   		<p>
   			<a href="GetWorkerProfile">View Profile</a></br>
   			<a href="UpdateWorker">Update Profile</a></br>
   			<a href="ApplyLeave">Apply Leave</a></br>
   			<a href="CheckLeave">Check Application Status</a></br></br>
   			<a href="Logout">Logout</a>
   		</p>
   		
   		</br>
   		
   		<p align="center"><b>Please Fill Out All The Required Information</b></p>
   		
   		<p align="center"><b>Only change your desired field.</br>Ignore any field that you do not want to change.</b></p>
   		
   		</br>
   		
   		<p>
   			<form action="UpdateWorker/UpdateWorkerDatabase" method="post" onsubmit="return Valid(this)">
   				<table border="0" cellspacing="0" cellpadding="8"  align="center" >
   					<tbody>
   						<tr align ="center">
   							<th bgcolor="grey" colspan = "2" align>Update Worker Profile</th>
   						</tr>
   							<?php foreach($worker_update as $view): ?>	
   						<tr>
   							<td>Username</td>
    						<td>: <?php echo $view->E_Username; ?></td>
   						</tr>
   						<tr>
   							<td>Password</td>
   							<td>: <input type="password" name="txt_update_password" value="<?php echo $view->E_Password;?>" size="30" /></td>
   						</tr>
   						<tr>
   							<td>Full Name</td>
   							<td>: <input type="text" name="txt_update_fullname" value="<?php echo $view->E_FullName;?>" size="30" /></td>
   						</tr>
   						<tr>
   							<td>Home Address</td>
   							<td>: <textarea name="txa_update_address" rows="7" cols="35"><?php echo $view->E_Address; ?></textarea></td>
   						</tr>
   						<tr>
   							<td>Phone Number</td>
   							<td>: <input type="text" name="txt_update_phone" value="<?php echo $view->E_Phone;?>" size="30" /></td>
   						</tr>
   						<tr>
   							<td>Email</td>
   							<td>: <input type="text" name="txt_update_email" value="<?php echo $view->E_Email;?>" size="30" /></td>
   						</tr>
   						<tr>
   							<td>Position</td>
   							<td>: <input type="text" name="txt_update_position" value="<?php echo $view->E_Position;?>" size="30" /></td>						
   						</tr>
   						<?php endforeach; ?>
   						<tr align ="center">
   							<td bgcolor="grey" colspan = "2" align>
                				<input type="submit" id="submit" name="submit" value="Update" />
   							</td>
   						</tr>
   					</tbody>
   				</table>
			</form>
   		<p>

      	</br>
      	
   		<p>Footer</p>
 	</body>
</html>