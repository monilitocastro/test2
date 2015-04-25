<!DOCTYPE html>

<?php
class View
{
    private $model;
    private $controller;
 
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    
    public function createSideBar(){
     $result = $this->model->fromCookie("UserID")."<br>";
     foreach($this->model->attributes as $key => $value){
     	if($value==1){
     	 $linkTitle = $key;
     	 $url = str_replace(' ', '', $key);
     	 $result = $result. "<li><a href=\"".$url."/\" target=\"ContentIFrame\">".$linkTitle."</a></li>";
     	}
     }
     return $result;
    }
 
    public function output() {
        return '<p><a href="mvc.php?action=clicked">' . $this->model->string . "</a></p>";
    }
    public function showLogo(){
     return "<img src=\"logo.png\"></img>";
    }
    public function showContentIFrame(){
     return "<iframe src=\"Authenticate/\" name=\"ContentIFrame\">"."</iframe>";
    }
    public function showTitle(){
     return "LifeThread Electronic Medical Record Software";
    }
    public function showTemplate(){
     return "<html>". $this->showPreBody() . $this->showBody() . "</html>";
    }
    public function showPreBody(){
     return "<head>
	 <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
	 <link rel=\"stylesheet\" type=\"text/css\" href=\"blended_layout.css\">
	 <title>".$this->showTitle()."</title>
	 <meta name=\"description\" content=\"Write some words to describe your html page\">
         </head>";
    }
    public function showBody(){
     return "<body class=\"main\">" . "<div class=\"blended_grid\">". $this->showPageHeader(). $this->showPageLeftMenu(). $this->showPageContent(). $this->showPageFooter() ."</div>" . "</body>";
    }
    public function showPageHeader(){
     return "<div class=\"pageHeader\">" . $this->showLogo() . "</div>";
    }
    public function showPageLeftMenu(){
     return "<div class=\"pageLeftMenu\">
	    <ul>". $this->createSideBar() ."</ul>" ."</div>";
    }
    public function showPageContent(){
     return "<div class=\"pageContent\">".$this->showContentIFrame()."</div>";
    }
    public function showPageFooter(){
     return "<div class=\"pageFooter\">"."</div>";
    }
}
?>
