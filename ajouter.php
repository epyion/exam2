<?php
session_start();
include 'bdd.php';


$check = $bdd->prepare('SELECT * FROM utilisateur WHERE nom_utilisateurs = :nom_utilisateurs');
$check->execute([':nom_utilisateurs' => $_SESSION['user']]);
$data = $check->fetch();

$titre= !empty($_POST['nom_projet']) ? $_POST['nom_projet'] : NULL ;
$liensite=!empty($_POST['lien_site']) ? $_POST['lien_site'] : NULL ;
$github=!empty($_POST['github']) ? $_POST['github'] : NULL ;
$iduti= $data["id_utilisateurs"];

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
$uniquename = md5(uniqid(rand(), true));
$filename = "img/" . $uniquename . $fileext;
move_uploaded_file($tmpname, $filename);
$image = $uniquename . $fileext;


$ajoutprojet = $bdd->prepare("INSERT INTO projet (nom_projet, site_lien, github, image, id_utilisateurs, date_ajout) VALUE ( ?,?,?,?,?,NOW())");
$ajoutprojet->execute(array($titre, $liensite, $github, $image, $iduti));

header('location:site.php')



?>