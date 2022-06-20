<?php
    require_once 'bdd.php';

    $retour = header('location:connexion.php?reg_err=success');

    if(isset($_POST['nom_utilisateurs']) && isset($_POST['mdp_utilisateurs']))
    {
        $pseudo = htmlspecialchars($_POST['nom_utilisateurs']);
        $password = htmlspecialchars($_POST['mdp_utilisateurs']);
        $check = $bdd->prepare('SELECT nom_utilisateurs, mdp_utilisateurs FROM utilisateur WHERE nom_utilisateurs =?');
        $check->execute(array($pseudo));
        $data = $check->fetch();
        $row = $check->rowCount();


        if($row == 0)
        {
            if(strlen($pseudo) <= 100)
            {
                      $password = hash('sha256', $password);
                            
                            $insert = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateurs, mdp_utilisateurs) VALUES(:nom_utilisateurs, :mdp_utilisateurs)');
                            $insert->execute(array(
                                'nom_utilisateurs' => $pseudo,
                                'mdp_utilisateurs' => $password
                            ));
                        // header('location: connexion.php?reg_err=success');
                }else header('location:inscription.php');
            }else header('location:inscription.php?reg_err=pseudo_length');
        }else header('location:inscription.php?reg_err=already');
    
