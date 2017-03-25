<?php

class IndexController
{

    public function index()
    {
        $data = App::get('database')->selectAll('users');

        return view('index', array('company' => 'TestCompany'));
    }

    public function home()
    {
        die('Home Action');
    }
}