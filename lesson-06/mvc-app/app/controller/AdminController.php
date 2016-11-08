<?php

class AdminController
{
    public function index()
    {
        // if admin is not logged in we let him know that he should log in first
        if(!Session::getInstance()->isLoggedIn()) {

            //sends redirect header, browser will redirect to login page
            header('Location: ' . App::config('url').'admin/login');

        } else {
            // file example, read and parse CSV to array
            // $prijave = array_map('str_getcsv', file(BP . 'private/attendees.csv'));

            $connection = App::connect();
            $stmt = $connection->query('SELECT * FROM `attendee`');
            $prijave = $stmt->fetchAll();

            // render admin index view with data from CSV and variable for checking if user is logged in
            $view = new View();
            $view->render('admin/index', [
                'prijave' => $prijave,
                'isLoggedIn' => Session::getInstance()->isLoggedIn()
            ]);
        }
    }

    public function login()
    {
        // instantiate view model and set admin-layout.phtml as layout
        $view = new View();
        $view
            ->layout('admin/layout')
            ->render('admin/login');
    }

    public function submit()
    {
        // take credentials
        $email = Request::post('email');
        $password = Request::post('password');

        // instantiate view model and set admin-layout.phtml as layout
        $view = new View();
        $view->layout('admin/layout');

        // if credentials are correct we login admin and redirect him to /admin url which is handled by AdminController
        // index method
        if($email == App::config('admin_email') && $password == App::config('admin_password')) {
            //set to session that admin is logged in
            Session::getInstance()->login();

            // redirect to admin page
            header('Location: ' . App::config('url').'admin/index');

        } else {
            // else we render login view again and let user know that credentials are wrong
            $view->render('admin/login', [
                'message' => 'Neispravni podaci, pokušajte ponovno'
            ]);
        }
    }

    public function logout()
    {
        // logout user and redirect him to main page
        Session::getInstance()->logout();

        // redirect to homepage
        header('Location: ' . App::config('url'));
    }
}