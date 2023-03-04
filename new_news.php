	<form action="new_news.php" method="post">
	Nowa nazwa newsa: <input type="text" name="temat"><br>
	Nowa treść newsa: <textarea name="tresc"></textarea> <br>
	
	<?php
	echo '<input type="hidden" name="new_news" value="'.$_POST["new_news"].'">';
	?>
	
	<input type="submit" name='news' value="Dodaj newsa">
	</form>

<?php
require 'common.php';
if(isset($_POST['news'])){
	
	$new_news=$_POST["new_news"];
	$temat=$_POST["temat"];
	$tresc=$_POST["tresc"];
	
	$connect= polacz();
	if(mysqli_connect_errno()==0)
	{
	 $result=$connect->query("UPDATE `news` SET `temat` = '$temat', `tresc` = '$tresc' WHERE `id` = $new_news");
	}
}
?>