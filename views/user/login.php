<?php    include (ROOT."/views/layouts/header.php");?>

<?php
    if (isset($errors) && is_array($errors)){
        foreach ($errors as $err){
            echo "<p>".$err."</p>";
        }
    } else echo "<p>Hello wayfarer, who are you?</p>";
?>
    
    <form action="#" method="post">
        <input name="name" type="text" value="Name"/>
        <input name="password" type="password" value="Password"/>
        <button name="submit" type="submit" > Login </button>
    </form>



<?php    include (ROOT."/views/layouts/footer.php");?>