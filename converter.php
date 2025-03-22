<?php

namespace Helper;

class ValueConverter
{
    /**
     * Converts a value to a string
     *
     * @param mixed $value
     * @return string
     */
    public function convert(mixed $value): string
    {
        if (is_array($value) || is_object($value)) {
            return print_r($value, true);
        }

        return strval($value);
    }
}
