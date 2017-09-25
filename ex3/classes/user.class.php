<?php
abstract class user {
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;

  public function __construct($user) {
    $this->user_level = $user;
  }

  public function __set($name, $value) {

  }

  public function __get($name) {

  }

  public function __destruct() {

  }


}


 ?>
