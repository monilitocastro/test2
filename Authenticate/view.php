<?php
class View
{
    private $model;
    private $controller;
 
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
    public function showPage(){
     return "<html><head>".$this->showCSS()."</head><body>".$this->showForm()."</body></html>";
    }
    public function showCSS(){
     return "<link rel=\"stylesheet\" type=\"text/css\" href=\"./blended_layout.css\">";
    }
    public function showForm(){
     return "<form action=\"index.php\" method=\"post\">".$this->showComponents()."</form>";
    }
    public function showComponents() {
        return "<br/>&nbsp;<br/><div style=\"width: 200px; margin: 0 auto;\"><input type=\"textbox\" name='Username'><br/>
        <input type='password' name='Password'><br/>
        <input type='reset'><input type='submit' value='Log in'></div>";
    }
}
?>
