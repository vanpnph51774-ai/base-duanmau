<?php

class HomeController
{
    public function index() 
    {
        $errors = [];
        $username = '';
        $password = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            //Validate Username
            if ($username === '') {
                $errors[] = 'Username khong duoc de trong ' ;
            } elseif (strlen(username) < 3 || strlen($username) > 30) {
                $errors[] = 'Username phai tu 3 den 30 ky tu'; 
            }
        }

        require_once PATH_VIEW . 'main.php';
    }
}