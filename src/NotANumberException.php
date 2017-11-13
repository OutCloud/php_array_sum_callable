<?php

namespace OutCloud\Exception;


use Throwable;

class NotANumberException extends \Exception
{
    public function __construct($message = "The number you've provided is not a number (NaN)", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}