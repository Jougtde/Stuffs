<?php

class Category {

  private $_id;
  private $_name;

  // ----------------------------------------------------------------------------

  public function __construct()
  {
  }

  // ----------------------------------------------------------------------------
  // ID
  // ----------------------------------------------------------------------------

  public function getId()
  {
    return $this->_id;
  }

  public function setId($id)
  {
    $this->_id = $id;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // name
  // ----------------------------------------------------------------------------

  public function getName()
  {
    return $this->_name;
  }

  public function setName($name)
  {
    $this->_name = $name;
    return $this;
  }
}

?>
