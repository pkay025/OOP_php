<?php

class Staff {
    protected $staffId;
    protected $name;
    protected $department;

    public function __construct($staffId, $name, $department) {
        $this->staffId = $staffId;
        $this->name = $name;
        $this->department = $department;
    }

    public function displayStaffDetails() {
        echo "Staff ID: {$this->staffId}, Name: {$this->name}, Department: {$this->department}\n";
    }
}

?>