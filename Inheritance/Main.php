<php?
require_once 'HospitalManagementSystem';
require_once 'Doctor';
require_once 'Nurse';

class Main {
    public static function main() {
       
        $doctor1 = new Doctor("S001", "Dr. Smith", "Cardiology", "Cardiology", 15);
        $doctor2 = new Doctor("S002", "Dr. Lee", "Neurology", "Neurology", 8);
        $nurse1 = new Nurse("S003", "Nurse Kelly", "Emergency", "Night", 5);


        $hospitalManagementSystem = new HospitalManagementSystem();

       
        $hospitalManagementSystem->registerDoctor($doctor1);
        $hospitalManagementSystem->registerDoctor($doctor2);
        $hospitalManagementSystem->registerNurse($nurse1);
    }
}

?>