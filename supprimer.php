<?php
include 'cnx.php'  ; 
if(isset($_POST['id']))
{

	$id = $_POST['id'] ; 
	$req = mysqli_query($link ,"delete from petition where id = '$id' ; ") ; 
	if($req)
	{
		header("location:espace_admin.php");
	}
	else
		echo "erooor de suppression";
}
else
echo "champs manquant";