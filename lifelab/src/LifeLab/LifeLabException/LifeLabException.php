<?php
namespace LifeLab\LifeLabException;
use Exception;

class LifeLabException extends Exception {
    public function __construct($message, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        echo 'Something bad has happened in the LifeLab.';
        echo PHP_EOL;
        $this->sendEmail();
    }

    private function sendEmail() {
        echo 'Calling sendEmail(): E-Mail sent.' . PHP_EOL;
    }

}