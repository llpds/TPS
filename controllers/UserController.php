<?php
include (ROOT."/models/User.php");
include (ROOT."/models/Access.php");


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

    public function actionIndex()
    {
        $usersList = User::getAll();
        require_once ROOT."/views/user/list.php";
        return true; 
    }

    public function actionCreate()
    {
        $accessList = Access::getAll();
        require_once ROOT."/views/user/create.php";
        return true; 
    }

    public function actionStore()
    {
        if(isset($_POST['createWorker'])){
            
        $name = $_POST["name"];
        $access = $_POST["access"];
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $status = "working";
        $result = User::store($name,$access,$password_hash, $status);
        }

        header("Location: /user/list");
        return true;
    }

}
?>