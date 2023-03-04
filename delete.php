<?php
require 'common.php';

$connect= polacz();
if(mysqli_connect_errno()==0)
{
	$delete=$_POST["delete"];
	$connect->query("DELETE FROM `news` WHERE `id` = $delete");	
	echo "Post usunięty przejdz do strony glownej -> <a href='mainpage.php'>KLIK</a>";
	}
?>