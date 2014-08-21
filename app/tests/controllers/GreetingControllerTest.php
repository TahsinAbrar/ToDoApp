<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 5:09 PM
 */

class GreetingControllerTest extends TestCase{
    function testLoadingGreetingSayhi(){
        $this->call('GET','greeting/hi');
        $this->assertResponseOk();
    }
} 