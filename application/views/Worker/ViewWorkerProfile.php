<html>
	<head>
		<title>View Worker Profile</title>
 	</head>
 	
 	<body>
   		<h1>View Worker Profile</h1>
   		   		
   		<p>
   			<a href="GetWorkerProfile">View Profile</a></br>
   			<a href="UpdateWorker">Update Profile</a></br>
   			<a href="ApplyLeave">Apply Leave</a></br>
   			<a href="CheckLeave">Check Application Status</a></br></br>
   			<a href="Logout">Logout</a>
   		</p>
   		
   		</br>
   		
   		<p>
   			<table border="0" cellspacing="0" cellpadding="8"  align="center" >
   				<tbody>
   					<tr align ="center">
   						<th bgcolor="grey" colspan = "2" align>Worker Profile</th>
   					</tr>
   					<?php foreach($worker_data as $view): ?>
   					<tr>
   						<td>Username</td>
    					<td>: <?php echo $view->E_Username; ?></td>
   					</tr>
   					<tr>
   						<td>Password</td>
   						<td>: <?php echo $view->E_Password; ?></td>
   					</tr>
   					<tr>
   						<td>Full Name</td>
   						<td>: <?php echo $view->E_FullName; ?></td>
   					</tr>
   					<tr>
   						<td>Home Address</td>
   						<td>: <?php echo $view->E_Address; ?></td>
   					</tr>
   					<tr>
   						<td>Phone Number</td>
   						<td>: <?php echo $view->E_Phone; ?></td>
   					</tr>
   					<tr>
   						<td>Email</td>
   						<td>: <?php echo $view->E_Email; ?></td>
   					</tr>
   					<tr>
   						<td>Position</td>
   						<td>: <?php echo $view->E_Position; ?></td>
   					</tr>
   					<tr align ="center">
   							<td bgcolor="grey" colspan = "2" align>
   								<form action="UpdateWorker">
                				<input type="submit" id="submit" name="submit" value="Update Profile" />
                				</form>
   							</td>
   						</tr>
   					<?php endforeach; ?>
   				</tbody>
   			</table>
   		<p>

      	</br></br>
      	
   		<p>Footer</p>
 	</body>
</html>
