<?php

namespace Coinfide\Test;

use Dotenv\Dotenv;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $dotenv = new Dotenv(__DIR__ . '/../');
        $dotenv->load();

        if ($_ENV['COINFIDE_USER'] == 'yourapiusername') {
            die('Please copy .env.example file to .env and fill in your Coinfide credentials');
        }
    }

}
