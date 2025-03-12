<?php

namespace Shahbaj\GreetingsGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Shahbaj\GreetingsGenerator\Greetings;

class GreetingsTest extends TestCase
{
    public function test_grenerates_random_greeting()
    {
        $messages = [
            'Hello',
            'Hi',
            'Hey'
        ];

        $this->assertContains(Greetings::greet(), $messages);
    }
}
