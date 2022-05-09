<?php
 session_start(); 
include 'cnx.php' ; 
if(isset($_POST['new_nom']) && isset($_POST['new_prenom'])&& isset($_POST['new_mail'])  && isset($_POST['new_statut']))
{
	$new_nom = $_POST['new_nom'] ; 
	$new_prenom = $_POST['new_prenom'] ; 
	$new_mail = $_POST['new_mail'] ; 
	$new_statut = $_POST['new_statut'] ; 
	$new_mdp = $_POST['new_mdp'] ;
	$id =$_SESSION['id'] ; 
	$req = mysqli_query($link , "update membre set nom ='$new_nom' , prenom = '$new_prenom' , mail='$new_mail' , statut = '$new_statut' , mdp = '$new_mdp' where id ='$id' ") ; 

	header("location:espace_membre.php");

}
else
echo "errr no new data!!";