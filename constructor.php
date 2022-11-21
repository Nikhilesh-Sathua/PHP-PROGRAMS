<?php
class Student {
  public $first_name;
  public $last_name;
  public $roll_number;
  public $course;

  function __construct($first_name, $last_name ,$roll_number ,$course) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->roll_number = $roll_number;
    $this->course = $course;

  }
  function get_first_name() {
    return $this->first_name;
  }
  function get_last_name() {
    return $this->last_name;
  }
  function get_roll_number() {
    return $this->roll_number;
  }
  
  function get_course() {
    return $this->course;
  }

}
$nikhilesh = new Student ("NIKHILESH", "SATHUA" , 9 , "MCA");
echo $nikhilesh->get_first_name();
echo "<br>";
echo $nikhilesh->get_last_name();
echo "<br>";
echo $nikhilesh->get_roll_number();
echo "<br>";
echo $nikhilesh->get_course();
echo "<br>";
?>