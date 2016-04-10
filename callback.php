<?php

namespace Coinfide\Example;

use Coinfide\Entity\Callback;
use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$data = file_get_contents('php://input');

$checksum = $_SERVER['HTTP_X_BODY_CHECKSUM'];

/**
 * Verify the request
 */
if (md5($data . $_ENV['COINFIDE_SECRET']) != $checksum) {
    die('Validation error');
}

/**
 * Parse the request and process it
 */
$callback = new Callback();
$callback->fromArray(json_decode($data, true));
$callback->validate();

if ($callback->getStatus() == 'PA') { //paid
    //process actual order
}

/**
 * Return success, if no value is returned, callbacks will continue
 */
echo 'OK';
