<?php



function nb_pour($id_petition)
{
	include 'cnx.php' ; 
    $req= mysqli_query($link, "select count(*) as nb from action where type ='yes' and id_petition ='$id_petition' ;  "); 
	$res= mysqli_fetch_array($req);
    $nb = $res['nb'] ; 

    return $nb;
}

function nb_contre($id_petition)
{
	include 'cnx.php' ; 
    $req= mysqli_query($link, "select count(*) as nb from action where type ='no' and id_petition ='$id_petition'  ;  "); 
	$res= mysqli_fetch_array($req);
    $nb = $res['nb'] ; 

    return $nb;
}

function nb_membre_ctaegory($statut)
{
	include 'cnx.php' ; 
    $req= mysqli_query($link, "select count(*) as nb from membre where statut ='$statut' ;  "); 
	$res= mysqli_fetch_array($req);
    $nb = $res['nb'] ; 

    return $nb;
}

function nb_participants($id_petition)
{
	include 'cnx.php' ; 
    $req= mysqli_query($link, "select count(*) as nb from action where id_petition ='$id_petition'  ;  "); 
	$res= mysqli_fetch_array($req);
    $nb = $res['nb'] ; 

    return $nb;
}

function get_statutDuPetition($id_petition)
{
	include'cnx.php';
    $req  = mysqli_query($link , "select * from petition where id ='$id_petition' ;  ");
    $res = mysqli_fetch_array($req) ; 
    $id_membre = $res['id_membre'] ; 

    $req2 = mysqli_query($link , "select statut from membre where id ='$id_membre' ;  ") ; 
    $statut = mysqli_fetch_array($req2) ; 
    return $statut ; 
}

function get_listePetByStatut($statut)
{
	include'cnx.php';
	$req = mysqli_query($link , "select * from petition where id_membre in (select id from membre where statut = '$statut') ; ") ; 
	$res = mysqli_fetch_array($req);

	return $res ; 
}

function get_lastPetition()
{
	include'cnx.php';
	$req = mysqli_query($link , "select * from petition ; ") ; 
	$id_petition =0  ; 
	while ($res= mysqli_fetch_array($req)) {
		$id_petition = $res['id'] ; 
	}
	return $id_petition ; 
}

function dejaComent($id_petition , $id_membre)
{
	include 'cnx.php' ; 
	$req = mysqli_query($link , "select id  from commenatire where id_membre ='$id_membre' and id_petition='$id_petition' ") ; 
	$yes = 0;
	if ($req) 
	{
	if ( $res= mysqli_fetch_array($req) )
		$yes = $res['id'] ; 
}
	return $yes;
}

function dejaAction($id_petition , $id_membre)
{
	include 'cnx.php' ; 
	$req = mysqli_query($link , "select *  from action where id_membre ='$id_membre' and id_petition='$id_petition' ") ; 
	$yes = "" ; 
	if ( $res= mysqli_fetch_array($req))
		$yes = $res['type'] ; 
	return $yes;
}


function yes($id_petition , $id_membre)
{
	include 'cnx.php' ; 
	$yes = 1 ; 
	if(dejaAction($id_petition , $id_membre)== "" )
			$req  = mysqli_query($link , "insert into action (id_membre , id_petition , type) values ('$id_membre' , '$id_petition' , 'yes') ")  ; 
		else 
			$yes = 1 ; 

	return $yes ; 
}

function no($id_petition , $id_membre)
{
	include 'cnx.php' ;
	$yes = 1 ; 
	if(dejaAction($id_petition , $id_membre)== "") 
			$req  = mysqli_query($link , "insert into action (id_membre , id_petition , type) values ('$id_membre' , '$id_petition' , 'no') ")  ; 
			else 
			$yes = 1 ; 
	return $yes ; 
}

function membreDePetition($id_petition)
{
	include 'cnx.php' ; 
	$req = mysqli_query($link , "select * from membre where id =(select id_membre from petition where id ='$id_petition') ") ; 
	$res = mysqli_fetch_array($req) ; 
	return $res ;
}

function getPetition($id_petition)
{
	include 'cnx.php' ; 
	$req = mysqli_query($link , "select * from  petition where id ='$id_petition' ") ; 
	$res = mysqli_fetch_array($req) ; 
	return $res ;
}

