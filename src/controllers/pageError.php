<?php

function pageError($codeError = 404, $titlePageError = 'Page introuvable', $msgPageError = 'Désolé, nous n’avons pas trouvé la page que vous recherchez.') {
    $pageInfo = [
        'titlePage' => "{$codeError} - {$titlePageError} | YSEM",
        'name' => 'pageError',
    ];


    require_once('src/views/pages/pageError.php');
}