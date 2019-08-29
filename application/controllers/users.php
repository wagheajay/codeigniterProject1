<?php


class Users extends CI_Controller {






    public function login(){

         //this is regular way to get post data
        // echo "username:"   .$_POST['username']."<br>";
        // echo "password:"   .$_POST['password']."<br>";

        //and this is code igniter framework way of doing it

        echo "Username Is : ".$this->input->post('username');

    }
}