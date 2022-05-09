<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style >
		
body{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	background-color: #9f8d99;
	color: #ffffff;
}
h1{
	font-size: 3em;
	margin-top: 50px;
	margin-bottom: 15px; 
}
.round{
	width: 7em;
    height: 7em;
    margin-bottom: -10px;
}
.card-container {
	display: flex;
	justify-content: space-around;
	align-items: center;
    margin: 10px ; 
    background-color: #dc1d53;
    border-radius: 10px;
    box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
    color: #322025;
    padding: 15px;
    position: relative;
    width: 96%;
    max-width: 100%;
    text-align: center;
    height: 15em;
}

.card-container .pro {
    color: #231E39;
    background-color: #FEBB0B;
    border-radius: 3px;
    font-size: 14px;
    font-weight: bold;
    padding: 3px 7px;
    position: absolute;
    top: 11px;
    left: 10px;
    text-transform: uppercase;
    margin: 3px ; 
}

.card-container .round {
    border: 1px solid #9f8d99;
    border-radius: 50%;
    padding: 7px;
    
}


table.minimalistBlack {
 
  
  text-align: center;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border-bottom: 1px solid #DACDFF;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 14px;
  color: #464646;
}

table.minimalistBlack thead {
  
 
  border-bottom: 3px solid #ffffff;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #ffffff;
  text-align: center;
}

.listes{

	display: flex;
	justify-content: space-around;
	
	align-items: center;
}
.pour , .contre {
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
	margin: 30px ; 
}




.nav {
  height: 50px;
  width: 100%;
  background-color: #4d4d4d;
  position: relative;
  padding-right:  60px ; 
  padding-left:   60px ; 
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}

    </style>
</head>
<body>

    <div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      SM
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.html" target="_blank">Log Out</a>
   <a href="espace_membre.php" target="_blank">Profile</a>
  </div>
</div>



<section class="card-container">

				<?php 
				include  'cnx.php'; 
				include 'functions.php'; 
				if(isset($_POST['id_petition']))
						{
					$id_petition = $_POST['id_petition']; 
					$participants = nb_participants($id_petition) ; 
					$membre  = membreDePetition($id_petition);
					$petition = getPetition($id_petition);
				}
			else
				echo("error id petition") ; 

				 ?>
	 			<div >
                    <span class="pro"><?php echo($membre['statut']) ;  ?> </span>
                    <h3>	Proprietaire de la Petition</h3>
                    <img class="round" src="<?php echo "images/".$membre['image']; ?>" alt="user" />
                    <h3><?php echo($membre['nom']." ".$membre['prenom']) ;  ?></h3>
                    <h4><?php echo("Matricule : ".$membre['id']) ;  ?></h4>
                </div>   
                <div class="petition"> 
                   <h1><?php echo($petition['titre']) ;  ?></h1>
				   <h3><?php echo($petition['depot']) ;  ?></h3>
				   <h5>	<?php echo($petition['objet']) ;  ?></h5>
				   <h5>	<?php echo("Nombre de Participants : ".$participants) ;  ?></h5>
				</div>    
                

	
</section>
<h1>Listes Des Membres </h1>
<section class="listes">
	
	<section class="pour">
		<h2> Qui Approuvent Cette Petition</h2>
		<?php 
		
		
			$participant = nb_pour($id_petition) ;  ?>

		<h3>Nombre : <?php echo($participant) ;  ?> 	</h3>	


			<table class="minimalistBlack" style="height: 99px;" width="382">
				<thead>
						<tr>
							<th>Nom Prenom</th>
							<th>Commentaire</th>
						</tr>
				</thead>
				<tbody>
					<?php
					$req = mysqli_query($link , "select id_membre from action where id_petition ='$id_petition' and type ='yes' ") ; 
					while($res = mysqli_fetch_array($req) )
					{
						$id_membre = $res['id_membre'] ; 
								$req1 = mysqli_query($link , "select nom , prenom from membre where id = '$id_membre' ") ; 
								$res = mysqli_fetch_array($req1);
						$nom = $res['nom'] ; 
						$prenom = $res['prenom'] ; 
								$req2 = mysqli_query($link , "select content from commentaire where id_membre ='$id_membre' and id_petition='$id_petition' ") ;
						$comment = "no comment ! " ; 		
								while ( $res2 = mysqli_fetch_array($req2))
										$comment = 	$res2['content'] ; 	
					

					?>
						<tr>
							<td><?php echo($nom." ".$prenom) ; ?></td>
							<td><?php echo($comment) ;  ?></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>


	</section>

	<section class="contre">
		
			<h2>Qui Désapprouvent Cette Petition</h2>
		<?php 
		
		$participant = nb_contre($id_petition) ; 
			 ?>
		<h3>Nombre : <?php echo($participant) ;  ?> 	</h3>	


			<table class="minimalistBlack" style="height: 99px;" width="382">
				<thead>
						<tr>
							<th>Nom Prenom</th>
							<th>Commentaire</th>
						</tr>
				</thead>
				<tbody>
					<?php
					$req = mysqli_query($link , "select id_membre from action where id_petition ='$id_petition' and type ='no' ") ; 
					while($res = mysqli_fetch_array($req) )
					{
						$id_membre = $res['id_membre'] ; 
								$req1 = mysqli_query($link , "select nom , prenom from membre where id = '$id_membre' ") ; 
								$res = mysqli_fetch_array($req1);
						$nom = $res['nom'] ; 
						$prenom = $res['prenom'] ; 
								$req2 = mysqli_query($link , "select content from commentaire where id_membre ='$id_membre' and id_petition='$id_petition' ") ;
						$comment = "no comment ! " ; 		
								while ( $res2 = mysqli_fetch_array($req2))
										$comment = 	$res2['content'] ; 	
					

					?>
						<tr>
							<td><?php echo($nom." ".$prenom) ; ?></td>
							<td><?php echo($comment) ;  ?></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>




	</section>


</section>



	
</body>
</html>