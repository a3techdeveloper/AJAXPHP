<?php

include_once 'conecta.php';
$id = filter_input(INPUT_GET, "id");

$query = "DELETE FROM aluno WHERE id = '$id' ";
$exec = $pdo->query($query);

header("location: read.php");