<?php 
namespace App\Models;
use CodeIgniter\Model;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FirstModel
 *
 * @author lenovo
 */
class FirstModel extends Model 
{
    public function mymethod($one,$two)
    {
        echo 'my model here'.$one.$two;
    }
    //put your code here
}
