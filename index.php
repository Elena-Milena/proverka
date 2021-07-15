<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Регистрация пользователей</h2>
<form method="POST">
	<input type="email" name="login" placeholder="Логин" required ><br>
	<input type="password" name="pass" placeholder="Пароль" pattern="^[a-zA-Z0-9]+$" minlength="6" required ><br>
	<input type="submit" name="reg_user" value="Регистрация">
</form>

<style type="text/css">
	div
	{
		width: 100px;
		min-height: 100px;
		background-color: pink;
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
		flex-direction: column;
	}


</style>


</body>
</html>