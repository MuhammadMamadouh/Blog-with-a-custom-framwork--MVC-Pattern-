<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 15/10/2018
 * Time: 03:08 ص
 */

class SampleTest extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        $app = \System\Application::getInstance();

        $user = $app->get('Loader')->model('Login');

        $user->setFirstName('Billy');

        $this->assertEquals($user->firstName, 'Billy');


    }
}