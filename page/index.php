<?php ?>
<html>
<head>
<title> Administrator </title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
	<h2> Welcome to ZAFARI </h2>
	<div id="header">
		<div id="content">
			<h1>Login</h1>
			<form method="POST" action="cek_login.php">
			<table>
				<tr><td>Username</td><td> : <input type="text" placeholder="Username .." name="username" required/></tr>
                <div style="margin-top:10px;"></div>
				<tr><td>Password</td><td> : <input type="password" placeholder="Password .." name="password" required/></tr>
				
                <tr><td colspan="2"><input type="submit" value="Login"> </td></tr>
                
			</table>
			</form>
		</div>
		<div id="footer"> Copyright &copy; TEKNOKRAT Proc </div>
	</div>
	</center>
</body>
</html>