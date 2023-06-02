<?php
    $name = $_GET["txtNome"];
    $sex = $_GET["sexo"];
if ($sex == "masculino") {//inicio if
    echo ("Olá {$name} seja bem vindo!");
    }// fim if
else if ($sex =="feminino"){ //inicio else if
    echo ("Olá {$name} seja bem vinda!");
    }// fim else if
    else{ //inicio else
        echo("Olá {$name} seja bem vindo ou bem
        vinda");
        }//fim else
?>
