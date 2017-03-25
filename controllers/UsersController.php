<?php

class UsersController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        view('users', array('users' => $users));
    }

    public function add()
    {
        view('users-add');
    }
    
    #Handlers
    public function addhandler()
    {
        header('Location: /users');
    }
}