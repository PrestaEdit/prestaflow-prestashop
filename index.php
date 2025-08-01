<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use Tests\Scenarios;

$productsTests = new Scenarios();
$productsTests->run();

$results = json_decode($productsTests->results(), true);

echo '<pre>';
var_dump($results['stats']);
echo '</pre>';
