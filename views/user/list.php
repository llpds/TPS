<?php    include (ROOT."/views/layouts/header.php");?>

    <p>Workers list:</p>
    <form action="create" method="POST">
        <button type="submit"> <?php echo $lang['button']['new'];?> </button>
    </form>
    <table class="bordered">
            <tr>
                <th><h3> <?php echo $lang['table']['id'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['worker'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['access'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['action'];?> </h3></th>
            </tr>

            <?php foreach ($usersList as $user): ?>
                <tr>
                    <td><h4><?php echo $user["id"]; ?></h4></td>
                    <td><h4><?php echo $user["name"]; ?></h4></td>
                    <td><p><?php echo $user["access"]; ?></p></td>
                </tr>
            <?php endforeach; ?>
        </table>


<?php    include (ROOT."/views/layouts/footer.php");?>