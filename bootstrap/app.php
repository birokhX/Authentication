<?php

require_once dirname(__DIR__) . "/bootstrap/constants.php";
require_once dirname(__DIR__) . DS . "vendor" . DS . "autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();