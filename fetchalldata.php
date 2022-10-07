<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// Simple example to setup and retrieve all data from a table 

// If using Composer
require 'vendor/autoload.php';

/* if not using composer, uncomment this
include('../src/Airtable.php');
include('../src/Request.php');
include('../src/Response.php');
*/

use TANIOS\Airtable\Airtable;

$airtable = new Airtable(array(
    'api_key'   => 'api_key',
    'base'      => 'base_key',
));
$params = array(
    "view" => "New Jobs"
);
 $request = $airtable->getContent( 'Jobs' , $params);

$response = $request->getResponse();
$json_pretty = json_encode(json_decode($response), JSON_PRETTY_PRINT);
echo $json_pretty;
