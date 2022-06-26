<?php
    class User{
        
        public static function checkUserData($name, $password){
            $db = Db::getConnection();

            $sql = "SELECT * FROM workers WHERE name = :name AND password = :password";

            $result = $db->prepare($sql);
            $result->bindParam(":name", $name, PDO::PARAM_STR);
            $result->bindParam(":password", $password, PDO::PARAM_STR);
            $result->execute();

            $user = $result->fetch();
            if($user){
                return [$user["workers_id"],$user["access"],$user["name"]];
            }
            return false;
        }

        public static function auth($userInf){
            $_SESSION["user"] = $userInf[0];
            $_SESSION["access"] = $userInf[1];
            $_SESSION["name"] = $userInf[2];
        }


        public static function checkLogged(){
            if(isset($_SESSION["user"])){
                return $_SESSION["user"];
            }

            header("Location: /login");
        }

        public static function loggedCnc(){
            if(isset($_SESSION["access"]) && ($_SESSION["access"] == "itr" or $_SESSION["access"] == "cnc")){
                return $_SESSION["access"];
            }
            header("Location: /denied");
        }

        public static function loggedItr(){
            if(isset($_SESSION["access"]) && $_SESSION["access"] == "itr"){
                return $_SESSION["access"];
            }
            header("Location: /denied");
        }

        public static function isGuest(){

            if(isset($_SESSION["user"])){
                return false;
            }
            return true;
        }

        public static function isItr(){

            if(isset($_SESSION["access"]) && $_SESSION["access"] == "itr"){
                return true;
            }
            return false;
        }

        
        public static function isCnc(){

            if(isset($_SESSION["access"]) && $_SESSION["access"]  == "cnc"){
                return true;
            }
            return false;
        }
    }
?>