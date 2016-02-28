<?php
class AppController
{

  public $request;
  private $content = array();
  private $rendered = false;

  function __construct($request)
  {
    $this->request = $request;
  }

  public function loadModel($model)
  {

  }

  public function beforeRender()
  {

  }

  public function beforeFilter()
  {

  }

  public function afterFilter()
  {

  }

  public function afterRender()
  {

  }

  public function set($key, $value=null)
  {
    if(is_array($key))
    { // Permet de récupérer directement un tableau des paramètres
      $this->content += $key;
    }
    else if(isset($value))
    { // Ou récupérer un clé valeur
      $this->content[$key] = $value;
    }
  }

  public function setLayout($layout)
  {

  }

  public function render($viewName)
  {
    if($this->rendered)
    {
      return false;
    }
    extract($this->content);
    if(strpos($viewName, DS) === 0)
    { // On regarde si il s'agit de 404.php
      $view = APP.DS.'views'.$viewName.'.php';
    }
    else
    {
      $view = APP.DS.'views'.DS.$this->request->controller.DS.$viewName.'.php';
    }
    require($view); // Insertion de la vue dans index.php
    $this->rendered = true; // Evite d'avoir la page en dupliquée lors d'appel directe dans le contrôleur enfant
  }

  protected function redirect($param)
  {

  }
}
?>
