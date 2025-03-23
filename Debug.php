<?php

namespace Helper;

use Helper\ValueConverter;
use Helper\Exceptions\WriteFileException;

trait Debug
{
    use ValueConverter;

    private const FILEPATH = "debug.log";

    public function log(mixed $message): void
    {
        $string = $this->convert($message);
        $result = file_put_contents(self::FILEPATH, $string . PHP_EOL, FILE_APPEND | LOCK_EX);
        if (!isset($result)) {
            throw new WriteFileException();
        }
    }

    public function print(mixed $message): void
    {
        echo "<div>";
        print_r($message);
        echo "</div>";
        echo "\n";
    }
}
