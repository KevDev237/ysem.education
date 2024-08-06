<?php
return [
    // routes pour les onglets de la navbar extern
    '/' => [
        'GET' => function() {
            showOnDev('Home');
        },
    ],
    '/contact' => [
        'GET' => 'showContact',
        'POST' => 'submitContactForm',
    ],
];

// comment definir des liens dynamique
// // boutique/product/{id}/{slug}
// 'boutique/product/(\d+)/([^/]+)' => [
//     'GET' => 'viewProduct',
//     'POST' => 'addToCard',
// ],