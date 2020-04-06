<?php

//Definimos los recursos disponibles
$allowedResourceType = [
    'books',
    'authors',
    'genres',
];

//Validamos que el recurso este disponible
$resourceType = $_GET['resource_type'];

if(!in_array($resourceType, $allowedResourceType)){
    die;
}

//Defino los recurso 

$books = [
    '1' => [
        'titulo' => 'El amor en los tiempos del colera',
        'id_autor' => 2,
        'id_genero' => 2,
    ],
    '2' => [
        'titulo' => 'Un mundo feliz',
        'id_autor' => 3,
        'id_genero' => 4,
    ],
    '3' => [
        'titulo' => 'Geneologia de la moral',
        'id_autor' => 1,
        'id_genero' => 3,
    ],
    '4' => [
        'titulo' => 'Cronicas marcianas',
        'id_autor' => 5,
        'id_genero' => 4,
    ]

];

//aviso al cliente
header('tipo de contendio: application/json');

//Generamos la respuesta asumiendo que el pedido es correcto


switch(strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':
        echo json_encode($books);
    break;

    case 'POST':
        
    break;

    case 'PUT':
        
    break;

    case 'DELETE':
        
    break;
};