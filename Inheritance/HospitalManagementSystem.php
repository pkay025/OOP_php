<?php
require_once 'Doctor.php';
require_once 'Nurse.php';

class HospitalManagementSystem {
    public function registerDoctor(Doctor $doctor) {
        $doctor->displayDoctorDetails();
    }

    public function registerNurse(Nurse $nurse) {
        $nurse->displayNurseDetails();
    }
}

?>