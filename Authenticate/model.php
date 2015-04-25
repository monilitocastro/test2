<?php
include_once('../BaseModel.php');
class Model extends BaseModel
{
    public $Username;
    public $Password;
    public function __construct(){
    }
 
 public function getUserIDFromDB($u, $p){
  $result = mysql_query("SELECT UserID WHERE Username='".$u."' AND Password='".$p."'");
  if (!$result) {
    die('Invalid query: ' . mysql_error());
  }else{
   return $result;
  }
 }
    
}
?>
