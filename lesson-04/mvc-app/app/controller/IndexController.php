<?php

class IndexController
{
    public function test()
    {
        echo "index/test here";
    }

    public function index()
    {
        $view = new View();
        //$view->layout('layout');
        $view->render('index', [
            'message' => 'This is message passed from controller.'
        ]);
    }

}