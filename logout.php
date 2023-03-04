<?php
session_start();
session_unset();
session_destroy();
echo "wylogowales sie<br>";
echo '<a href="mainpage.php">Przejdz do strony glownej</a>';
?>