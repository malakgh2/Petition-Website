<?php session_start();
include_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glassmorphism Skills Bar</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
   
    font-family: Montserrat, sans-serif;
     
      background: linear-gradient(160deg, #009688, #3F5EFB);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;

    min-height: 100vh;
    margin: 0;
}

fieldset{
    width: 60%;
}
.petitions {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

    
}

.container{

    background-color: white;
    margin: 20px;
    padding: 30px 30px 50px;
border: 2px solid rgba(255,255,255,0.06);
    border-radius: 10px;
     box-shadow: 0 20px 30px rgba(0,0,0,0.2);
 backdrop-filter: blur(10px);

  

  width: 40%;
    min-width: 590px;   
 
} 
.container *{
    font-family: "Poppins",sans-serif;
    color: black;
    font-weight: 500;
}
h2{
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-align: center;
    font-size: 33px;
    font-weight: bold;
}
h5{
    margin-bottom: 30px;
    text-align: center;
}
.skills:not(:last-child){
    margin-bottom: 30px;
}
.details{
    width: 100%;
    display: flex;  
    justify-content: space-between;
    margin-bottom: 10px;
}
.bar{
    
 
    border: 2px solid #0d96e0;
 
    border-radius: 20px;
  
}
.bar div{
    
    width: 0;
    height: 9px;
    border-radius: 10px;
    background-color: #0d96e0;
   
 
}
#html-bar{
    animation: html-fill 2s forwards;
}
/*@keyframes html-fill{
    100%{
        width: 90%;
    }
}*/
#css-bar{
    animation: css-fill 2s forwards;
}
/*@keyframes css-fill{
    100%{
        width: 75%;
    }
}*/
#js-bar{
    animation: js-fill 2s forwards;
}
/*@keyframes js-fill {
    100%{
        width: 25%;
    }
}*/
#jQuery-bar{
    animation: jQuery-fill 2s forwards;
}
/*@keyframes jQuery-fill{
    100%{
        width: 58%;
    }
} */

.bio
{

    display: flex;
        margin: 25px 0 ; 
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
        text-align: center;
        width: 50% ; 
}





.round{
    width: 10em;
    height: 10em;
    margin-bottom: -10px;
}






@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
    box-sizing: border-box;
}

h1{
    color: #fff;
    font-family: cursive;
}

h3 {
    margin-top: 35px;
    font-size: 2em;
}

h6 {

     margin-top: 15px;
     margin-bottom: 25px;
     font-size: 0.8em;
    text-transform: uppercase;
}
img{
    margin-top: 10px;
}

p {
    font-size: 14px;
    line-height: 21px;
}


input[type="submit"]  ,.comment{
    background-color: #4d4d4d ; 
}
.card-container {
    margin: 10px ; 
    background-color: #231E39;
    border-radius: 10px;
    box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
    color: #B3B8CD;
    padding: 15px;
    position: relative;
    width: 350px;
    max-width: 100%;
    text-align: center;
    height: 22em;
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
    border: 1px solid #03BFCB;
    border-radius: 50%;
    padding: 7px;
    
}



.radio{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  

  }

label{
    width: 20% ;
    display: inline-block;
    text-align: left;
}

fieldset{
    border-radius: 8px ; 
    margin: 20px;

}
legend{
    font-size: 1.4em ;
   margin: 15px;
   padding: 10px;
    color: white;
}
input[type='text'] , input[type='email']  {
    border-radius: 5px; 
    padding: 10px;
    width: 70%;
    background-color: #fff;
    margin: 10px;
}
 input[type='submit']{
    position: relative;
    padding: 3px;
    font-size: 18px;
    border: 1px solid white;
    border-radius: 5px;
    margin-top: 8px;
    width: 100%;
    font-style: bold ; 
    color: #fff;

 } 


.profile_space{
    display: flex;
   justify-content: space-around;
}
.edit{
    color: white;
}

.btns{
    display: flex;
    justify-content: space-around;
    width: 100%;
    height: 4em;
}
.btns input[type='submit']{
    width: 30%;
}

