<?php include (ROOT."/views/layouts/header.php");?>
    <table class="bordered">
        <tr>
            <th><h3> Week </h3></th>
            <th><h3> Priority </h3></th>
            <th><h3> Work name </h3></th>
            <th><h3> Reisilanku CNC </h3></th>
            <th><h3> Steps CNC </h3></th>
            <th><h3> Handrails CNC </h3></th>
            <th><h3> Other </h3></th>
            <th><h3> Save changes </h3></th>
        </tr>

        <?php foreach ($worksList as $work): ?>
            <tr>
                <form action="" method ="POST">
                    <td><p><?php echo $work["week"]; ?></p></td>
                    <td><p><?php echo $work["Priority"]; ?></p></td>
                    <td><h4><?php echo $work["work_name"]; ?></h4></td>
                    <td><p><input name = "rl_cnc_prod" type = "text" value = '<?php echo $work["rl_cnc_prod"]; ?>'/></p></td>
                    <td><p><input name = "st_cnc_prod" type = "text" value = '<?php echo $work["st_cnc_prod"]; ?>' /></p></td>
                    <td><p><input name = "hr_cnc_prod" type = "text" value = '<?php echo $work["hr_cnc_prod"]; ?>'/></p></td>
                    <td><p><input name = "cnc_other_prod" type = "text" value = '<?php echo $work["cnc_other_prod"]; ?>'/></p></td>
                    <td><button name="Cnc" type="submit" value ='<?php echo $work["id"];?>'> Save</button></td>
                </form>
            </tr>
        <?php endforeach; ?>
    </table>


<?php include (ROOT."/views/layouts/footer.php");?>