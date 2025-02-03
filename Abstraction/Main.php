<?php
require_once 'FullTimeEmployee.php';

function main() {
    $employee = new FullTimeEmployee("Paakow Emma", "EOO1", 90000);
    echo "Name: " . $employee->getName() . "\n";
    echo "Employee ID: " . $employee->getEmployeeId() . "\n";
    echo "Salary: " . $employee->getSalary() . "\n";
    $employee->calculatePay();

    $employee2 = new FullTimeEmployee("Abigail Kumah Yeboah", "EOO2", 60000);
    echo "Name: " . $employee2->getName() . "\n";
    echo "Employee ID: " . $employee2->getEmployeeId() . "\n";
    echo "Salary: " . $employee2->getSalary() . "\n";
    $employee2->calculatePay();
}
?>