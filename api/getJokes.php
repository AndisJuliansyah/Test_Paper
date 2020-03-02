<?php
require_once('cachingJokes.php');

$MyJson = new ChacingJokes;
$content = $MyJson->LoadJson('https://icanhazdadjoke.com/slack');