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
                <form action="ajouter.php" method="post" enctype="multipart/form-data" >
            <p>
                <label for="nom_project"  required></label>
                <input id="nom_project" type="text" name="nom_projet" placeholder="nom_project">
            </p>
            <p>
                <label for="site"  required>image du site</label>
                <input id="site" type="file" name="upload_file" placeholder="site img"> 
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

<?php 

if (isset($_POST['submit']))
{
    $maxsize = 250000;
    $validext = array('.jpg', '.jpeg', '.gif', '.png' );

    if($_FILES['upload_file']['error'] > 0 ) {

        echo "une erreur est survenue lors du transfer";
        die;
    }

    $filesize = $_FILES['upload_file']['size'];

    if ($filesize > $maxsize)
    {
        echo "le fichier est trop gros !";
        die;
    }

    $filename = $_FILES['upload_file']['name'];
    $fileext = "." . strtolower(substr(strrchr($filename, '.'), 1));

    if(!in_array($fileext, $validext))
     {
        echo "le fichier n'est pas une image";
    }

    $tmpname = $_FILES['upload_file']['tmp_name'];
    $uniquenme = md5(uniqid(rand(), true));
    $filename = "img/" . $uniquename . $fileext;
    move_uploaded_file($tmpname, $filename);
}

?>