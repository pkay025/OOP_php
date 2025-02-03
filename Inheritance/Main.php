<php?
require_once 'HospitalManagementSystem';

class Main {
    public static function main() {
        // Create Staff Members
        $doctor1 = new Doctor("S001", "Dr. Smith", "Cardiology", "Cardiology", 15);
        $doctor2 = new Doctor("S002", "Dr. Lee", "Neurology", "Neurology", 8);
        $nurse1 = new Nurse("S003", "Nurse Kelly", "Emergency", "Night", 5);

        // Create Hospital Management System
        $hospitalManagementSystem = new HospitalManagementSystem();

        // Register and Display Staff Details
        $hospitalManagementSystem->registerDoctor($doctor1);
        $hospitalManagementSystem->registerDoctor($doctor2);
        $hospitalManagementSystem->registerNurse($nurse1);
    }
}

?>