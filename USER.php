<?php

   $user = "root";
    $mdp ="";
    $db ="user";
    $server = "localhost";
    $link = mysqli_connect($server, $user, $mdp, $db );

    if($link){
        //echo"connexion établie";
    }
    else{
        die(mysqli_connect_error());
    }
    //lecture du fichier csv
    $file = "Data.csv";
    $openfile = fopen($file, "r");
    $cont = fread($openfile, filesize($file));
    echo $cont;
    
        //$req = mysqli_query($link, "insert into user(username,fullname,email,contact)values ('$username','$fullname','$email','$contact')");


      /*  if($req)
         {
            echo " Enregistrement réussi";
         }
         else
         {
            echo"échec de l'enregistrement";
         }*/

?>

