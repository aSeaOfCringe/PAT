<?php 
abstract class HtmlPage{

  protected $title;
  protected $content;

  protected $header;

  function __construct($title){
    $this->title = $title;
    $this->setContent();
    $this->setHeader();
  }

  abstract function setContent();
  abstract function setHeader();

  protected function renderTemplate($template_path, $data) {
    extract($data);
    ob_start();
    require($template_path);
        $html = ob_get_clean();
    
    return $html;
  }

  function getPage(){
    $page = $this->renderTemplate('views/layout.php',['pageName' => $this->title,'header'=> $this->header,'content' => $this->content]);

    return $page;
  }
}
?>