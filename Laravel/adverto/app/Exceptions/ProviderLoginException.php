
<?php

namespace App\Exceptions;

use Exception;

class ProviderLoginException extends Exception
{
    protected $dontReport = [
        LoginException::class,
    ];
}
