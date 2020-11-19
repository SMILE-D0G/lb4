<html> 
<head><title>lb4</title></head>
<body>
  <form method='post'>
  <?php
  echo "Введите логин и пароль:"
  ?>
  <p>Логин: <input type="text" name="username" required></p>
  <p>Пароль: <input type="password" name="password" required></p>
  <button type="submit" name="submit">Войти</button></p>
  </form> 
  <?php
  if (isset($_POST['submit'])){
  $login = implode(file ("login.txt"));
  $password = implode(file ("password.txt"));
  
  if (strcmp ($login, $_POST['username']) == 0)
	{
	if (strcmp ($password, $_POST['password']) == 0){
	echo 'Вы залогинены';}
	else echo 'Неверный логин или пароль'; 
	}
	else echo 'Неверный логин или пароль';  
  }
  ?>  
</body>
</html> 
