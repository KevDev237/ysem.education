<?php

class MyCustomException extends Exception {
    public string $interCode;
    public string $interTitleError;
    public string $interMessageError;

    public function __construct($codeInter = '404', $interTitleError = 'Page introuvable', $message = 'Désolé, nous n’avons pas trouvé la page que vous recherchez.') {
        $this->interCode = $codeInter;
        $this->interTitleError = $interTitleError;
        $this->interMessageError = $message;
        parent::__construct($message);
    }
}