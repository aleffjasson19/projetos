<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'motos_online';

$conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

if($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo"conexao efetuada com sucesso";
}
?>