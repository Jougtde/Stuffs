<?php
require("../config/databases.php");

class User {

  private $_id;
  private $_username;
  private $_email;
  private $_password;
  private $_group;
  private $_visibility;

  // ----------------------------------------------------------------------------

  public function __construct()
  {
    $bdd = new bdd();
  }

  // ----------------------------------------------------------------------------
  // ID
  // ----------------------------------------------------------------------------

  public function getId()
  {
    $_id = $bdb->query("SELECT id FROM users");
    return $_id;
  }

  public function setId($id)
  {
    $this->_id = $id;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // username
  // ----------------------------------------------------------------------------

  public function getUsername()
  {
    return $this->_username;
  }

  public function setUsername($username)
  {
    $this->_username = $username;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // email
  // ----------------------------------------------------------------------------

  public function getEmail()
  {
    return $this->_email;
  }

  public function setEmail($email)
  {
    $this->_email = $email;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // password
  // ----------------------------------------------------------------------------

  public function getPassword()
  {
    return $this->_password;
  }

  public function setPassword($password)
  {
    $this->_password = $password;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // group
  // ----------------------------------------------------------------------------

  public function getGroup()
  {
    return $this->_group;
  }

  public function setGroup($group)
  {
    $this->_group = $group;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // visibility
  // ----------------------------------------------------------------------------

  public function getVisibility()
  {
    return $this->_visibility;
  }

  public function setVisibility($visibility)
  {
    $this->_visibility = $visibility;
    return $this;
  }
}

?>
