<?php
/**
 * Created by PhpStorm.
 * User: sacha
 * Date: 01/05/18
 * Time: 18:15
 */


$log = $_POST['log'];
$mdp = $_POST['mdp'];
$verifLog = SQLGetChamp("SELECT nom_usr FROM users WHERE nom_usr = $log");
$verifMdp = SQLGetChamp("SELECT passwd FROM users WHERE nom_usr = $log AND passwd = $mdp");

echo '<body>
    <form method="post" action="back.php">
        <input id="log" name="login" type="text" placeholder="Login">
        <br/>
        <input id="mdp" name="login" type="password" placeholder="Mot de passe">
        <br/>
        <input id="valid" name="submit" type="submit" value="Connexion">
        <br/>
        <input id="anon" name="anon" type="submit" value="Continuer sans se connecter">

    </form>

</body>';


