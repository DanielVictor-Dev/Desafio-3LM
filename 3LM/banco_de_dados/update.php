<?php
session_start();
include_once'conexao.php';
$id =$_SESSION['id'];

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ESPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("update tb_clientes set nome='$nome', email='$email, telefone='$telefone' where id='$id");
$affected_rows = mysqli_affect_rows($link);
if($affected_rows> 0);
    header("Location: ../consultas.php");
endif;
