<?php 
abstract class HtmlPage{

  protected $title;

  function __construct($title){
    $this->title = $title;
  }

  protected function renderTemplate($template_path, $data) {
    extract($data);
    ob_start();
    require($template_path);
        $html = ob_get_clean();
    
    return $html;
  }

  function getPage(){
    $page = $this->renderTemplate('views/layout.php',['pageName' => $this->title]);

    return $page;
  }
}
?>