<!DOCTYPE HTML>
<html>
<head>

<link rel='stylesheet' href='styl.css'>

<title>Forum Fanatyków Drogi Mlecznej</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="pl">
<meta name="author" content="Daniel Zwijacz">

</head>
<body>
<div class="main">
	<table style="text-align: center; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr id="cell1">
			<td style="font-size: 50px;">Forum Fanatyków Drogi Mlecznej</td>
		</tr>
	<tbody>
	</table>
	
<?php
session_start();
	require 'common.php';
	$connect= polacz();
	$result = $connect->query("SELECT * FROM `news`");
	while ($row = $result->fetch_assoc()){
	echo '<div class="news">';
	
	
	echo '<form action="delete.php"  method="post"><br>';
	echo '<input type="hidden" name="delete" value="'.$row["id"].'">';
	echo '<input type="submit" value="Usun newsa">';
	echo '</form>';
	
	echo '<form action="new_news.php"  method="post"><br>';
	echo '<input type="hidden" name="new_news" value="'.$row["id"].'">';
	echo '<input type="submit" value="Edytuj newsa">';
	echo '</form>';
	
	
	echo '<div class="topic">'.$row["temat"].'</div>';
	echo '<p style="font-size: 150px; color: white;">'.$row["tresc"].'</p>';
	echo '</div>';
	}
	
?>	
</div>

<div class="bok1">
<br><br>
<?php

if (isset($_SESSION["login"])){

	
	echo '<form action="news.php"><br><br>';
	echo '<input type="submit" value="Dodaj news">';
	echo '</form>';

	echo '<form action="logout.php"><br><br>';
	echo '<input type="submit" value="Wyloguj się">';
	echo '</form>';
}	else {
	echo '<form action="login.php" method="post">';
	echo '<input type="text" name="login" placeholder="Login">';
	echo '<input type="password" name="password" placeholder="Password"><br><br>';
	echo '<input type="submit" value="Loguj">';
	echo '</form><br><br>';
	echo '<form action="register.php"><br><br>';
	echo '<input type="submit" value="Zarejestruj się">';
	echo '</div>';
	echo '</form>';
}
?>

<div class="bok2">
</div>
</body>
</html>