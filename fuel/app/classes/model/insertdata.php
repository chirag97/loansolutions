<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Model_insertdata
{

public static function insert($email,$name,$phone)
{
    $query=\Fuel\Core\DB::insert('visitor')->columns(array('email','name','phone'))->values(array($email,$name,$phone));
    $query->execute();
    return 'query executed';
            
}

}