<?php 
session_start();
include 'bdd.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/46b886e8d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/utilisateurs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/utilisateurs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
    <div class="header">Mes PROJECT</div>
    <div class="bann"></div>
    <div class="nav"> 
<?php if (isset($_SESSION['user'])) { ?>
        <a href="ajout_project.php">Ajouter un projet</a> | <a href="crud_projet.php">C.R.U.D</a> | <a href="deconnexion.php">Deconnexion</a></div>
                     <?php   }

        else { ?>

    
    
            <?php  }  ?>
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
        <a href="" id="supp_projet" onclick="deleteAjax()" ><i class="fa-solid fa-trash-can"></i></a>
        
  

    </div>




 
  <?php } 
 ?>
 
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
</body>
</html>
