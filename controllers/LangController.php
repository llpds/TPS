<?php
include (ROOT."/models/User.php");

class LangController{
    public function actionChange($lang){
        $_SESSION['lang'] = $lang;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        //require_once ROOT."/views/site/about.php";
        return true;
    }
}
?>