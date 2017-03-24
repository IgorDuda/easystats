<?php

class IndexController {

    public function index() {

        return view('index', array('company' => 'TestCompany'));
    }

    public function home() {
        die('Home Action');
    }

}
