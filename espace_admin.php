<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
	body{
		width: 50% ;
		margin: auto;
	}
	table {
		margin: 25px 0 ; 
		font-size: 0.9em;
		font-family: sans-serif;
		box-shadow: 0 0 20px rgba(0,0,0,0.6);
		text-align: center;
	}
table.customTable {
  width: 100%;
  background-color: #400A69;
  border-width: 0px;
  border-color: #9D43F8;
  border-style: solid;
  color: #FFFEF7;
}

table.customTable td, table.customTable th {
  border-width: 0px;
  border-color: #9D43F8;
  border-style: solid;
  padding: 5px;
}

table.customTable thead {
  background-color: #9D43F8;
}

input[type='submit']{
	background-color: #9D43F8; 
	border: none;
	border-radius: 10px;
	color: white ;
	padding: 6px;
	text-align: center;
	font-weight: bold;
	width: 8em ; 
	margin: 3px;
}
.nav {
  height: 50px;
  width: 85vh;
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
  </div>
</div>

	<form action="" method="POST">
		<input type="radio" name="filtre" value="pour">pour
		<input type="radio" name="filtre" value="contre">contre
		<input type="submit" name="submit" value="Trier">
	</form>
	
<table class="customTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>Titre</th>
      <th>Nb Participants </th>
      <th>Pour</th>
      <th>Contre</th>
      <th>More</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	include 'cnx.php' ; 
  	include 'functions.php' ; 
  	
  	   
  	 $q = "select * from petition ;" ; 
  	/*if(isset($_POST['submit']))
  	{
  		$filtre = $_POST['filtre'] ; 
  		if($filtre == 'contre')
  			$q = "select * from petition order by contre ;" ; 
  	        
  	    else
  	    	$q = "select * from petition order by pour ;" ; 
  	 }*/
  	 $req = mysqli_query($link , $q);

  	while ($res = mysqli_fetch_array($req)) {
  		$id_petition = $res['id'];
  		$pour= nb_pour($id_petition) ; 
  		$contre = nb_contre($id_petition) ; 
  		 $participants = nb_participants($id_petition) ; 
  		?>
  
    <tr>
      <td><?php  echo $res['id']; ?></td>
      <td><?php  echo $res['titre'];   ?></td>
      <td><?php  echo $participants  ?></td>
      <td><?php  echo $pour   ?></td>
      <td><?php  echo $contre   ?></td>
      <td>
      	<form action="detail.php" method="POST">
      		<input type="hidden" name="id" value="<?php echo $res['id'] ;  ?>" />
      		<input type="submit" value="Detail" >
      	</form>
      	<form action="supprimer.php" method="POST">
      		<input type="hidden" name="id" value="<?php echo $res['id'] ; ?>">
      		<input type="submit" value="Supprimer">
      	</form>
      </td>

    </tr>
    <?php	} ?>
  </tbody>
</table>

<div class="graph_stat">
   <?php include'static.php'; ?>
</div>

</body>
</html>