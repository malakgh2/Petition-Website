<?php
include 'cnx.php';
// la page d'insertion , executer lors de lajout d'u, membre 
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp1']) && isset($_POST['mdp2']) && isset($_POST['statut']))
{
	$nom =$_POST['nom'] ; 
	$prenom =$_POST['prenom'] ; 
	$mail =$_POST['mail'] ; 
	$mdp1=$_POST['mdp1'] ; 
	$mdp2=$_POST['mdp2'] ; 
	$statut=$_POST['statut'] ; 

	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'] ; 

	if(move_uploaded_file($_FILES['image']['tmp_name'],  $target))
	{
		echo "nice";
	}
	else 
		echo "mch nice" ; 

	if($mdp2 == $mdp1)
	{
		$req=mysqli_query( $link , "insert into membre (nom,prenom , mail , mdp , statut , image) values ('$nom' , '$prenom' , '$mail' , '$mdp1' , '$statut' ,'$image'); ") ; 
		$test = move_uploaded_file($_FILES['name']['tmp_name'], $target);
		if($test)
			echo "success upload" ;
		else 
			echo "no upload ya baba" ; 
		if($req)
		{
			header("location:connection.html");
		}
		else
			{

$alert = "<script>alert('probleme dans la requete') ;</script>";
echo $alert;
}
	}
	else
		//die("verifier votre mot de passe") ; 

{

$alert = "<script>alert('verifier le meme mot de passe') ;</script>";
echo $alert;
}
}
else
echo "eroooor champ mnq";