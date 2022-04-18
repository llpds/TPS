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

            header("Location: /user/login");
        }

        public static function isGuest(){

            if(isset($_SESSION["user"])){
                return false;
            }
            return true;
        }
    }
?>