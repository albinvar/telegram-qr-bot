<?php
// manager.php

require './config.php';
require './QrBot.php';
require './functions.php';

// Libraries
$botToken = getApi();
$botUsername = getUsername();

$object = new QrBot($botToken);
if ($object->message == "/start") {
$object->sendText("test");
}