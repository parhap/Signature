<?php

$name=$_POST['name'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$int=$_POST['intitule'];
$tel=$_POST['tel'];
$car=$_POST['cars'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signature</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    
    <!-- bootsrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    -->
    <style>
table, th, td {
  border:1px solid black;
  left:350px;
  bottom:570px;
  border:transparent
}
</style>
</head>

<body style="font-size: 10px;line-height: 1.8;color: #222;font-weight: 400;font-family: dax;">

    <div class="main" style=" display: flex; width: 100%;">

        
        
        <section class="signup" style="display: block;">
            
                    
                  <img id="img2" src="cadre_beta.png" style="width: 50%; padding:0px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;" alt="">
                  <!--<img id="img3" src="cadre2.svg" style="padding : 0px;margin:0px;" alt="">
                    <h3 id="nom" style="text-transform : capitalize;color: white;opacity:0; ">Hachem></h3>
                    <h3 id="nom" style="text-transform : uppercase;color: white;opacity:0; ">BERKAOUI</h3> -->
    
        </section>
            



<div id="content" class="row" style="position: absolute;width: 100%;margin-left:-5px;margin-right:-5px; content: ; clear: both;display: table;">

        

<div class="name_mail" style="width: 20%;margin-left: 10px !important;margin-top: 70px;float: left; font-size: 10px;">
  <table style="margin-right: auto; margin-left: auto; border-collapse: collapse; border-spacing: 0;">
  
  <tr>
    <td style="text-align:center;font-size:20px;font-family:dax-bold;color:#A79F88;"> 
      <span style="text-transform: capitalize;">Hachem</span> <span style="text-transform: uppercase;">Hachem</span></td>
  </tr>

  <tr>
    <td style="text-align:center;font-size:16px;font-family:dax-light;color:#A79F88; text-transform: capitalize;"><?php echo "$int"?></td>
  </tr>
 
</table>
</div>

<div class="info_team" style="width: 60%;float: left;padding: 5px;margin-top: 17px;">
  
  <table class="info_as" style="border-collapse: collapse;border-spacing: 0;">
  
    <tr>
      <td>
      <img src="icone.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
      <span style="padding-left:7px ;font-family:dax-light;">Km 0,500, Agadir road P.B 4741 Hay Massira 40 005 Marrakesh Morocco</span>
      </td> 
    </tr>
    <!--<tr>
      <td><img src="icone.svg" class="icons" alt=""><span>Km 0,500, Agadir road P.B 4741 Hay Massira 40 005 Marrakesh Morocco</span></td>
    </tr>-->
    <tr>
      <td><img  src="fix.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
      <span style="padding-left:7px; font-family:dax-light;padding-right: 10px;">+212 524 499 900  / 01 / 02 / 03</span>
      <img  src="fax.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
      <span style="padding-left:10px;font-family:dax-light">+212 524 499 900  / 01 / 02 / 03</span>
      </td>
      
    
    </tr>
    <tr>
      <td><img src="tel.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
        <a style="padding-left:10px; font-family:dax-light; text-decoration: none;  color: black; " href="https://wa.me/<?php echo "$tel"?>"><?php echo "$tel"?></a>
      </td>
      
    </tr>
    <tr>
      <td><img src="email.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
        <a style="padding-left:10px; font-family:dax-light; text-decoration: none;  color: black; cursor: pointer;" href="mailto:<?php echo "$email"?>"><?php echo "$email"?></a>
      </td>
      
    </tr>
    <tr>
      <td>
        <img src="web.svg" class="icons" alt="" style="vertical-align: middle; font-size: 1.4em;width: 1.5em;height: 1.5em;">
        <a style="padding-left:10px; font-family:dax-light; text-decoration: none; color: black; cursor: pointer;" href="https://menara-holding.ma/fr-fr/">www.menara-holding.ma</a>
      </td>
      
    </tr>
    
    <tr>
      <td>
      <h3 class="s_media" style="padding-left: 40px;font-size: 0.9em;font-family:dax-light;margin-bottom: 5px; ">Suivez-nous :   
        <a style="text-decoration: none !important;" href="https://www.facebook.com/menaraholding.ma/">
          <img src="in.svg" alt="" style="padding-left:5px;width:20px;vertical-align: middle; ">
        </a>
        <a style="text-decoration: none !important;" href="https://www.facebook.com/menaraholding.ma/">
          <img src="ign.svg" alt="" style="padding-left:5px;width:20px;vertical-align: middle; ">
        </a>
        <a style="text-decoration: none !important;" href="https://twitter.com/holdingmenara">
          <img src="twt.svg" alt="" style="padding-left:5px;width:20px;vertical-align: middle; ">
        </a>
        <a style="text-decoration: none !important;" href="https://www.facebook.com/menaraholding.ma/">
          <img src="yt.svg" alt="" style="padding-left:5px;width:20px;vertical-align: middle; ">
        </a>
      </h3>
      
      </td>
      
    </tr>
    
</table>

</div>


  
                  


              
</div> 

                
           
        
        
</div> 
         


      

   

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



