<?php

class UserController{

    private $first_name;
    private $last_name;
    public $user_id;

    public function register(string $first_name, string $last_name): int
    {

        // do some checks
        // insert the user into db, register it
        // fire off emails
        // and get the user_id
        return $this->user_id = 44; // hardcoded for now

    }

}