<?php
    include (ROOT."/models/Works.php");
    include (ROOT."/models/User.php");

    class CncController{
        public function ActionSchedule(){
            $userId = User::loggedCnc();

            $worksList = [];
            $week = date("W");
            
            if(isset($_POST["Cnc"])){
                //print_r($_POST);
                $id = $_POST["Cnc"];
                $rl = $_POST["rl_cnc_prod"];
                $st = $_POST["st_cnc_prod"];
                $hr = $_POST["hr_cnc_prod"];
                $oth = $_POST["cnc_other_prod"];
                $result = Works::updCnc($id, $rl, $st, $hr, $oth);
            }

            $worksList = Works::getScheduleByWeek($week);
            
            require_once (ROOT."/views/cnc/schedule.php");
            return true;
        }
    }


?>