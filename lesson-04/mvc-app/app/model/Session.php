<?php

/**
 * Class Session
 */
class Session
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }

    /**
     * Logs user in
     */
    public function login()
    {
        //@todo
    }

    /**
     * Logs user out
     */
    public function logout()
    {
        //@todo
    }

    /**
     * Checks if user is logged in or not
     */
    public function isLoggedIn()
    {

    }
    
    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}
