<?php
class Doctor {
    private $doctorId;
    private $name;
    private $specialization;
  
    
    public function __construct($doctorId, $name, $specialization) {
        $this->setDoctorId($doctorId);
        $this->setName($name);
        $this->setSpecialization($specialization);
    }

    public function getDoctorId() {
        return $this->doctorId;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecialization() {
        return $this->specialization;
    }

    public function setDoctorId($doctorId) {
        $this->doctorId = $doctorId;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSpecialization($specialization) {
        $this->specialization = $specialization;
    }
    public function treatPatient($patient) {
        echo "Patient " . $patient->getPatientId() . " treated for " . $patient->getDiagnosis() . " successfully.\n";
    }
}
?>