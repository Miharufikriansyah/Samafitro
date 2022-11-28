<?php

class Authenticable {
    public function __construct() {
        session_start();
    }

    public function checkLogin()
    {
        
    }

    public function login()
    {
        # code...
    }

    public function logout()
    {
        session_destroy();
    }
}