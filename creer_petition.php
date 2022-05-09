<?php
session_start(); 
include 'cnx.php' ; 
include 'functions.php' ; 
if(isset($_POST['titre']) && isset($_POST['desc']) )
{
		$titre = $_POST['titre'] ; 
		$desc = $_POST['desc'];
		$id = $_SESSION['id'] ; 
		$date = date('y-m-d');

		$req = mysqli_query($link , "insert into petition (titre , objet , depot , id_membre) values ('$titre' , '$desc' ,'$date' ,'$id') ;  ") ; 
		$id_petition = get_lastPetition() ; 
		$req2  = mysqli_query($link , "insert into action (id_membre , id_petition , type) values ('$id' , '$id_petition' , 'yes') ")  ; 
		if($req && $req2)
		{
			header("location:espace_membre.php");
		}
		else
			{

$alert = "<script>alert('probleme requete') ;</script>";
echo $alert;
}
}
else 
echo "pas de donee ee ee ee ";