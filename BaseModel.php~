<?php
class BaseModel{
 public static $UserType;
 public static $UserID;
 public $servername;
 private $conn;

 
 public function doesUserExist($username, $password){}
 public function isPostBack(){
  if (isset($_SERVER['REQUEST_METHOD']) && strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
      return TRUE;
  }
  return FALSE;
 }
 public function connectToDB($servername="localhost",$username, $password){
  $this->servername = $servername;
  // Create connection
  $this->conn = new mysql_connect($this->servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 }
 public function closeDBConnection(){
  $this->conn->close();
 }
 function resetUserType($rtype="Unknown"){
  $this->define($rtype);
 }
 public function set_UserType($uType){
  $this->UserType=$uType;
  toCookie("UserType", $uType);
 }
 public function set_UserID($uID){
  $this->UserID = $uID;
  $this->toCookie("UserID", $uID);
 }
 private function toCookie($cookie_name, $cookie_value){
  setcookie($cookie_name, $cookie_value, time() + (86400), '/'); // 86400 = 1 day
 }
 
 public function fromCookie($cookie_name){
  if(!isset($_COOKIE[$cookie_name])) {
   $concat = "set_" . $cookie_name;
   setcookie($cookie_name, "Unknown", time() + (86400), '/'); // 86400 = 1 day
   return "Unknown";
  } else {
   return $_COOKIE[$cookie_name];
  }
 }
}
?>
