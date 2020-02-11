<?php

function getConnection() {

$dns = 'mysql:host=localhost;dbname=db_cadastro';
$user = 'root';
$pass = '';

try {
        $pdo = new PDO($dns, $user, $pass);
        return $pdo;

    } catch (PDOException $ex) {

            echo 'Erro: ' . $ex->getMessage();

    }

}







