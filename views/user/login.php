<?php    include (ROOT."/views/layouts/header.php");?>

<?php
    if (isset($errors) && is_array($errors)){
        foreach ($errors as $err){
            echo "<p>".$err."</p>";
        }
    } else echo "<p>".$lang['msg']['login']."</p>";
?>
    
    <form action="#" method="post">
        <input name="name" type="text" value="<?php echo $lang['table']['name'];?>"/>
        <input name="password" type="password" value="<?php echo $lang['table']['password'];?>"/>
        <button name="submit" type="submit" > <?php echo $lang['button']['login'];?> </button>
    </form>



<?php    include (ROOT."/views/layouts/footer.php");?>