<!DOCTYPE html>
<html>
<head>
	<title>MCV Framework</title>
</head>
<body style="margin:auto; text-align:center;">
	<form method="POST">
		<div style="color:#ff0000;"><?=isset($error)?$error:'';?></div>
		<div><label>Username: </label></div>
		<div><input type="text" name="username" /></div>
		<div><label>Password: </label></div>
		<div><input type="password" name="password" /></div>
		<div><button type="submit">Login</button></div>
	</form>
</body>
</html>