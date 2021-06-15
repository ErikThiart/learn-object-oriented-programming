<?php

class User
{
    const getInstance = '';
    protected static $instance;

    // properties
    private $user_id;
    private $first_name;
    private $last_name;

    private function __construct($user_id) {

        // if the user doesn't exist kill it
        if(!$this->user_exists($user_id)) {
            throw new Exception('No such user exists.');
        }

        // get the user details from DB
        $this->first_name = 'John'; // DB response
        $this->last_name = 'Wonka'; // DB response
        $this->user_id = '44';      // DB response
    }

    private function user_exists($user_id) {
        // do a DB lookup to see if the user exist
        return true; // hardcode for demonstration
    }

    public static function getInstance($user_id)  {
        if ( !isset(self::$instance) ) {
            self::$instance = new self($user_id);
        }
        return self::$instance;
    }

    public function getFullName()
    {
        return $this->first_name . " ". $this->last_name;
    }

}