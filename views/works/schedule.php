<?php   include (ROOT."/views/layouts/header.php");?>
        <form method ="POST" action="">
            <input name ="week" type="text"/>
            <button name="submit" type="submit"> <?php echo $lang['button']['searchByWeek'];?></button>
        </form>
    <table class="bordered">
        <tr>
            <th><h3> <?php echo $lang['table']['week'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['priority'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['workName'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['stepsCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['rlCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['handrailsCnc'];?> </h3></th>
            <th><h3> <?php echo $lang['table']['saveChanges'];?> </h3></th>
        </tr>

            <?php foreach ($worksList as $work): ?>
                <tr>
                    <form action="" method = "POST">
                            <td><p><input name = "week" type="text" value ='<?php echo $work["week"]; ?>'/></p></td>
                            <td><p><input name = "priority" type="text" value ='<?php echo $work["priority"]; ?>'/></p></td>
                            <td><h4><?php echo $work["work_name"]; ?></h4></td>
                            <td><p><?php echo $work["st_cnc_prod"]; ?></p></td>
                            <td><p><?php echo $work["rl_cnc_prod"]; ?></p></td>
                            <td><p><?php echo $work["hr_cnc_prod"]; ?></p></td>
                            <td><button name="ScheduleSubm" type="submit" value ='<?php echo $work["id"];?>'> <?php echo $lang['button']['save'];?></button></td>
                    </form>
                </tr>
            <?php endforeach; ?>
    </table>
<?php    include (ROOT."/views/layouts/footer.php");?>

