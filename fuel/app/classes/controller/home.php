<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_home extends Fuel\Core\Controller {

    public function action_index() {
        $view = Fuel\Core\View::forge('home/index');
        $view->header = Fuel\Core\View::forge('home/header');
        $view->pagecontent = Fuel\Core\View::forge('home/pagecontent');
        $view->footer = Fuel\Core\View::forge('home/footer');
        return $view;
    }
    

    public function action_emailsender() {

    }
    
    public function action_insertit() {
        $email=Fuel\Core\Input::post('email');
        $name=Fuel\Core\Input::post('name');
        $phone=Fuel\Core\Input::post('phone');
        Model_insertdata::insert($email,$name,$phone);
        
        $view= \Fuel\Core\View::forge('home/submitted');
        return $view;
    }
    

}
