<?php
class Patient{
    private $patientId;
    private $name;
    private $age;
    private $diagnosis;

    public function __construct($patientId, $name, $age, $diagnosis){
        $this->patientId = $patientId;
        $this->name = $name;
        $this->age = $age;
        $this->diagnosis = $diagnosis;
    }

    public function getPatientId(){
        return $this->patientId;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getDiagnosis(){
        return $this->diagnosis;
    }

    public function setPatientId($patientId){
        return $this->patientId = $patientId;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setAge($age){
        if($age > 0){
        $this->age = $age;
        }
        else{
            echo "Invalid age.\n";
        }
    }

    public function setDiagnosis($diagnosis){
        if(!empty($diagnosis)){
            $this->diagnosis = $diagnosis;
        }
        else{
            echo "Diagnosis cannot be empty.\n";
        }
    }

    public function updateDiagnosis($newDiagnosis){     
        $this->setDiagnosis($newDiagnosis);
        echo "Diagnosis updated successfully to: " . $newDiagnosis .  "\n";
    }

}

?>