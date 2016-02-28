<?php

class Database
{
  private $bdd;
  private $sQuery;
  private $settings;
  private $bConnected = false;
  private $log;
  private $parameters;

  public function __construct()
  {
    $this->Connect();
    $this->parameters = array();
  }

  private function Connect()
  {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'BISSO');
      $this->bConnected = true;
    }
    catch (PDOException $e)
    {
      print "Error: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  private function Init($query,$parameters = "")
  {
    # Connect to database
    if(!$this->bConnected) { $this->Connect(); }
    try {
      # Prepare query
      $this->sQuery = $this->bdd->prepare($query);

      # Add parameters to the parameter array
      $this->bindMore($parameters);
      # Bind parameters
      if(!empty($this->parameters)) {
        foreach($this->parameters as $param)
        {
          $parameters = explode("\x7F",$param);
          $this->sQuery->bindParam($parameters[0],$parameters[1]);
        }
      }
      # Execute SQL
      $this->succes 	= $this->sQuery->execute();
    }
    catch(PDOException $e)
    {
      # Write into log and display Exception
      echo $this->ExceptionLog($e->getMessage(), $query );
      die();
    }
    # Reset the parameters
    $this->parameters = array();
  }

  public function bind($para, $value)
  {
    $this->parameters[sizeof($this->parameters)] = ":" . $para . "\x7F" . utf8_encode($value);
  }

  public function bindMore($parray)
  {
    if(empty($this->parameters) && is_array($parray)) {
      $columns = array_keys($parray);
      foreach($columns as $i => &$column)	{
        $this->bind($column, $parray[$column]);
      }
    }
  }

  public function query($query,$params = null, $fetchmode = PDO::FETCH_ASSOC)
  {
    $query = trim($query);
    $this->Init($query,$params);
    $rawStatement = explode(" ", $query);

    # Which SQL statement is used
    $statement = strtolower($rawStatement[0]);

    if ($statement === 'select' || $statement === 'show') {
      return $this->sQuery->fetchAll($fetchmode);
    }
    elseif ( $statement === 'insert' ||  $statement === 'update' || $statement === 'delete' ) {
      return $this->sQuery->rowCount();
    }
    else {
      return NULL;
    }
  }

  public function lastInsertId() {
    return $this->bdd->lastInsertId();
  }

  public function column($query,$params = null)
  {
    $this->Init($query,$params);
    $Columns = $this->sQuery->fetchAll(PDO::FETCH_NUM);

    $column = null;
    foreach($Columns as $cells) {
      $column[] = $cells[0];
    }
    return $column;

  }

  public function row($query,$params = null,$fetchmode = PDO::FETCH_ASSOC)
  {
    $this->Init($query,$params);
    return $this->sQuery->fetch($fetchmode);
  }

  public function single($query,$params = null)
  {
    $this->Init($query,$params);
    return $this->sQuery->fetchColumn();
  }
	
}
?>
