<?php
include (ROOT."/models/User.php");


class UserController{


    public function actionLogin(){
        if(isset($_SESSION['lang'])) $err = include_once (ROOT."/lang/".$_SESSION['lang']."Errors.php");
        $name = "";
        $password = "";

        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $password = $_POST["password"];

            $errors = null;

            $userInf = User::checkUserData($name, $password);

            if ($userInf == false){
                $errors [] =  $err['wrongAuth'];
            } else {
                User::auth($userInf);
                header("Location: /");
            }
        }

        require_once ROOT."/views/user/login.php";
        return true;
    }
    

    public function actionDenied(){
        require_once ROOT."/views/user/denied.php";
        return true;
    }

    public function actionLogout(){
        unset($_SESSION["user"], $_SESSION["name"], $_SESSION["access"]);
        header("Location: /");
        return true;
    }


}
?>