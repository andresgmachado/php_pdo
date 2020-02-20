<?php
require_once 'global.php';

$nome = $_POST["nome"];
$id = $_POST["id"];
$categoria = new Categoria($id);
$categoria->nome = $nome;
$categoria->Atualizar();

header('Location: categorias.php');
