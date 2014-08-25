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
    public function fileUpload(){
        return View::make('welcome.fileUpload');
    }
    public function storeUpload(){
        $file = Input::file('file'); // your file upload input field in the form should be named 'file'

        $destinationPath = public_path().'uploads/'.str_random(6);
        $filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('file')->move($destinationPath, $filename);

        if( $uploadSuccess ) {
            return Response::json('success', 200); // or do a redirect with some message that file was uploaded
        } else {
            return Response::json('error', 400);
        }
    }
} 