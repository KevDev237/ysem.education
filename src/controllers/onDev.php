<?php

function showOnDev($nameOfPage='onDev'){

    $pageInfo = [
        'titlePage' => 'page en cours de developpement Merci de Patienter | YSEM',
        'name' => $nameOfPage,
    ];

    require_once('src/views/pages/onDev.php');
}