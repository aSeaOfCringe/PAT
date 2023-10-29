<?php 
abstract class HtmlPage{

  protected $title;
  protected $content;

  protected $footer;

  protected $header;

  function __construct($title){
    $this->title = $title;
    $this->setContent();
    $this->setHeader();
    $this->footer = $this->renderTemplate('views/Footer.php',[]);
  }

  abstract function setContent();
  function setHeader(){
    if(isset($_SESSION['id'])){
      $this->header = $this->renderTemplate('views/Header.php',['userName'=>$_SESSION['name'],'userSurname'=>$_SESSION['surname']]);
    }else{
      $this->header = $this->renderTemplate('views/Header.php',[]);
    }
     
  }

  protected function renderTemplate($template_path, $data) {
    extract($data);
    ob_start();
    require($template_path);
        $html = ob_get_clean();
    
    return $html;
  }

  function getPage(){
    $page = $this->renderTemplate('views/layout.php',['pageName' => $this->title,'header'=> $this->header,'content' => $this->content,'footer' => $this->footer]);

    return $page;
  }
}
?>