<?php
//    include_once ROOT."/models/Category.php";
//    include_once ROOT."/models/Product.php";

    class SiteController {

        public function actionGreet(){
            require_once ROOT."/views/site/about.php";
            return true;
        }
    }

?>
