<?php

$a = new Admin('lobellec', 'lobellec', 'louison', 'bellec', 'lobellec@mail.com', true);
$gw = new AdminGateway();

$gw->addAdmin($a);