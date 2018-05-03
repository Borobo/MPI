<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/style.css">

<body>

<?php

if(!isset($_SESSION['login'])) {
    echo '
        <form method="post" action="../back.php">
            <input id="log" name="login" type="text" placeholder="Login">
            <br/>
            <input id="mdp" name="mdp" type="password" placeholder="Mot de passe">
            <br/>
            <input id="valid" name="submit" type="submit" value="Connexion">
            <br/>
            <input id="anon" name="anon" type="submit" value="Continuer sans se connecter">
    
        </form>';
}

else
{
    $mess='';
    if (empty($_POST['login']) || empty($_POST['mdp'])) //oubli d'un champ
    {
        erreur(ERR_CH);
    }
    else
    {
        $usr = SQLGetChamp("SELECT passwd FROM users WHERE nom_usr = " .$_POST['login'].
            " AND passwd = " .$_POST['mdp']);
        $id = $usr;
        $mess = ($usr == 1)? '<p>Vous êtes connecté !</p>' : '<div class="err">Mauvais mdp ou login</div>';
    }
    echo $mess.'</div></body></html>'
}