<?php

function erreur($err='')
{
    $mess=($err!='')? $err: 'Une erreur inconnue s\'est produite';
    echo'<div class="err"><p>' .$mess. '</p></div>';

}

