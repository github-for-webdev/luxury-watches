<?php

namespace ishop;

class ErrorHandler
{

    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($exception)
    {
        $this->logErrors($exception->getMessage(), $exception->getFile(), $exception->getLine());
        $this->displayError('Исключение', $exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n", 3, ROOT . '/tmp/errors.log');
    }

    protected function displayError($error_number, $error_string, $error_file, $error_line, $response = 404)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        } else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}
