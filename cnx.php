<?php

// la page qui assure la connection avec la base de données


$user = 'root' ; 
$mdp ='' ; 
$db = 'pweb' ; 
$server = 'localhost' ; 

$link = mysqli_connect($server , $user , $mdp , $db) ; 
if($link)
{

} 
else
{
	die(mysqli_connect_error());
}

