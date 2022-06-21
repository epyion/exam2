<?php
session_start ();
include 'bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/46b886e8d1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
    <div class="header">Mes PROJECT</div>
    <div class="nav"> 
<?php if (isset($_SESSION['user'])) { ?>
        <a href="ajout_project.php">Ajouter un projet</a> | <a href="crud_projet.php">C.R.U.D</a> | <a href="deconnexion.php">Deconnexion</a></div>
                     <?php   }

        else { ?>

        <a href="inscription.php">Inscription</a> | <a href="connexion.php"> Connection </a></div>
    
            <?php  }  ?>
    <div class="bann"></div>
    <div class="text">Vous pouvez trouver ci-dessous mes projets réalisés dans leur entièreté ainsi que le lien vers ceux-ci.</div>

    <?php
    $requete=$bdd->prepare("SELECT * FROM projet p,utilisateur u WHERE p.id_projet and p.id_utilisateurs = u.id_utilisateurs");
    $requete->execute();

    while ($row = $requete->fetch()){
        ?>
   


    <h1><?php echo $row["nom_projet"];?> ajouter le <?php echo $row['date_ajout'] ?> par <?php echo $row['nom_utilisateurs'] ?> </h1>
    <div class="grid-container">
        <div class="maquette"></div>
        <a href=<?php echo $row['site_lien'] ?>><div class="site"></div></a>
        <a href=<?php echo $row['github'] ?>><div class="github"><i class="fa-brands fa-github"></i></div></a>
    </div>
 <?php } ?>


    
</body>
</html>