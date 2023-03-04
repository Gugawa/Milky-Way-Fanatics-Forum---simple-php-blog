	<form action="news.php" method="post">
	Nazwa newsa: <input type="text" name="temat"><br>
	Treść newsa: <textarea name="tresc"></textarea> <br>
	<input type="submit" name='news' value="Dodaj newsa">
	</form>

<?php

require 'common.php';
	if(isset($_POST['news'])) {
					
	$temat=$_POST["temat"];
	$tresc=$_POST["tresc"];
					
	$connect= polacz();
	if(mysqli_connect_errno()==0){
		if ($temat=='' || $tresc==''){
			echo "Brak tematu albo brak tresci :C";
		}
		else{
		$connect->query("INSERT INTO news VALUES('', '$temat', '$tresc')");
		}
	}




}
?>