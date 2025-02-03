<?php
abstract class Employee{
    private $name;
    private $employeeId;

    public function __construct($name, $employeeId) {
        $this->name = $name;
        $this->employeeId =  $employeeId;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmployeeId(){
        return $this->employeeId;
    }
    abstract public function calculatePay();

}
?>