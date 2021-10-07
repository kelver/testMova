<?php
require_once 'vendor/autoload.php';
use app\Classes\Message;

$dia = new Message();
echo $dia->showMessage();