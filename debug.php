<?php

namespace Helper;

use Helper\ValueConverter;

trait Debug
{
    use ValueConverter;

    private const FILEPATH = "debug.log";

    public function log(mixed $message): void
    {
        $string = $this->convert($message);
        file_put_contents(self::FILEPATH, $string . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    public function print(mixed $message): void
    {
        echo "<div>";
        print_r($message);
        echo "</div>";
    }
}
