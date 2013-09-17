<html>
	<head>
		<title>Login Page</title>
		
		<link rel="stylesheet" href="../css/login_css/style.css" type="text/css"/>
		
		<script type="text/javascript">
					var req=['txt_username','txt_password']

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
		<div id="header">Leave Application System
	
			<div id="container">
			
				<form action="ValidateLogin" method="post" onsubmit="return Valid(this)">
   				
   					<div class="login">Login Page</div>
					<div class="username-text">Username :</div>
					<div class="password-text">Password :</div>
					
					<div class="username-field">
						<input type="text" name="txt_username" value="" />
					</div>
					
					<div class="password-field">
						<input type="password" name="txt_password" value="" />
					</div>
					
					<div class="usertype-text">User Type :
						<input type="radio" name="rb_usertype" value="2" checked>User
						<input type="radio" name="rb_usertype" value="1">Administrator
					</div>
					
					<input type="submit" id="submit" name="submit" value="GO"/>
					
				</form>
				
			</div>
			
			<div id="footer">
				This Website Is Powered By<b> CodeIgniter </b>
			</div>
			
		</div>
	</body>
	
</html>