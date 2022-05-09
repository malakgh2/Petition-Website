<?php
session_start();
include 'cnx.php' ; 


if(isset($_POST['mail']) && isset($_POST['mdp']))
{
	$mail = $_POST['mail'] ; 
	$mdp = $_POST['mdp'] ; 

	if( ($mail == 'admin@gmail.com') && ($mdp == 'admin') )
		header("location:espace_admin.php");
	else
	{
	$req=mysqli_query($link,"select mdp , id from membre where mail = '$mail '; ") ; 
	
	$res = mysqli_fetch_array($req) ; 



	if($res['mdp'])
	{
		if($mdp == $res['mdp'])
		{
			header("location:espace_membre.php");
			$_SESSION['id'] = $res['id'] ; 
		}
		else
			{

$alert = "<script>alert('Verifier Vos Données') ;</script>";
echo $alert;
}
	}
	else 
		{

$alert = "<script>alert('error requete') ;</script>";
echo $alert;
}
	}

}
else
echo " eroooooooooor  champ";