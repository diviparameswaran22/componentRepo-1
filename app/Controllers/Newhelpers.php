<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

/**
 * Description of NewHelpers
 *
 * @author lenovo
 */
class Newhelpers extends BaseController{
    public function index()
            
    {
       // helper('inflector');
       // echo singular('dogs');
       // echo plural('ox');
       // helper('number');
       // echo number_to_size(4500000);
      //  echo number_to_amount(1000000000);
        helper('xml');
        $string = '<p>Here is a paragraph & an entity (&#123;).</p>';
        $string = xml_convert($string);
        echo $string;
        
    }
    public function newFormHelpers()
    {
        //echo 'Working...';
        helper('form');
        echo form_open('http://localhost/ci4/mycon/secondMethod',array('class'=> 'myclass'));
        echo form_input('name','myname here',array('id'=>'myid','class'=>'myclass'));
        echo form_button('login','Login',array('id'=>'myid','class'=>'myclass'));
        $varia=array('firstValue'=>'1','secondValue'=>'2');
        echo form_dropdown('gender', $varia,'secondValue');
        echo form_submit('login', $value='Login');
        echo form_close();
    }
    
    public function urlHelper(){
        $myPopUp=array(
            'width'=>500,
            'height'=>500,
            'scrollbars'=>'yes',
            'resizable'=>'yes',
            'screenx'=>0,
            'screeny'=>0,
            'window_name'=>'_blank'
            );
            
            
        echo anchor_popup('mycon/secondMethod','ClickMe',$myPopUp);
      // echo anchor('mycon/secondMethod','myhome');
    //    echo site_url('mycon/seconMethod');
    //    echo "<a href='".site_url('mycon/secondMethod/')."'>MyAnchor</a>";
    //      echo base_url('public/css/index.php');
     // echo  current_url();
        
        
    }
    //put your code here
}
