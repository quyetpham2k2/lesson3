<?php
include_once "Employee.php";

class EmployeeManager
{
    private $employees = [];

    public function getEmployees()
    {
        return $this->employees;
    }

    public function addEmployee($employee)
    {
        foreach ($this->employees as $existingEmployee) {
            if (
                $existingEmployee->getFirstName() === $employee->getFirstName() &&
                $existingEmployee->getLastName() === $employee->getLastName() &&
                $existingEmployee->getDateOfBirth() === $employee->getDateOfBirth()
            ) {
                throw new Exception("Nhân viên đã tồn tại: " . $employee->getFirstName() . " " . $employee->getLastName());
            }
        }

        $this->employees[] = $employee;
    }


    public function displayEmployeeList()
    {
        foreach ($this->employees as $index => $employee) {
            echo ($index + 1) . ". " . $employee->getFirstName() . " " . $employee->getLastName() . "<br>";
        }
    }

    public function getEmployeeDetails($index)
    {
        if (isset($this->employees[$index])) {
            $employee = $this->employees[$index];
            print_r($employee->toArray());
        } else {
            echo "Employee not found.<br>";
        }
    }

    public function saveToFile($filename)
    {
        file_put_contents($filename, json_encode($this->toArray(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function toArray()
    {
        $result = [];
        foreach ($this->employees as $employee) {
            $result[] = $employee->toArray();
        }
        return $result;
    }

    public function loadFromFile($filename)
    {
        if (file_exists($filename)) {
            $data = json_decode(file_get_contents($filename), true);

            $this->employees = array_map(function ($item) {
                return Employee::fromArray($item);
            }, $data);
        }
    }
}