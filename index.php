<?php
include './metodos.php';

$metodos = new Metodos();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $metodos->getMethod();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $metodos->postMethod();
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $metodos->putMethod();
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $metodos->delete();
}

?>