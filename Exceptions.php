<?php

namespace Helper\Exceptions;

use Exception;

class WriteFileException extends Exception
{
    public function __construct()
    {
        $message = "WriteFileException: Most likely you just " .
            "need to add permissions to your \"Debug.php\" file.";
        $code = 1;
        $previous = null;

        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return "{this->message}\n";
    }
}
