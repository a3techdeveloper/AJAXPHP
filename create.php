<?php

include_once 'conecta.php';

$nome  = filter_input(INPUT_POST, "nome", FILTER_DEFAULT);
$email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);

$query = "INSERT INTO aluno (nome, email) VALUES ('$nome','$email')";
$exec = $pdo->query($query);