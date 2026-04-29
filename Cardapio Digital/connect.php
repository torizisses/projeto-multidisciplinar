<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$db = "cardapiovirtual";

$conn = new mysqli($servidor, $user, $senha, $db);

if(!$conn -> connect_error) {
    echo'conexao bem sucedida';
} else{
    die('erro'. $conn -> connect_error);
}
?>