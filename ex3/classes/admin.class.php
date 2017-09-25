<?php
class admin extends user {

  public function __construct($user_level, $userId) {
    parent::__construct($user_level);
    $this->user_id = $userId;

  }

  public function __set($name, $value) {
    $this->$name = $value;
    return;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __destruct() {

  }

  static public function getMath($a,$b) {
    return ($a + $b) * $a;
  }


}


 ?>
