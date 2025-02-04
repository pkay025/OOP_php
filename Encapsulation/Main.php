<?php
require_once 'Patient.php';
require_once 'Doctor.php';

class Main {
    public static function main() {
        $patient = new Patient("P001", "John Smith", 45, "Fever");

        $doctor = new Doctor("D101", "Dr. Alice", "General Medicine");

        $patient->updateDiagnosis("Flu");


        $doctor->treatPatient($patient);

    }
}
?>