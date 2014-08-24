<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 12:17 PM
 */

class WelcomeController extends BaseController {
    public function sayHello(){
    return View::make('welcome.sayhello')
        ->with(array('hi'=>'||hello how r u||',
        'hell'=>'||hell||',
        'anExampleArraykey'=>'example value'
        ));
    }
    public function test(){
        return View::make('welcome.test')
            ->with(array('hi'=>'||hello how r u||',
                'hell'=>'||hell||',
                'anExampleArraykey'=>'example value'
            ));
    }
} 