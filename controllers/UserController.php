<?php
include (ROOT."/models/User.php");


class UserController{


    public function actionLogin(){
        $name = "";
        $password = "";

        if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $password = $_POST["password"];

            $errors = null;

            $userInf = User::checkUserData($name, $password);

            if ($userInf == false){
                $errors [] = "Invalid login credentials.";
            } else {
                User::auth($userInf);
                header("Location: /");
            }
        }

        require_once ROOT."/views/user/login.php";
    }
    

    public function actionDenied(){
        require_once ROOT."/views/user/denied.php";
    }

    public function actionLogout(){
        session_start();
        //unset($_SESSION["user"]);
        unset($_SESSION["user"], $_SESSION["name"], $_SESSION["access"]);
        header("Location: /");
    }


}
?>