.yes{
    background: linear-gradient(-40deg, #009688, green);
}

.grd{
     background: linear-gradient(-40deg, #009688, #3F5EFB);
 }
 .no{
     background: linear-gradient(-40deg, #f44, red);
 }


.add{
    align-self: flex-end ;
    margin-top: 0;
    margin-right: 30px;
}

.boutton .yes {
 background: linear-gradient(-40deg, #009688, green);
 width: 30%;
   display: flex;
    justify-content: space-around;
    width: 100%;
    height: 4em;
     position: relative;
    padding: 3px;
    font-size: 18px;
    border: 1px solid white;
    border-radius: 5px;
    margin-top: 8px;
    width: 100%;
    font-style: bold ; 
    color: #fff;
}

.h2{
    display: flex;
    justify-content: space-between;
}






#commentSection{

        margin: 30px; 
        padding: 15px; 
        background-color: rgba(255,255,255,0.3);
        width: 80%;
        border-radius: 20px;
        color: white ;
        align-items: center;
}

.bt_cm{
    display: flex;
    justify-content: space-between;
    

}
.bt_cm input[type="submit"]{

    width: 10%;
    height: 2em;
    color: black;
}
input[type="textarea"]{
   
    width: 80%;
     height: 4em;
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
   
  </div>
</div>


 <?php 
 include 'cnx.php';
 $req = mysqli_query($link, "select * from membre where id = '".$_SESSION['id']."' ; ") ; 
 while ($res = mysqli_fetch_array($req)) {
      ?>
  

    

<fieldset class="profile_space bio ">





        <div class="informations">

                 <div class="card-container">
                    <span class="pro"><?php echo $res['statut']; ?> </span>
                    <img class="round" src="<?php echo "images/".$res['image']; ?>" alt="user"  /> 
                    <h3><?php  echo $res['nom']; echo " "; echo $res['prenom']; ?></h3>
                    <h6><?php echo $res['mail']; ?></h6>
                    <h6><?php echo "Matricule :".$_SESSION['id']; ?></h6>
                    
                    
                </div>


        </div>

        <dvi class="edit">

        


                  <h1>Edit Profile</h1>


                  <form action="modifier.php" method="POST" onSubmit="alert('Profil bien Modifié!');" >

                        <label for="new_nom">Nom</label> <input type="text" name ="new_nom" value="<?php  echo $res['nom']; ?>"  /><br>
                     
                        <label for="new_prenom">Prenom</label><input type="text" name ="new_prenom" value="<?php echo $res['prenom']; ?>"  /><br>
                     
                        <label for="new_mail">Email Address</label><input type="email" name ="new_mail" value="<?php echo $res['mail']; ?>"  /><br>
                        <label for="new_mdp">Mot de Passe</label><input type="text" name ="new_mdp" value="<?php echo $res['mdp']; ?>"  /><br>
                   <?php 

                   if ($res['statut'] == 'etudiant')
                    {

                     ?>


                     <div class="radio">
                      <input type="radio" name="new_statut" value="etudiant" checked="true" >Etudiant<br>
                      <input type="radio" name="new_statut" value="prof" >Enseignant<br>
                      <input type="radio" name="new_statut" value="perso" >Personnel<br>
                    </div>

                    <?php 

                        }
                        else 
                            if ($res['statut'] == 'prof')
                            {
                             ?>

                             <div class="radio">
                      <input type="radio" name="new_statut" value="etudiant"  >Etudiant<br>
                      <input type="radio" name="new_statut" value="prof" checked="true">Enseignant<br>
                      <input type="radio" name="new_statut" value="perso" >Personnel<br>
                    </div>

                    <?php
                            }
                 else 
                           
                            {
                             ?>

                             <div class="radio">
                      <input type="radio" name="new_statut" value="etudiant"  >Etudiant<br>
                      <input type="radio" name="new_statut" value="prof" >Enseignant<br>
                      <input type="radio" name="new_statut" value="perso" checked="true">Personnel<br>
                    </div>

                    <?php
                            }
                    ?>

                          <input type="submit"  value="Save Changes" class="grd"  />
                   

                  </form>





        </dvi>



</fieldset>



<?php } ?>  



<fieldset class="liste_petition" > 
    <legend>   Liste Des Petitions</legend>
    <div class="petitions">

        <a href="add_petition.html"  class="add"><img src="images/user.png" width="45"  ></a>
        <?php 
        include 'cnx.php';

        $req1 = mysqli_query($link , "select statut from membre where id ='".$_SESSION['id']."'; ") ;
        $statut="" ;  
        while ($res1 = mysqli_fetch_array($req1)) 
        {   $statut = $res1['statut'] ; }
        
        $par = nb_membre_ctaegory($statut);

        $req = mysqli_query($link , "select * from petition where id_membre in (select id from membre where statut = '$statut') ; ") ; 
        while ($res = mysqli_fetch_array($req)) 
        {
            $id_petition = $res['id'] ;
            $participants = nb_participants($id_petition) ; 
            $prct = $participants / $par *100;
            $pour = nb_pour($id_petition) / $participants*100 ; 
            $contre = nb_contre($id_petition) / $participants*100 ;
            $_SESSION['id_petition'] = $id_petition  ; 
         ?>



          
            <div class="container">
                <div class="h2"> 
                        <h2 ><?php echo $id_petition." - ".$res['titre']; ?> </h2>
                        
                        <form action="#comment" method="GET">
                            <input type="hidden" name="id_petition" value="<?php echo $id_petition; ?>">
                            <input type="submit" name="petition" value="comment" class="comment"  onclick="myFunction()"  >
                        </form>

                </div>        
                <h5><?php echo $res['objet']; ?></h5>
                <div class="skills">
                    <div class="details">
                        <span>Participants</span>
                        <span><?php echo $prct; ?>%</span>
                    </div>
                    <div class="bar">
                        <div id="html-bar"  style="width:<?php echo $prct; ?>%"></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>Pour</span>
                        <span><?php echo $pour; ?>%</span>
                    </div>
                    <div class="bar">
                        <div id="css-bar"  style=" width:<?php echo $pour; ?>% "></div>
                    </div>
                </div>
                <div class="skills">
                    <div class="details">
                        <span>Contre</span>
                        <span><?php echo $contre; ?>%</span>
                    </div>
                    <div class="bar">
                        <div id="js-bar"  style="width: <?php echo $contre; ?>% "  ></div>
                    </div>
                </div>
                <form class="btns" method="POST">
                    <input type="hidden" name="id_petition"  value="<?php echo $id_petition; ?>">
                    <input type="submit" name="edit" value="Editer" class="grd"  formaction="editer_petition.php" >
                    <input type="submit" name="btn" value="YES" class="yes" formaction="just_for_try.php" >
                    <input type="submit" name="btn" value="NO" class="no" formaction="just_for_try.php" >



                </form>
                <?php
               

                $action = dejaAction($id_petition , $_SESSION['id']) ;
                    if ($action == "yes")
                    {
                        echo(""); 
                        ?> <h6 style="color: red">Aous Avez Approuvé cette petition deja </h6> <?php 

                    }
                    else
                        if($action == "no")
                        {
                            echo(""); 
                        ?> <h6 style="color: red">Aous Avez Désapprouvé cette petition deja </h6> <?php 

                        }
                        else
                            echo("clear"); ?>



               
                
           </div>
       
        <?php 
        } ?>
    </div>
</fieldset>





<section id="commentSection"  >  
        <h4>Add a comment</h4>
        <form method="POST">
            <?php if(isset($_GET['id_petition'])) 
                    $id_petition = $_GET['id_petition'] ;   
                    else echo("nooo") ;  ?>
            <input type="number" name="id_petition" placeholder="Num Petition" value="<?php echo $id_petition; ?>" >
            <input type="textarea" name="comment" placeholder="Saisir Votre Commentaire IcI">
            <div class="bt_cm">  
            <input type="submit" name="btn" value="cancel" onclick="document.getElementByName('comment').value = ''" >
            <input type="submit" name="btn" value="Ajouter" formaction="add_comment.php" >
        </div>
        </form>



</section>

<script >
     function myFunction() {
   document.getElementById("commentSection").style.display = '';
   }

</script>
     
</body>
</html>