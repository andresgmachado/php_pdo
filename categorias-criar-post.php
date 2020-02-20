<?php

require_once 'global.php'; 
$nome = $_POST['nome'];
$categoria = new Categoria();
$categoria->nome = $nome;
$categoria->inserir($id);

header('Location: categorias.php');

