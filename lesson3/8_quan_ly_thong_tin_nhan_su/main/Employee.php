<?php
include_once "Person.php";

class Employee extends Person
{
    private $jobPosition;
    protected $salary;

    public function __construct($firstName, $lastName, $dateOfBirth, $address, $jobPosition, $salary)
    {
        parent::__construct($firstName, $lastName, $dateOfBirth, $address);
        $this->jobPosition = $jobPosition;
        $this->salary = $salary;
    }

    // Getters và setters cho jobPosition và salary
    public function getJobPosition()
    {
        return $this->jobPosition;
    }

    public function setJobPosition($jobPosition)
    {
        $this->jobPosition = $jobPosition;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function toArray()
    {
        $personArray = parent::toArray();
        $personArray['jobPosition'] = $this->jobPosition;
        $personArray['salary'] = $this->salary;
        return $personArray;
    }

    public static function fromArray($data)
    {
        return new Employee(
            $data['firstName'],
            $data['lastName'],
            $data['dateOfBirth'],
            $data['address'],
            $data['jobPosition'],
            $data['salary']
        );
    }
}