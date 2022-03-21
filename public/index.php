<?php

// j'appelle l'autoload de mon vendor
require __DIR__ . '/../vendor/autoload.php';

// j'appelle mes Controllers
require __DIR__ . '/../app/Controllers/MainController.php';

// j'appelle mes Models
require __DIR__ . '/../app/Models/Characters.php';

// j'appelle le fichier de connexion à la BDD
require __DIR__ . '/../app/Utils/Database.php';

// je crée un objet Altorouter pour créer mes routes
$router = new AltoRouter;

// je définis ma route de base
$router->setBasePath($_SERVER['BASE_URI']);

// ci-dessous, je définis mes routes
$router->map(
    'GET',
    '/',
    [
        'action'=>'home', //nom de ma method
        'controller'=>'MainController', // nom de mon controller
    ],
    'main-home' //nom de ma route
);

$router->map(
    'GET',
    '/hirokazu-yasuhara',
    [
        'action'=>'hirokazu', //nom de ma method
        'controller'=>'MainController', // nom de mon controller
    ],
    'main-hirokazu-yasuhara' //nom de ma route
);

$router->map(
    'GET',
    '/yuji-naka',
    [
        'action'=>'yuji', //nom de ma method
        'controller'=>'MainController', // nom de mon controller
    ],
    'main-yuji-naka' //nom de ma route
);

$router->map(
    'GET',
    '/naoto-oshima',
    [
        'action'=>'naoto', //nom de ma method
        'controller'=>'MainController', // nom de mon controller
    ],
    'main-naoto-oshima' //nom de ma route
);

//cette method vérifie l'existence de mes routes
$match = $router->match();

if ($match == true) {
    // je sors le nom du controller dans lequel se situe la methode à executer
    $controllerToUse = $match['target']['controller'];
    // idem avec le nom de la methode a executer
    $methodToUse = $match['target']['action'];
} else {
    $controllerToUse = 'MainController';
    $methodToUse = 'err404';
}

// il ne me reste plus qu'a executer la methode (et donc il me faut d'abord fabriquer un objet)
$controller = new $controllerToUse();
$controller->$methodToUse();