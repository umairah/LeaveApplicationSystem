<html>
	<head>
		<title>Check Application Status</title>
 	</head>
 	
 	<body>
   		<h1>Check Application Status</h1>
   		
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
   					<tr align="center">
   						<th bgcolor="grey" colspan = "6" align>Application Status</th>
   					</tr>
   					<tr align="center">
   						<td>Category</td>
   						<td>Start Date</td>
   						<td>End Date</td>
   						<td>Remark</td>
   						<td>Status</td>
   						<td>Date Apply</td>
   					</tr>
   					<?php foreach($leave_data as $each) { ?>
   					<tr>
    					<td><?=$each['Type']?></td>
    					<td><?=$each['Start_date']?></td>
    					<td><?=$each['End_date']?></td>
    					<td><?=$each['Remark']?></td>
    					<td><?=$each['Status']?></td>
    					<td><?=$each['Date_apply']?></td>
    				</tr>
    				<?php } ?>
    				<tr>
   						<td bgcolor="grey" colspan = "6" align></td>
   					</tr>
   				</tbody>
   			</table>
   		<p>
   		
   		</br></br>
   		
   		<p>Footer</p>
 	</body>

</html>

