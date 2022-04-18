<?php
    include (ROOT."/views/layouts/header.php");
 

  //  echo "<pre>";
  // print_r ($_SESSION);
  //  echo "</pre>";
?>

    <table class="bordered">
        <tr>
            <th><h3> Id </h3></th>
            <th><h3> Work name </h3></th>
            <th><h3> Reisilanku material </h3></th>
            <th><h3> Steps material </h3></th>
            <th><h3> Handrails material </h3></th>
        </tr>

        <?php foreach ($worksList as $work): ?>
            <tr>
                <td><h4><?php echo $work["id"]; ?></h4></td>
                <td><h4><?php echo $work["work_name"]; ?></h4></td>
                <td><p><?php echo $work["rl_material_type"]; ?></p></td>
                <td><p><?php echo $work["st_material_type"]; ?></p></td>
                <td><p><?php echo $work["hr_material_type"]; ?></p></td>
            </tr>
        <?php endforeach; ?>
    </table>


<?php
    include (ROOT."/views/layouts/footer.php");

?>

