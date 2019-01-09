<?php

//$date = new DateTime('Mon, 07 Jan 2019 15:05:35 +0100');
//var_dump($date->format('Y-m-d H:i:s'));

$parserService = new \Services\XmlService();
$parserService->run();