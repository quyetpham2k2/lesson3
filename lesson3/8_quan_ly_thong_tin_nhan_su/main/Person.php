<?php

class Person
{
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $address;

    // Constructor
    public function __construct($firstName, $lastName, $dateOfBirth, $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }

    // Getters và setters
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function toArray()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'dateOfBirth' => $this->dateOfBirth,
            'address' => $this->address
        ];
    }

    public static function fromArray($data)
    {
        return new Person($data['firstName'], $data['lastName'], $data['dateOfBirth'], $data['address']);
    }
}
