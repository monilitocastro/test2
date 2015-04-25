<?php
require_once("model.php");
require_once("view.php");
require_once("controller.php");
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if($model->isPostBack()==TRUE){
 $controller->postBack();
}else{
 echo $view->showPage();
}
?>
