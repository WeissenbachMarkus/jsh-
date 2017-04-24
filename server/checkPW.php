<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$password = $_GET["password"];
checkPW($password);


function checkPW($password)
{
    $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/';

    if (preg_match($pattern, $password))
    {
        //echo 'Passwort ok!';
        echo "ok";
        return true;
    } else
    {
        //echo "Passwort zu schwach";
        echo "nok";
        return false;
    }
}
