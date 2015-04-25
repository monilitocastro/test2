<?php
include_once("BaseModel.php");
class Model extends BaseModel
{
 public $attributes;

  
 function __construct($ctype="Unknown"){
  $this->define($ctype);
 }

 
 private function define($type){
  $userType=$type;
  if(strcmp($type, "Unknown")==0){
   $this->attributes = array(
     "Authenticate" => 1,
     "Logout"       => 0,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 0,
     "Cancel Appointment" => 0,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 0,
     "View Prescription" => 0,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 0,
     "View Lab History" => 0,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "Patient")==0){
   $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 0,
     "View Prescription" => 1,
     "View Account Balance" => 1,
     "Make Payment" => 0,
     "Schedule Lab Test" => 0,
     "View Lab History" => 0,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 1,
     "Create Emergency FirstContact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "Nurse")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 1,
     "View Prescription" => 1,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 0,
     "View Lab History" => 1,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 1
   );
  }
  elseif(strcmp($type, "Nurse Practitioner")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 1,
     "Write Physicians Exam" => 1,
     "Create Disease" => 1,
     "Modify Disease Thread" => 1,
     "View Medical Record" => 1,
     "View Prescription" => 1,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule LabTest" => 1,
     "View Lab History" => 1,
     "Create Specialist Referral" => 1,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
   }
  elseif(strcmp($type, "Physician")==0){ 
    /*Keep in synch with Nurse Practitioner*/
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 1,
     "Write Physicians Exam" => 1,
     "Create Disease" => 1,
     "Modify Disease Thread" => 1,
     "View Medical Record" => 1,
     "View Prescription" => 1,
     "View AccountBalance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 1,
     "View Lab History" => 1,
     "Create Specialist Referral" => 1,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "Specialist")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 0,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 1,
     "Write Physicians Exam" => 0,
     "Create Disease" => 1,
     "Modify Disease Thread" => 1,
     "View Medical Record" => 0,
     "View Prescription" => 1,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 1,
     "View Lab History" => 1,
     "Create Specialist Referral" => 1,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "Admin")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 1,
     "Schedule Appointment" => 1,
     "Cancel Appointment" => 1,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 0,
     "View Prescription" => 0,
     "View Account Balance" => 1,
     "Make Payment" => 1,
     "Schedule Lab Test" => 0,
     "View Lab History" => 0,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 1,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "EMT")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 0,
     "Schedule Appointment" => 0,
     "Cancel Appointment" => 0,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 1,
     "View Prescription" => 1,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 0,
     "View Lab History" => 0,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 1,
     "Write Nurses Notes" => 0
   );
  }
  elseif(strcmp($type, "Technician")==0){
    $this->attributes = array(
     "Authenticate" => 0,
     "Logout"       => 1,
     "Sign Up New User" => 0,
     "Schedule Appointment" => 0,
     "Cancel Appointment" => 0,
     "Prescribe Medication" => 0,
     "Write Physicians Exam" => 0,
     "Create Disease" => 0,
     "Modify Disease Thread" => 0,
     "View Medical Record" => 0,
     "View Prescription" => 0,
     "View Account Balance" => 0,
     "Make Payment" => 0,
     "Schedule Lab Test" => 1,
     "View Lab History" => 1,
     "Create Specialist Referral" => 0,
     "Update Account Information" => 0,
     "Create Emergency First Contact" => 0,
     "Write Nurses Notes" => 0
   );
  }
  else{
    print "ERROR: UKNOWN USER TYPE IN CONSTRUCTION OF BaseUser.";
  }
 }
 
}
?>
