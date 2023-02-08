<?php

class Author {

    // private attribute
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $biography;
    
    // public constructor
public function __construct(int $id, string $firstName, string $lastName, string $biography)
    {
        $this->id = null;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
    }

    // public getter
    public function getId() : int
    {
        return $this->id;
    }
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function getBiography() : string
    {
        return $this->getBiography;
    }


    // public setter
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    public function setBiography(string $biography) : void
    {
        $this->biography = $biography;
    }
}
?>