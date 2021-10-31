<?php

namespace App\Exception;

use \Exception;

class EnvFileNotFound extends Exception
{
    public function errorMessage()
    {
        return "<h3>Env file in {$this->getMessage()} not found, please create one.</h3>";
    }
}
