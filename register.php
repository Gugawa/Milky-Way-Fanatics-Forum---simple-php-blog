<html>
<head>
</head>
<body>
	<h2>Rejestracja</h2>
	<form action="register.php" method="post">
	Podaj login: <input type="text" name="login"><br>
	Podaj haslo: <input type="password" name="password"><br>
	Ile to jest 2*3? <input type="number" name="number"><br>
	<input type="submit" name='register' value="Zarejestruj sie">
	</form>
</body>
</html>

<?php
require 'common.php';
if(isset($_POST['register'])) {
	$login=$_POST["login"];
	$password=$_POST["password"];
	$number=$_POST["number"];
	
	$connect = polacz();
	if(mysqli_connect_errno()==0)
	{
		if ($number==6){
			$connect->query("INSERT INTO uzytkownik VALUES('', '$login', '$password')");
		
		echo "Zarejestrowany<br>";
		echo "Przejdz do strony glownej -> <a href='mainpage.php'>KLIK</a>";
		}
		else{
		echo "Zła odpowiedź na pytanie anty-botowe";
		}
		
	}else{
		echo "Brak polaczenia z baza";
	}
}
	


?>