<?php

namespace Shahbaj\GreetingsGenerator;

class Greetings
{
    private static $messages = [
        'Hello',
        'Hi',
        'Hey',
    ];

    public static function greet()
    {
        return self::$messages[array_rand(self::$messages)];
    }
}
