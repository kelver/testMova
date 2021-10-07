<?php
namespace app\Classes;

use app\Interfaces\MessageInterface;

class Message implements MessageInterface
{
    public function showMessage()
    {
        $d = getdate();
        return "Hello, today is {$d['weekday']}!";
    }
}