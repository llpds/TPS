<?php
    include_once (ROOT."/models/Works.php");
    include_once (ROOT."/models/User.php");


    class WorksController{

        public function actionList(){
            $userId = User::checkLogged();
            
            $worksList = [];
            $worksList = Works::getWorksList();

            require_once (ROOT."/views/works/list.php");
            return true;
        }


        public function actionChoose(){
            $worksNameList = [];
            $worksNameList = Works::getWorksNameList();

            require_once (ROOT."/views/works/choose.php");
            return true;
        }

        public function actionInput(){
            $errors = null;
            $worksNameList = [];
            $worksNameList = Works::getWorksNameList();

            if(isset($_POST["submit"])){
                $name = $_POST["workName"];
                            
                if ($name != null){
                    if(in_array($name,$worksNameList)){
                        $errors [] = "This name is used for other work.";
                    }else{
                            $week = $_POST["week"];
                            $rl = $_POST["rlMaterial"];
                            $st = $_POST["stMaterial"];
                            $hr = $_POST["hrMaterial"];
                            $result = Works::input($name, $week, $rl, $st, $hr);
                    }
                } else{
                    $errors [] = "Name of work can not be empty.";
                }    
            }


            require_once (ROOT."/views/works/input.php");
            return true;
        }

        public function actionEdit(){
            $errors = null;
            $saveErrors = null;
            $saveStatus = null;
            $worksNameList = [];
            $worksNameList = Works::getWorksNameList();

            if(isset($_POST["work"])){
                $worksName = $_POST["work"];
                if(in_array($worksName,$worksNameList)){
                    $worksItem = [];
                    $worksItem = Works::getWorkByName($worksName);
                    //$name = "";
                } else {
                    $errors [] = "Select the name of an existing work. NAME: ".$worksName." is not in the database";
                }
            }


            if(isset($_POST["workName"])){
                $saveStatus = 1;

                $id = $_POST["id"];
                $worksName = $_POST["workName"];
                $rl = $_POST["rlMaterial"];
                $st = $_POST["stMaterial"];
                $hr = $_POST["hrMaterial"];
                $result = Works::edit($id, $worksName, $rl, $st, $hr);
            }

            require_once (ROOT."/views/works/edit.php");
            return true;
        }

        public function actionShedule(){

            $worksList = [];

            if(isset($_POST["week"])){
                $worksList = Works::getSheduleByWeek($_POST["week"]);
            }else{
                $worksList = Works::getShedule();
            }

            require_once (ROOT."/views/works/shedule.php");
            return true;
        }


    }
?>
