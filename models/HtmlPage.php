<?php 
abstract class HtmlPage{

  protected $title;
  protected $content;

  function __construct($title){
    $this->title = $title;
    $this->setContent();
  }

  abstract function setContent();

  protected function renderTemplate($template_path, $data) {
    extract($data);
    ob_start();
    require($template_path);
        $html = ob_get_clean();
    
    return $html;
  }

  function getPage(){
    $page = $this->renderTemplate('views/layout.php',['pageName' => $this->title,'content' => $this->content]);

    return $page;
  }
}
?>