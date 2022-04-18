<?php
    include (ROOT."/views/layouts/header.php");
?>

<?php
    if(isset($result)) echo "New work saved!";
    if(is_array($errors)){
        foreach ($errors as $err){
            echo $err."<br>";
        }
    }
?>

        <table class = "bordered">
            <tr>
                <th><h3> Work name </h3></th>
                <th><h3> Week </h3></th>
                <th><h3> Reisilanku material </h3></th>
                <th><h3> Steps material </h3></th>
                <th><h3> Handrails material </h3></th>
                <th><h3> Save changes here </h3></th>

           </tr>


            <tr>
                <form method ="POST" action="">
                    <td><h4><input name ="workName" type = "text" value =""/></h4></td>
                    <td><input name ="week" type="text" value="" /></td>
                    <td><input name ="rlMaterial" type="text" value="" /></td>
                    <td><input name ="stMaterial" type="text" value=""/></td>
                    <td><input name ="hrMaterial" type="text" value=""/></td>
                    <td><button name="submit" type="submit"> Save </button></td>

                </form>
            </tr>
    </table>
<?php
        include (ROOT."/views/layouts/footer.php");
?>
