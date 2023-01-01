<?php
    include (ROOT."/models/Works.php");
    include (ROOT."/models/User.php");

    class FilesController{
        public function actionIndex(){
            $userId = User::loggedAdmin();
            require_once (ROOT."/views/files/publicfiles.php");
            return true;
        }
    }


?>