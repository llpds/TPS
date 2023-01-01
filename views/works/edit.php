<?php
    include (ROOT."/views/layouts/header.php");
?>



<?php
    //var_dump($_POST);
    //var_dump($worksItem);
    //echo "<br>".$worksItem["id"];

    if(isset($_POST["work"]) && $errors == null):
?>
        <table class = "bordered">
            <tr>
                <th><h3> <?php echo $lang['table']['id'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['workName'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['stepsCnc'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['rlCnc'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['handrailsCnc'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['saveChanges'];?> </h3></th>
           </tr>
            <tr>
                <form method ="POST" action="">
                    <td><h4><input name ="id" type = "text" value ="<?php if(isset($worksItem["id"])) echo $worksItem["id"]; ?>" readonly /></h4></td>
                    <td><h4><input name ="workName" type = "text" value ="<?php if(isset($worksItem["work_name"])) echo $worksItem["work_name"];?>"/></h4></td>
                    <td><input name ="stMaterial" type="text" value="<?php if(isset($worksItem["st_material_type"])) echo $worksItem["st_material_type"]; ?>"/></td>
                    <td><input name ="rlMaterial" type="text" value="<?php if(isset($worksItem["rl_material_type"])) echo $worksItem["rl_material_type"]; ?>" /></td>
                    <td><input name ="hrMaterial" type="text" value="<?php if(isset($worksItem["hr_material_type"])) echo $worksItem["hr_material_type"]; ?>"/></td>
                    <td><button type="submit"> <?php echo $lang['button']['save'];?> </button></td>
                </form>
                    <?php
                        if ($saveErrors != null){
                            foreach ($errors as $error){
                            echo $error."<br>";
                            }
                        }
                    ?>
            </tr>
    </table>
    <?php
    else:?>
        <form method ="POST" action="">
            <input name ="work" type="text" list="worksNameList" autocomplete = "off"/>
            <button type="submit"> <?php echo $lang['button']['searchByName'];?> </button>
            <datalist id = "worksNameList">
                <?php
                    foreach($worksNameList as $val){
                        echo "<option>".$val."</option>";
                    }
                ?>
            </datalist>
        </form>
        <?php   if ($saveStatus == 1) echo "Changhes has saved";
                if ($errors != null){
                    foreach ($errors as $error){
                        echo $error."<br>";
                    }
                }
        ?>

    <?php endif;
    include (ROOT."/views/layouts/footer.php");
?>
