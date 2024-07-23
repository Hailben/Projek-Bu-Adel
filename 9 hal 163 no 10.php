<?php
    $username = "Admin";
    $password = "qwerty";

    if ($username=="Admin" AND $password=="qwerty"){
        echo "Nama dan password sesuai , hak akses diberikan..";
    }

    if ($username=="Admin" AND $password=="qwerty"){
        echo "Nama sesuai , password tidak sesuai!";
    }

    if ($username=="Admin" AND $password=="qwerty"){
        echo "Nama tidak sesuai , password sesuai!";
    }
    else {
        echo "Nama dan password tidak sesuai!";
    }
?>