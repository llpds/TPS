<?php
    class Works{

        public static function input($name, $week, $rl, $st, $hr){
            $db = Db::getConnection();

            $sql = "INSERT INTO work (week, work_name, rl_material_type, st_material_type, hr_material_type) VALUES (:week, :name, :rl, :st, :hr)";

            $result = $db->prepare($sql);
            $result -> bindParam(":name", $name, PDO::PARAM_STR);
            $result -> bindParam(":week", $week, PDO::PARAM_STR);
            $result -> bindParam(":rl", $rl, PDO::PARAM_STR);
            $result -> bindParam(":st", $st, PDO::PARAM_STR);
            $result -> bindParam(":hr", $hr, PDO::PARAM_STR);


            return $result->execute();
        }



        public static function getWorksList(){
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM work");

            $i = 0;
            while($row = $result->fetch()){
                $worksList[$i]["id"]=$row["id"];
                $worksList[$i]["work_name"]=$row["work_name"];
                $worksList[$i]["rl_material_type"]=$row["rl_material_type"];
                $worksList[$i]["st_material_type"]=$row["st_material_type"];
                $worksList[$i]["hr_material_type"]=$row["hr_material_type"];

                $i++;
            }
            return $worksList;
        }


        public static function getSchedule(){
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM work ORDER by week, priority");

            $i = 0;
            while($row = $result->fetch()){
                $worksList[$i]["id"]=$row["id"];
                $worksList[$i]["week"]=$row["week"];
                $worksList[$i]["priority"]=$row["priority"];
                $worksList[$i]["work_name"]=$row["work_name"];
                $worksList[$i]["rl_cnc_date"]=$row["rl_cnc_date"];
                $worksList[$i]["rl_cnc_prod"]=$row["rl_cnc_prod"];
                $worksList[$i]["st_cnc_date"]=$row["st_cnc_date"];
                $worksList[$i]["st_cnc_prod"]=$row["st_cnc_prod"];
                $worksList[$i]["hr_cnc_date"]=$row["hr_cnc_date"];
                $worksList[$i]["hr_cnc_prod"]=$row["hr_cnc_prod"];

                $i++;
            }
            return $worksList;
        }


        public static function getScheduleByWeek($week){
            $worksList = [];
            $week = intval($week);

            $db = Db::getConnection();

            $sql = "SELECT * FROM work  WHERE week = $week ORDER by week, priority";
            $result = $db->query($sql);


            $i = 0;
            while($row = $result->fetch()){
                $worksList[$i]["id"]=$row["id"];
                $worksList[$i]["week"]=$row["week"];
                $worksList[$i]["priority"]=$row["priority"];
                $worksList[$i]["work_name"]=$row["work_name"];
                $worksList[$i]["rl_cnc_date"]=$row["rl_cnc_date"];
                $worksList[$i]["rl_cnc_prod"]=$row["rl_cnc_prod"];
                $worksList[$i]["st_cnc_date"]=$row["st_cnc_date"];
                $worksList[$i]["st_cnc_prod"]=$row["st_cnc_prod"];
                $worksList[$i]["hr_cnc_date"]=$row["hr_cnc_date"];
                $worksList[$i]["hr_cnc_prod"]=$row["hr_cnc_prod"];
                $worksList[$i]["cnc_other_prod"]=$row["cnc_other_prod"];
                $worksList[$i]["st_material"]=$row["st_material_type"];
                $worksList[$i]["rl_material"]=$row["rl_material_type"];
                $worksList[$i]["hr_material"]=$row["hr_material_type"];

                $i++;
            }
            return $worksList;
        }


        public static function getWorksNameList(){
            $db = Db::getConnection();
            $result = $db->query("SELECT work_name FROM work");

            $i = 0;
            while($row = $result->fetch()){
                $worksNameList[$i]=$row["work_name"];
                $i++;
            }
            return $worksNameList;
        }



        public static function getWorkByName($name){
            if($name){
            $db = Db::getConnection();

            $sql = "SELECT * FROM work WHERE work_name = :name";

            $result = $db->prepare($sql);
            $result->bindParam(":name", $name, PDO::PARAM_STR);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            return $result->fetch();
            }
        }


        public static function edit($id, $worksName, $rlMaterial, $stMaterial, $hrMaterial){
            $db = Db::getConnection();

            $sql = "UPDATE work SET work_name = :work, rl_material_type = :rl, st_material_type = :st, hr_material_type = :hr WHERE id = :id";
            //$sql = "UPDATE work SET work_name = :work WHERE id = :id";

            $result = $db->prepare($sql);
            $result -> bindParam(":id", $id, PDO::PARAM_INT);
            $result -> bindParam(":work", $worksName, PDO::PARAM_STR);
            $result -> bindParam(":rl", $rlMaterial, PDO::PARAM_STR);
            $result -> bindParam(":st", $stMaterial, PDO::PARAM_STR);
            $result -> bindParam(":hr", $hrMaterial, PDO::PARAM_STR);
            return $result->execute();
        }

        public static function updSchedule ($id, $week, $priority){
            $db = Db::getConnection();

            $sql = "UPDATE work SET week = :week, priority = :priority  WHERE id = :id";
            //$sql = "UPDATE work SET work_name = :work WHERE id = :id";

            $result = $db->prepare($sql);
            $result -> bindParam(":id", $id, PDO::PARAM_INT);
            $result -> bindParam(":week", $week, PDO::PARAM_STR);
            $result -> bindParam(":priority", $priority, PDO::PARAM_STR);
            return $result->execute();
        }

        public static function updCnc ($id, $rl, $st, $hr, $oth){
            $db = Db::getConnection();

            $sql = "UPDATE work SET rl_cnc_prod = :rl, st_cnc_prod = :st, hr_cnc_prod = :hr, cnc_other_prod = :oth WHERE id = :id";
           
            $result = $db->prepare($sql);
            $result -> bindParam(":id", $id, PDO::PARAM_INT);
            $result -> bindParam(":rl", $rl, PDO::PARAM_STR);
            $result -> bindParam(":st", $st, PDO::PARAM_STR);
            $result -> bindParam(":hr", $hr, PDO::PARAM_STR);
            $result -> bindParam(":oth", $oth, PDO::PARAM_STR);
            return $result->execute();
        }





    }
?>
