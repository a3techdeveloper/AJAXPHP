<?php

include_once 'conecta.php';

$nome  = filter_input(INPUT_POST, "nome", FILTER_DEFAULT);
$email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
$id    = filter_input(INPUT_POST, "id", FILTER_DEFAULT);

$query = "UPDATE aluno SET nome = '$nome', email = '$email' WHERE id = '$id' ";
$exec = $pdo->query($query);