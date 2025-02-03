<?php
require_once 'Employee.php';
class FullTimeEmployee extends Employee{
    private $salary;

    public function __construct($name, $employeeId, $salary){
        parent::__construct($name, $employeeId);
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }

    public function calculatePay() {
        echo "FullTimeEmployee Pay: " . $this->salary;
    }
}
?>