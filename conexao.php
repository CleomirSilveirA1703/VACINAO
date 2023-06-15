<?php
$host = 'localhost';
$usuario = 'root';
$senha  = '1234';
$database = 'projeto_facul';

$mysql = new mysqli($host, $usuario, $senha, $database);

if($mysql->error){
    die("falha os conectar" . $mysql->error);
}