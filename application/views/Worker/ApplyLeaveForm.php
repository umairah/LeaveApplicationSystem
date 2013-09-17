<html>
	<head>
		<title>Apply Leave</title>
		
		<script type="text/javascript" src="../css/calenderPicker/firebug.js"></script>
		<script type="text/javascript" src="../css/calenderPicker/jquery.min.js"></script>
		<script type="text/javascript" src="../css/calenderPicker/date.js"></script>
		<script type="text/javascript" src="../css/calenderPicker/jquery.datePicker.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../css/calenderPicker/dateIcon.css">
		<link rel="stylesheet" type="text/css" media="screen" href="../css/calenderPicker/datePicker.css">

		<script type="text/javascript">
			$(function()
				{
					$('.date-pick').datePicker({autoFocusNextInput: true});
	 			});
		</script>
				
		<script type="text/javascript">
					var req=['txt_start_date','txt_end_date']

					function Valid(verify)
					{
						var i = 0, check

					    while(check = verify[req [i++]])
						{
							if(check.value == '')
							{
								alert('Start date and End date field cannot be blank!')
								check.focus();
								return false
							}

							var date1 = Date.parse(document.form.txt_start_date.value);
			            	var date2 = Date.parse(document.form.txt_end_date.value);
							
							if (date1 > date2) 
							{
								alert('Start date cannot exceed the End date.');
								return false
					       	}

							var one_day = 24*60*60*1000;
							var date_total1 = new Date(date1);
							var date_total2 = new Date(date2);

							var total_days = (Math.round(Math.abs((date_total1.getTime() - date_total2.getTime())/(one_day))))+1;

							var slt_check_category = document.getElementById("slt_category_type");
							var str_max_days = slt_check_category.options[slt_check_category.selectedIndex].id;
							
							if (total_days > str_max_days)
							{
								alert('Your total days of application is ' +total_days+ ' days which is more than maximum days for that category that is ' +str_max_days+ ' days.');
								return false
							}
						}
					}
		</script>		
 	</head>
 	
 	<body>
   		<h1>Apply Leave</h1>
   		   		
   		<p>
   			<a href="GetWorkerProfile">View Profile</a></br>
   			<a href="UpdateWorker">Update Profile</a></br>
   			<a href="ApplyLeave">Apply Leave</a></br>
   			<a href="CheckLeave">Check Application Status</a></br></br>
   			<a href="Logout">Logout</a>
   		</p>
   		
   		</br>
   		
   		<p align="center"><b>Please Fill Out All The Required Information</b></p>
   		
   		</br>
   		
   		<p>
   			<form name="form" id="form" action="ApplyLeave/InsertLeaveDatabase" method="post" onsubmit="return Valid(this)">
   				<table border="0" cellspacing="0" cellpadding="8"  align="center" >
   					<tbody>
   						<tr align ="center">
   							<th bgcolor="grey" colspan = "2">Leave Application Form</th>
   						</tr>
   						<tr>
   							<td>Type / Category</td>
   							<td>: 
   								<select name="slt_category_type" id="slt_category_type">
								<?php foreach($category as $each) { ?>
    								<option id="<?=$each['C_MaxDay']?>" value="<?=$each['C_Name']?>"><?=$each['C_Name']?></option>
    							<?php } ?>
								</select>
   							</td>
   						<tr>
   						</tr>
   						</tr>
   						<tr>
   							<td>Start Date</td>
   							<td>: <input readonly="readonly" name="txt_start_date" id="txt_start_date" class="date-pick" />
                        	</td>		
   						</tr>
   						<tr>
   							<td>End Date</td>
   							<td>: <input readonly="readonly" name="txt_end_date" id="txt_end_date" class="date-pick" />
                        	</td>				
   						</tr>
   						<tr>
   							<td>Remark</td>
   							<td>: <textarea name="txa_remark" rows="7" cols="30"></textarea></td>
   						</tr>
   						<tr align ="center">
   							<td bgcolor="grey" colspan = "2" align>
   								<input type="reset" id="reset" name="reset" value="Reset" />
                				<input type="submit" id="submit" name="submit" value="Submit Application" />
   							</td>
   						</tr>
   					</tbody>
   				</table>
			</form>
   		</p>
   		
   		</br></br>
   		
   		<p>
   			<table border="1" cellspacing="0" cellpadding="8"  align="center" >
   				<tbody align ="center">
   					<tr>
   						<th bgcolor="grey" colspan = "2">Leave Category Type</th>
   					</tr>
   					<tr>
   						<td>Category</td>
   						<td>Maximum Days</td>
   					</tr>
   					<?php foreach($category as $view) { ?>
   					<tr>
    					<td><?=$view['C_Name']?></td>
    					<td><?=$view['C_MaxDay']?> Days</td>
    				</tr>
    				<?php } ?>
    				<tr>
   						<td bgcolor="grey" colspan = "2" align></td>
   					</tr>
   				</tbody>
   			</table>
   		</p>

      	</br></br>
   		
   		<p>Footer</p>
 	</body>
</html>