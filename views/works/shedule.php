<?php   include (ROOT."/views/layouts/header.php");?>
        <form method ="POST" action="">
            <input name ="week" type="text"/>
            <button name="submit" type="submit"> Search by week </button>
        </form>
    <table class="bordered">
        <tr>
            <th><h3> Week </h3></th>
            <th><h3> Priority </h3></th>
            <th><h3> Id </h3></th>
            <th><h3> Work name </h3></th>
            <th><h3> Reisilanku CNC </h3></th>
            <th><h3> Rl date </h3></th>
            <th><h3> Steps CNC </h3></th>
            <th><h3> St Date </h3></th>
            <th><h3> Handrails CNC </h3></th>
            <th><h3> Hr date </h3></th>
        </tr>

        <?php foreach ($worksList as $work): ?>
            <tr>
                <td><p><?php echo $work["week"]; ?></p></td>
                <td><p><?php echo $work["Priority"]; ?></p></td>
                <td><p><?php echo $work["id"]; ?></p></td>
                <td><h4><?php echo $work["work_name"]; ?></h4></td>
                <td><p><?php echo $work["rl_cnc_prod"]; ?></p></td>
                <td><p><?php echo $work["rl_cnc_date"]; ?></p></td>
                <td><p><?php echo $work["st_cnc_prod"]; ?></p></td>
                <td><p><?php echo $work["st_cnc_date"]; ?></p></td>
                <td><p><?php echo $work["hr_cnc_prod"]; ?></p></td>
                <td><p><?php echo $work["hr_cnc_date"]; ?></p></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php    include (ROOT."/views/layouts/footer.php");?>

