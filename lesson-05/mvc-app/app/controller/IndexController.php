<?php

class IndexController
{
    public function index()
    {
        $view = new View();
        //$view->layout('layout'); //possible to change layout name
        $view->render('index', [
            'message' => 'This is message passed from controller.'
        ]);
    }

}