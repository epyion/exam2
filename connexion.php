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
    <title>connexion</title>
</head>
<body>
    <div class="header">connexion
    </div>
        <div class="fond">
            <div class="container-form">
                <div class="enregistrer">
                <form action="verification.php" method="post">
            <p>
                <label for="pseudo"  required></label>
                <input id="pseudo" type="text" name="nom_utilisateurs" placeholder="pseudo">
            </p>
            <p>
                <label for="password"  required></label>
                <input id="password" type="password" name="mdp_utilisateurs" placeholder="password" > 
            </p>
         
            <p><input type="submit" value="connexion" value="connexion" class="btne"></p>
            <a href="inscription.php">si vous n'avez pas de compte</a>
        </form>
                </div>
            </div>
        </div>
</body>
</html>