<?php

   $user = "root";
    $mdp ="";
    $db ="news";
    $server = "localhost";
    $link = mysqli_connect($server, $user, $mdp, $db );

    if($link){
        //echo"connexion établie";
    }
    else{
        die(mysqli_connect_error());
    }

    //récupération des news dans la base de données

    $req = mysqli_query($link, "SELECT * FROM NEWS");
    $res = mysqli_fetch_array($req)

?>

<style>
    body{
    width: 50%;
    margin: auto;
}

table{

    border-collapse: collapse;
    margin: 25px 0;
    padding: 5px;
    font-size: 0.9em;
    font-family: sans-serif;
    box-shadow: 0 0 25px rgba(0,0,0,0.15);
}
td, th{
    padding: 10px;
    text-align: center;
}

</style>
    <table>
        <tr>
            <th>Identifiant</th>
            <th>Date et heure</th>
            <th>Type</th>
            <th>Titre</th>
        </tr>

         <tr>
        <td><?php echo $res["id"]?></td>
        <td><?php echo $res["date_et_heure"] ?></td>
        <td><?php echo $res["type"] ?></td>
        <td><?php echo $res["titre"] ?></td>
         </tr>
    </table>
   

