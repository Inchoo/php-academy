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
        $_SESSION['is_logged_in'] = true;
    }

    /**
     * Logs user out
     */
    public function logout()
    {
        unset($_SESSION['is_logged_in']);
    }

    /**
     * Checks if user is logged in or not
     */
    public function isLoggedIn()
    {
        // checking if session variable is set using ternary operator, see the docs
        $isLoggedIn = isset($_SESSION['is_logged_in']) ? true : false;

        return $isLoggedIn;
    }
    
    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}
