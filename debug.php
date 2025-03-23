<?php

// configure php as strict as possible
namespace Helper;

use Helper\ValueConverter;

trait Debug
{
    use ValueConverter;

    private const FILEPATH = "debug.log";

    public function log(mixed $message): void
    {
        $string = $this->convert($message);

        file_put_contents(self::FILEPATH, $string . PHP_EOL, FILE_APPEND);
    }

    public function print(mixed $message): void
    {
        echo "<pre>";
        print_r($message);
        echo "</pre>";
    }
}
