<?php

include('bdd.php');

$id_projet = !empty($_POST['id_projet']) ? $_POST['id_projet'] : NULL;
if (isset($id_projet)){

    $sql = "DELETE FROM projet WHERE id_projet=?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$id_projet]);


}

 ?>