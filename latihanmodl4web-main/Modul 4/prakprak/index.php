<?php

require 'traits/HelloWorldTrait.php';
require 'abstractclasses/AbstractGenerator.php';
require 'classes/HelloWorldGenerator.php';

use classes\HelloWorldGenerator;

$generator = new HelloWorldGenerator(15);
$result = $generator->generate();

header('Content-Type: application/json');
echo json_encode(['data' => $result], JSON_PRETTY_PRINT);
