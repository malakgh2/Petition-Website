<?php session_start(); 
include 'functions.php';

if(isset($_POST['btn']))
{
	$btn = $_POST['btn'] ; 
if ($btn == 'YES')
	{if(yes($_POST['id_petition'] , $_SESSION['id']) == 0) 
  			header("location:espace_membre.php") ;
  		else 
  			echo "vous avez fait une action sur cette petition deja ! " ;  
  	} 
else
{
if(no($_POST['id_petition'] , $_SESSION['id'])== 0) 
  header("location:espace_membre.php") ;
  else 
  
	{

$alert = "<script>alert('vous avez fait une action sur cette petition deja !') ;</script>";
echo $alert;
}
}
}
 ?>