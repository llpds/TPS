<?php include (ROOT."/views/layouts/header.php");?>
    <table class="bordered">
        <tr>
            <th><h3> <?php echo $lang['table']['week'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['priority'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['workName'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['stepsCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['rlCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['handrailsCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['other'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['saveChanges'];?> </h3></th>
        </tr>

        <?php foreach ($worksList as $work): ?>
            <tr>
                <form action="" method ="POST">
                    <td><p><?php echo $work["week"]; ?></p></td>
                    <td><p><?php echo $work["priority"]; ?></p></td>
                    <td><h4><?php echo $work["work_name"]; ?></h4></td>
                    <td>
                        <p><input name = "st_cnc_prod" type = "text" value = '<?php echo $work["st_cnc_prod"]; ?>' /></p>
                        <p><?php if (!empty($work["st_material"])) {echo $work["st_material"];} else { echo $lang['msg']['findMaterial'];} ?></p>
                    </td>
                    <td>
                        <p><input name = "rl_cnc_prod" type = "text" value = '<?php echo $work["rl_cnc_prod"]; ?>'/></p>
                        <p><?php if (!empty($work["rl_material"])) {echo $work["rl_material"];} else { echo $lang['msg']['findMaterial'];} ?></p>
                    </td>
                    <td>
                        <p><input name = "hr_cnc_prod" type = "text" value = '<?php echo $work["hr_cnc_prod"]; ?>'/></p>
                        <p><?php if (!empty($work["hr_material"])) {echo $work["hr_material"];} else { echo $lang['msg']['findMaterial'];} ?></p>
                    </td>
                    <td>
                        <p><input name = "cnc_other_prod" type = "text" value = '<?php echo $work["cnc_other_prod"]; ?>'/></p>
                    </td>
                    <td>
                        <button name="Cnc" type="submit" value ='<?php echo $work["id"];?>'> <?php echo $lang['button']['save'];?></button>
                    </td>
                </form>
            </tr>

        <?php endforeach; ?>
    </table>


<?php include (ROOT."/views/layouts/footer.php");?>