<?php

require_once('src/static/libs/MyCustomException.php');
require_once('src/controllers/pageError.php');
require_once('src/controllers/onDev.php');
require_once('src/controllers/contact.php');


// Récupérer l'URL depuis la barre de navigation
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

// Supprimer le script name et la query string
$url = parse_url($url, PHP_URL_PATH);

// Supprimer le slash de départ et de fin
if (strlen($url)>1){
    $url = rtrim($url, '/');
}

// Décomposer l'URL en segments
$segments = explode('/', $url);

// Filtrer les éléments vides du tableau $segments
$segments = array_filter($segments, function ($segment) {
    return $segment !== '';
});

// Récupérer la méthode HTTP utilisée
$method = $_SERVER['REQUEST_METHOD'];

$host = $_SERVER['HTTP_HOST'];

// Récupérer les routes depuis le fichier de configuration
$routes = require 'config/routes.php';


//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
//||||||||||||||ROUTAGE AVEC LIEN DYNAMIQUE||||||||||||||
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
try {
    $routeFound = false;
    foreach ($routes as $route => $methods) {
        if (preg_match("#^$route$#", $url, $matches) && isset($methods[$method])) {
            $handler = $methods[$method];
            $routeFound = true;

            // Vérifier si le handler est une closure ou une chaîne (nom de fonction)
            if (is_callable($handler)) {
                // Si c'est une closure, l'appeler directement
                array_shift($matches); // Retirer le premier élément de $matches
                call_user_func_array($handler, $matches);
            } elseif (is_string($handler) && function_exists($handler)) {
                // Si c'est une chaîne et que la fonction existe, l'appeler
                array_shift($matches);
                call_user_func_array($handler, $matches);
            } else {
                throw new MyCustomException('500', 'Une erreur est survenue en Interne', "Le traitement pour le chemin <b>'$host$url'</b> est inexistant ou incorrect. Veuillez vérifier l'URL fournie ou contacter le <u><b>webmaster</u></b>.");
            }
            break;
        }
    }
    if (!$routeFound) {
        throw new MyCustomException('404', 'Page introuvable', "chemin <b>'$host$url'</b> incorrecte ou inexitant ");
    }
} catch (MyCustomException $e) {
    pageError($e->interCode, $e->interTitleError, $e->interMessageError);
}




//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
//||||||||||||||ROUTAGE SANS LIEN DYNAMIQUE||||||||||||||
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||
// try {
//     // Construire l'URL demandée
//     $requestedRoute = $url;

//     // Vérifier si la route existe
//     if (array_key_exists($requestedRoute, $routes) && array_key_exists($method, $routes[$requestedRoute])) {
//         $functionName = $routes[$requestedRoute][$method];

//         // Vérifier si la fonction existe avant de l'appeler
//         if (function_exists($functionName)) {
//             $functionName();
//         } else {
//             throw new MyCustomException('SS_405','Page introuvable' ,"Le traitement '$functionName' pour le chemin '$requestedRoute' est inexistant ou incorrecte veuillez contacter le webmaster.");
//         }
//     } else {
//         $host = $_SERVER['HTTP_HOST'];
//         throw new MyCustomException('404','Page introuvable' ,"chemin '$host/$requestedRoute' incorrecte ou inexitant ");
//     }
// } catch (MyCustomException $e) {
//     pageError($e->interCode, $e->interTitleError, $e->interMessageError);
// }