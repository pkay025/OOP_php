<?php
require_once 'Staff.php';

class Doctor extends Staff {
    private $specialization;
    private $yearsOfExperience;

    public function __construct($staffId, $name, $department, $specialization, $yearsOfExperience) {
        parent::__construct($staffId, $name, $department);
        $this->specialization = $specialization;
        $this->yearsOfExperience = $yearsOfExperience;
    }

    public function displayDoctorDetails() {
        echo "Doctor ID: {$this->staffId}, Name: {$this->name}, Department: {$this->department}, Specialization: {$this->specialization}, Experience: {$this->yearsOfExperience} years\n";
    }
}
?>