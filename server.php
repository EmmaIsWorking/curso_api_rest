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
    1 => [
        'titulo' => 'El amor en los tiempos del colera',
        'id_autor' => 2,
        'id_genero' => 2,
    ],
    2 => [
        'titulo' => 'Un mundo feliz',
        'id_autor' => 3,
        'id_genero' => 4,
    ],
    3 => [
        'titulo' => 'Geneologia de la moral',
        'id_autor' => 1,
        'id_genero' => 3,
    ],
    4 => [
        'titulo' => 'Cronicas marcianas',
        'id_autor' => 5,
        'id_genero' => 4,
    ]

];

//aviso al cliente
header('tipo de contendio: application/json');

//Levantamos el id del recurso buscado
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';


//Generamos la respuesta asumiendo que el pedido es correcto

switch(strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':

        if(empty($resourceId)){
            echo json_encode($books);
        } else{
            if(array_key_exists($resourceId, $books)){
                echo json_encode($books[$resourceId]);
            }
        }
    break;

    case 'POST':
        
    break;

    case 'PUT':
        
    break;

    case 'DELETE':
        
    break;
};