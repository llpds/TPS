<?php
    class User{
        
        public static function getAll(){
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM workers");

            $i = 0;
            while($row = $result->fetch()){
                $usersList[$i]["id"]=$row["workers_id"];
                $usersList[$i]["name"]=$row["name"];
                $usersList[$i]["access"]=$row["access"];

                $i++;
            }
            return $usersList;
        }

        public static function store($name, $access, $password_hash, $status){
            $db = Db::getConnection();

            $sql = "INSERT INTO workers (name, access, password, status) VALUES (:name, :access, :password_hash, :status)";

            $result = $db->prepare($sql);
            $result -> bindParam(":name", $name, PDO::PARAM_STR);
            $result -> bindParam(":access", $access, PDO::PARAM_STR);
            $result -> bindParam(":password_hash", $password_hash, PDO::PARAM_STR);
            $result -> bindParam(":status", $status, PDO::PARAM_STR);

            return $result->execute();
        }

        public static function checkUserData($name, $password){
            $db = Db::getConnection();

            //$sql = "SELECT * FROM workers WHERE name = :name AND password = :password";
            $sql = "SELECT * FROM workers WHERE name = :name";
            
            $query = $db->prepare($sql);
            $query->bindParam(":name", $name, PDO::PARAM_STR);
            //$result->bindParam(":password", $password, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            //$user = $result->fetch();
            
            if (!$result) {
                return false;    
            } else {
                if (password_verify($password, $result['password'])) {
                    return [$result["workers_id"],$result["access"],$result["name"]];
                } else {
                    return false;  
                }
            }
    
            
            /*
            if($user){
                return [$user["workers_id"],$user["access"],$user["name"]];
            }
            return false;
            */
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
            if(isset($_SESSION["access"]) && ($_SESSION["access"] == "itr" or $_SESSION["access"] == ("cnc" or "admin"))){
                return $_SESSION["access"];
            }
            header("Location: /denied");
        }

        public static function loggedItr(){
            if(isset($_SESSION["access"]) && $_SESSION["access"] == ("itr" or "admin")){
                return $_SESSION["access"];
            }
            header("Location: /denied");
        }

        public static function loggedAdmin(){
            if(isset($_SESSION["access"]) && $_SESSION["access"] == "admin"){
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

        public static function isAdmin(){

            if(isset($_SESSION["access"]) && $_SESSION["access"]  == "admin"){
                return true;
            }
            return false;
        }
    }
?>