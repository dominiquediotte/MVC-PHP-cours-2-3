<?php

class UserDTO
{
    private $userID;
    private $firstName;
    private $lastName;

    public function __construct($userID, $firstName, $lastName)
    {
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}
