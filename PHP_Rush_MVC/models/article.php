<?php

class Article {

  private $_id;
  private $_title;
  private $_content;
  private $_author;
  private $_created_at;
  private $_posted_at;
  private $_status;
  private $_last_update;
  private $_visibility;

  // ----------------------------------------------------------------------------

  public function __construct()
  {
  }

  // ----------------------------------------------------------------------------
  // id
  // ----------------------------------------------------------------------------

  public function getId()
  {
    return $this->_id;
  }

  public function setId($_id)
  {
    $this->_id = $_id;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // title
  // ----------------------------------------------------------------------------

  public function getTitle()
  {
    return $this->_title;
  }

  public function setTitle($_title)
  {
    $this->_title = $_title;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // content
  // ----------------------------------------------------------------------------

  public function getContent()
  {
    return $this->_content;
  }

  public function setContent($_content)
  {
    $this->_content = $_content;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // author
  // ----------------------------------------------------------------------------

  public function getAuthor()
  {
    return $this->_author;
  }

  public function setAuthor($_author)
  {
    $this->_author = $_author;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // Created at
  // ----------------------------------------------------------------------------

  public function getCreatedAt()
  {
    return $this->_created_at;
  }

  public function setCreatedAt($_created_at)
  {
    $this->_created_at = $_created_at;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // Posted at
  // ----------------------------------------------------------------------------

  public function getPostedAt()
  {
    return $this->_posted_at;
  }

  public function setPostedAt($_posted_at)
  {
    $this->_posted_at = $_posted_at;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // Status
  // ----------------------------------------------------------------------------

  public function getStatus()
  {
    return $this->_status;
  }

  public function setStatus($_status)
  {
    $this->_status = $_status;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // Last update
  // ----------------------------------------------------------------------------

  public function getLastUpdate()
  {
    return $this->_last_update;
  }

  public function setLastUpdate($_last_update)
  {
    $this->_last_update = $_last_update;
    return $this;
  }

  // ----------------------------------------------------------------------------
  // visibility
  // ----------------------------------------------------------------------------

  public function getVisibility()
  {
    return $this->_visibility;
  }

  public function setVisibility($_visibility)
  {
    $this->_visibility = $_visibility;
    return $this;
  }

}
?>
