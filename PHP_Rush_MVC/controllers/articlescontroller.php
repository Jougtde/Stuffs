<?php

class ArticleControllers extends AppController
{
  function index($name = 'Default'){
        $this->set('titrePage', 'Nom de ma page : '.$name);
        $this->set(array('nom' => $name, 'contenu' => 'paragraphe'));
        $this->render('index');
    }

}

  private $articlemodel;
  private $layout;

  public function loadModel($model)
  {
    $this->articlemodel = $bdd->getTable($model);
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

  public function set($name, $value)
  {
    {% set $name = $value %}
  }

  public function setLayout($layout)
  {
    $this->layout = loadTemplate($layout);
  }

  public function render($file = null)
  {
    $this->beforeRender();
    //
    $this->afterRender();
  }

  protected function redirect($param)
  {

  }
}
