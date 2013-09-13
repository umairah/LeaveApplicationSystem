<html>
	<head>
		<title>Login Page</title>
		
		<link rel="stylesheet" href="../css/login_css/style.css" type="text/css"/>
		
		<script type="text/javascript">
					var req=['username','password']

					function valid(f){
					var i=0, t
					while(t=f[req[i++]]){
						if(t.value==''){
							alert('All fields are required!')
							t.focus();return false
							}
						}
					}
		</script>
	</head>
	
	<body>
		<div id="header">Leave Application System
	
			<div id="container">
			
				<form action="validate_login" method="post" onsubmit="return valid(this)">
   				
   					<div class="login">Login Page</div>
					<div class="username-text">Username :</div>
					<div class="password-text">Password :</div>
					
					<div class="username-field">
						<input type="text" name="username" value="" />
					</div>
					
					<div class="password-field">
						<input type="password" name="password" value="" />
					</div>
					
					<div class="usertype-text">User Type :
					
						<input type="radio" name="usertype" value="2" checked>User
						<input type="radio" name="usertype" value="1">Administrator
					</div>
					
					<input type="submit" name="submit" value="GO"/>
					
				</form>
				
			</div>
			
			<div id="footer">
				<p class="footer">Copyright 2013 by<b> Junior Programmer</b></p>
			</div>
			
		</div>
	</body>
	
</html>