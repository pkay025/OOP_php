<?php
class Nurse extends Staff {
    private $shift;
    private $patientsAssigned;

    public function __construct($staffId, $name, $department, $shift, $patientsAssigned) {
        parent::__construct($staffId, $name, $department);
        $this->shift = $shift;
        $this->patientsAssigned = $patientsAssigned;
    }
    public function displayNurseDetails() {
        echo "Nurse ID: {$this->staffId}, Name: {$this->name}, Department: {$this->department}, Shift: {$this->shift}, Patients Assigned: {$this->patientsAssigned}\n";
    }
}
?>