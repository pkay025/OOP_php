<?php
require_once 'Patient.php';
require_once 'Doctor.php';

$patient = new Patient("P001", "John Smith", 45, "Fever");

$doctor = new Doctor("D101", "Dr. Alice", "General Medicine");

$patient->updateDiagnosis("Flu");

// Treat the patient and log the treated patient information
$doctor->treatPatient($patient);

?>