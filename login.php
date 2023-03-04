<?php
session_start();

require 'common.php';

	$login=$_POST["login"];
	$password=$_POST["password"];
	
	$connect= polacz();
	if(mysqli_connect_errno()==0)
	{
	 $result=$connect->query("SELECT * From uzytkownik WHERE login='$login' AND password='$password'");
		if ($result->num_rows >0 ){
			$_SESSION["login"]=$login;
			echo "Przejdz do strony glownej -> <a href='mainpage.php'>KLIK</a>";
		}
		else{
			echo "Nie poprawne login lub haslo";
		}
		
	}else{
		echo "Brak polaczenia z baza";
	}
?>