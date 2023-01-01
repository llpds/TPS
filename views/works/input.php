<?php
    include (ROOT."/views/layouts/header.php");
?>

<?php
    if(isset($result)) echo $lang['msg']['newWorkSaved'];
    if(is_array($errors)){
        foreach ($errors as $err){
            echo $err."<br>";
        }
    }
?>

        <table class = "bordered">
            <tr>
                <th><h3> <?php echo $lang['table']['workName'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['week'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['stMaterial'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['rlMaterial'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['hrMaterial'];?> </h3></th>
                <th><h3> <?php echo $lang['table']['saveChanges'];?> </h3></th>
           </tr>
            <tr>
                <form method ="POST" action="">
                    <td><h4><input name ="workName" type = "text" value =""/></h4></td>
                    <td><input name ="week" type="text" value="" /></td>
                    <td><input name ="stMaterial" type="text" value=""/></td>
                    <td><input name ="rlMaterial" type="text" value="" /></td>
                    <td><input name ="hrMaterial" type="text" value=""/></td>
                    <td><button name="submit" type="submit"> <?php echo $lang['button']['save'];?> </button></td>

                </form>
            </tr>
        </table>
<?php
        include (ROOT."/views/layouts/footer.php");
?>
