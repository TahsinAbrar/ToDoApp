<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 11:59 AM
 */

class WelcomeControllerTest extends TestCase {
    public function testLoadingWelcomeSayHello(){
        $this->call('get','welcome/sayhello');
        $this-> assertResponseOk();
    }
} 