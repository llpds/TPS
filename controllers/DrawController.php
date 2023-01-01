<?php
    include (ROOT."/models/Works.php");
    include (ROOT."/models/User.php");

    class DrawController{
        public function actionIndex(){
            
           // $userId = User::loggedCnc();
           if(isset($_POST["submit"])){
                        $deep = $_POST["deep"];
                        $z = 40 - $deep;
                        $stX = $_POST["startX"];
                        $stY = $_POST["startY"];
                        $enX = $_POST["endX"];
                        $enY = $_POST["endY"];

                        $startX = round($enX/2,2);
                        $startY = $stY - 30; 
                        $templOld = "
                            %<br>
                            OXXXX<br>
                            ( Test from template)<br>
                            ( Date will be later )<br>
                            ( TOOLS USED IN THIS PROGRAM )<br>
                            ( T3 - MILLER-14x45  Diam: 13.90 )<br>
                            ( T6 - TENON-TOOL  Diam: 119.60 )<br>
                            ( T8 - FINISHER-60x60  Diam: 60.00 )<br>
                            ( END TOOL LIST )<br>
                            G54<br>
                            M22 ( LEFT SIDE VACUUM START )<br>
                            M21 ( RIGHT SIDE VACUUM START )<br>
                            ( END PROGRAM START )<br>
                            ( START Contour )<br>
                            (TOOL CHANGE START- T3 - MILLER-14x45)<br>
                            G53 G0 G40 Z-10.0<br>
                            M05 S0<br>
                            T3 M06<br>
                            M03 S18000<br>
                            G43 Z100.0 H3<br>
                            D3<br>
                            ( TOOL CHANGE END )<br>
                            ( START 3-ax rough ramp leads)<br>
                            G00 G40 X$startX Y$startY Z95.00<br>
                            G01 G41 X$startX Y$startY Z$z F4000<br>
                            G01 X$startX Y$stY Z$z<br>
                            G01 X$stX Y$stY Z$z F10000<br>
                            G01 X$stX Y$enY Z$z F2100<br>
                            G01 X$enX Y$enY Z$z F9000<br>
                            G01 X$enX Y$stY Z$z F2100<br>
                            G01 X$startX Y$stY Z$z F10000<br>
                            G01 G40 X$startX Y$startY Z$z F4000<br>
                            G00 X$startX Y$startY Z95.00<br>
                            (END 3-ax rough ramp leads - (Contour rough Steps Z-2 R1 - I)<br>
                            (END Contour)<br>
                            S0 M5<br>
                            G53 G90 G00 Z-10.0<br>
                            G0 G40 X3950.0<br>
                            ( VACUUM OFF )<br>
                            M11<br>
                            M12<br>
                            M30<br>
                            %<br>
                            (END OF FILE)
                        ";
            }
        

            require_once (ROOT."/views/draw/draw.php");
            return true;
        }
    }


?>