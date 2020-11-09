<?php
// manager.php

require './config.php';
require './QrBot.php';


$object = new QrBot($botApi);
if ($object->message == "/start") {
$object->sendText("test");
}