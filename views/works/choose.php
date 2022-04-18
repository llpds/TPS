<?php
    include (ROOT."/views/layouts/header.php");
?>

        <form method ="POST" action="">
            <input name ="work" type="text" list="worksNameList" />
            <button type="submit"> Search </button>
            <datalist id = "worksNameList">
                <?php
                    foreach($worksNameList as $val){
                        echo "<option>".$val."</option>";
                    }
                ?>
            </datalist>
        </form>

<?php
    include (ROOT."/views/layouts/footer.php");
?>
