<?php session_start();
include 'functions.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   
    <style >


body{
    display: flex;
  font-family: 'Dosis', sans-serif;
  background: #f8f4f2;
  text-align: center;
  padding: 60px;

}
.informations
{

    
        margin: 30px;
        padding: 10px ;  
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        text-align: center;
        width: 50% ; 
}

h1{
    font-family: cursive;
}


.container {
    background-color: #eef2f5;
    width: 74%;
}

.addtxt {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    font-size: 13px;
    width: 350px;
    background-color: #e5e8ed;
    font-weight: 500
}

.form-control: focus {
    color: #000
}

.second {
    width: 350px;
    background-color: white;
    border-radius: 4px;
    box-shadow: 10px 10px 5px #aaaaaa
}

.text1 {
    font-size: 13px;
    font-weight: 500;
    color: #56575b
}

.text2 {
    font-size: 13px;
    font-weight: 500;
    margin-left: 6px;
    color: #56575b
}

.text3 {
    font-size: 13px;
    font-weight: 500;
    margin-right: 4px;
    color: #828386
}

.text3o {
    color: #00a5f4
}

.text4 {
    font-size: 13px;
    font-weight: 500;
    color: #828386
}

.text4i {
    color: #00a5f4
}

.text4o {
    color: white
}

.thumbup {
    font-size: 13px;
    font-weight: 500;
    margin-right: 5px
}

.thumbupo {
    color: #17a2b8
}

.d-flex 
{
    display: flex;
}
.justify-content-center
{
    justify-content: center;
}
.justify-content-between{
    justify-content: space-between;
}

.commentaires{
    display: flex;
    flex-wrap: wrap;
}







.a-box {
  
  display: inline-block;
  width: 22%;
  text-align: center;
}

.img-container {
    height: 230px;
    width: 200px;
    overflow: hidden;
    border-radius: 0px 0px 20px 20px;
    display: inline-block;
}

.img-container img {
    transform: skew(0deg, -13deg);
    height: 250px;
    margin: -35px 0px 0px -70px;
}

.inner-skew {
    display: inline-block;
    border-radius: 20px;
    overflow: hidden;
    padding: 0px;
    transform: skew(0deg, 13deg);
    font-size: 0px;
    margin: 30px 0px 0px 0px;
    background: #c8c2c2;
    height: 250px;
    width: 200px;
}

.text-container {
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  padding: 120px 20px 20px 20px;
  border-radius: 20px;
  background: #fff;
  margin: -120px 0px 0px 0px;
  line-height: 19px;
  font-size: 14px;
}

.text-container h3 {
  margin: 20px 0px 10px 0px;
  color: #04bcff;
  font-size: 18px;
}


















    </style>
</head>
<body>

<?php

include 'cnx.php' ; 

if(isset( $_POST['id']))
{
    $id = $_POST['id'];
    $req  = mysqli_query($link , "select * from petition where id ='$id' ;  ");
    $res = mysqli_fetch_array($req) ; 
    $statut = get_statutDuPetition($id) ; 
}
else
echo "no champsssss";
?>







<div class="a-box">
  <div class="img-container">
    <div class="img-inner">
      <div class="inner-skew">
        <img src="images/petition.jpg">
      </div>
    </div>
  </div>
  <div class="text-container">

    <h3><?php echo $res['titre'];?></h3>
    <div>
      <?php echo $res['objet'];?>
  </div>
  <br><br>
  <p> le membre d'id : <?php echo $res['id_membre'];?></p>
  <p>  <?php echo $statut['statut'];?></p>
</div>
</div>




    <div class="container justify-content-center mt-5 border-left border-right">
        <h1>Les Commentaires</h1>
        <div class="commentaires">
   <?php
   include 'cnx.php' ; 
   if(isset($_POST['id']))
   {
    $id = $_POST['id'] ; 
   $req1 = mysqli_query($link , "select * from commentaire where id_petition = '$id' ; ") ; 
   while($res1 = mysqli_fetch_array($req1))
        { 
             $id_membre = $res1['id_membre'] ;    
            $req2 = mysqli_query($link , "select * from membre where id = '$id_membre' ") ; 
                                $res = mysqli_fetch_array($req2);
                        $nom = $res['nom'] ; 
                        $prenom = $res['prenom'] ; 
            ?>
        <div class="commentaire">
            
            <div class="d-flex justify-content-center py-2">
                <div class="second py-2 px-2"> <span class="text1" style="font-size: 20px"><?php echo $res1['content']; ?></span>
                    <div class="d-flex justify-content-between py-1 pt-2">
                        <div><img src="<?php echo "images/".$res['image']; ?>" width="18"><span class="text2" ><?php echo($nom." ".$prenom) ; ?></span></div>
                       
                    </div>
                </div>
            </div>
        </div>
<?php }}else echo " e333333"; {
    # code...
} ?>
        </div>
    </div>


</body>
</html>