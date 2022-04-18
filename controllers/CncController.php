<?php
    include (ROOT."/models/Works.php");
    include (ROOT."/models/User.php");

    class CncController{
        public function ActionSchedule(){
            $week = date("W");
            
            $worksList = [];
            $worksList = Works::getSheduleByWeek($week);
            
            require_once (ROOT."/views/cnc/schedule.php");
            return true;
        }
    }


?>