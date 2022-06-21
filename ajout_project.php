<?php
session_start();
 require 'bdd.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
<div class="header">Ajouter un Project
    </div>
        <div class="fond">
            <div class="container-form">
                <div class="enregistrer">
                <form action="ajouter.php" method="post">
            <p>
                <label for="nom_project"  required></label>
                <input id="nom_project" type="text" name="nom_project" placeholder="nom_project">
            </p>
            <p>
                <label for="maquette"  required>maquette du site</label>
                <input id="maquette" type="file" name="maquette" placeholder="image maquette" > 
            </p>
            <p>
                <label for="site"  required>image du site</label>
                <input id="site" type="file" name="site" placeholder="site img"> 
            </p>
            <p>
                <label for="lien_site"  required></label>
                <input id="lien_site" type="text" name="lien_site" placeholder="lien site"> 
            </p>
            <p>
                <label for="github"  required></label>
                <input id="github" type="text" name="github" placeholder="lien github"> 
            </p>
         
         
            <p><input type="submit" value="ajouter"class="btne"></p>
            
        </form>

       
                </div>
            </div>
        <a href="site.php"> <button>retour</button></a>
        </div>
   



</body>
</html>
