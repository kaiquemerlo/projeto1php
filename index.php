<?php require_once'inc/header.php'; ?>


                    
<?php

// ARMAZENA TODAS AS PAGINAS Q SÃO VALIDAS
$validPages = array(
    "home.php",
    "empresa.php",
    "servicos.php",
    "produtos.php",
    "contato.php"
);


// VERIFICA SE N EXISTE UM GET PG, CASO N EXISTA O REQUIRE SERA = A home.php
if (!isset($_GET["pg"])) {
    $pg = "home.php";
// SE NO ARRAY $validPages n exisitir o valor passado no get o require sera = a erro.php    
} elseif (!in_array($_GET["pg"], $validPages)) {
    $pg = "erro.php";
} else {
// SE exisitir o require sera = a o get
    $pg = $_GET["pg"];
}

require_once($pg);


?> 

                    
<?php require_once('inc/footer.php'); ?>