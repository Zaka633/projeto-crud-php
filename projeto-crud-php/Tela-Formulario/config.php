<?php
$dbHost='LocalHost';
$dbUsername= 'root';
$dbPassword='';
$dbName= 'formulario-arkham';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexão->connect_errno){

    echo "Erro";

}else{

    echo "Conexão bem sucedida!";
}





?>