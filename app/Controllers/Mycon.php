<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

use App\Models\FirstModel;

/**
 * Description of Mycon
 *
 * @author lenovo
 */
class Mycon extends BaseController {

    public function index() {
        // echo 'second controller';
    }
    //put your code here
    public function secondMethod() {
        $myObj = new FirstModel();
        $myObj->mymethod(1,3);
        die();
        // echo 'second method...'.$param;
        $data['key'] = array(10, 20);
        return view('newphWebpage', $data);
    }

}
