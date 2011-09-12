<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Backend_Controller
{
    function __construct ()
    {
        parent::__construct();
    }
    
    public function index(){
        echo 'Welcome to admin controller';
    }
    
    public function login(){
        echo 'You need to log in first!';
    }
}