<?php 

$pessoas = array();

array_push($pessoas,  array(
    "nome" => "Eduardo",
    "idade" => 17

));

array_push($pessoas,  array(
    "nome" => "Araujo",
    "idade" => 20

));

echo json_encode($pessoas);
?>