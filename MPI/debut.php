
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/style.css" />

</head>

<?php
//Attribution des variables de session

$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;

$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';


//On inclue les 2 pages restantes

include("./includes/function.php");
include("./includes/id.php");
include("./includes/const.php");

?>


