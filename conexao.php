<?php 

//Credencias de acesso � base de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'UPLOADARQUIVOS');

$conn = new PDO('mysql:hos=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS); 

