<?php 
		session_start();
		include 'cnx.php';
		include 'functions.php' ; 
		$id_membre = $_SESSION['id'] ;
		$id_petition = $_POST['id_petition'] ; 
		$content = $_POST['comment'] ; 


		if(dejaComent($id_petition , $id_membre)==0)
		{
			$req = mysqli_query($link , "insert into commentaire (id_petition , id_membre , content) values ('$id_petition' , '$id_membre' , '$content') ");
			header("location:espace_membre.php");
			
		}
		else 
			//echo "" ; 
		{

$alert = "<script>alert('vous avez deja ajouté un commentaire pour cette petition') ;</script>";
echo $alert;
}