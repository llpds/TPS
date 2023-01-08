<?php
    class Access{
        
        public static function getAll(){
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM access");

            $i = 0;
            while($row = $result->fetch()){
                $accessList[$i]["id"]=$row["id"];
                $accessList[$i]["right"]=$row["right"];

                $i++;
            }
            return $accessList;
        }

    }
?>