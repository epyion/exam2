<?php
    session_start();
    require_once 'bdd.php';


    if(isset($_POST['nom_utilisateurs'], $_POST['mdp_utilisateurs']))
    {
   
  
            $pseudo = htmlspecialchars($_POST['nom_utilisateurs']);
            $password = htmlspecialchars($_POST['mdp_utilisateurs']);

            $check = $bdd->prepare('SELECT nom_utilisateurs, mdp_utilisateurs FROM utilisateur WHERE nom_utilisateurs = :nom_utilisateurs');
            $check->execute([':nom_utilisateurs' => $pseudo]);
            
            if($check->rowCount() == 1)
            {
                $data = $check->fetch();
                    $password = hash('sha256', $password);
                    if($data['mdp_utilisateurs'] === $password)
                    {
                    $_SESSION['user'] = $pseudo;
                    
                    header('location:site.php?login_err=success');
                     }
                     else header('location:connexion.php?login_err=password');
            }
            else header('location:connexion.php?login_err=already');
    }else header('Location:connexion.php?login_err=compte_existe_pas');