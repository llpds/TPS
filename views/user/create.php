<?php    include (ROOT."/views/layouts/header.php");?>


    <H3> <?php echo $lang["label"]["new worker"];?>:</H3>
        <table class="newworker">
        <form method ="POST" action="/user/store">
                <tr>
                    <td><h3> <?php echo $lang["table"]["name"];?> </h3></td>
                    <td><h4> <input required name ="name" type="text" value=""/> </h4></td>
                </tr>
                <tr>
                    <td><h3><?php echo $lang["table"]["access"]; ?></h3></td>
                    <td>
                        <select class="select" name="access">
                            <?php foreach($accessList as $right):?>
                            <option><?php echo $right['right']; ?></option> 
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h3><?php echo $lang["table"]["password"]; ?></h3></td>
                    <td><input required name ="password" type="text" value=""/></td>
                </tr>
                <tr>
                <td colspan="2" align="right"><button  name="createWorker" type="submit"> <?php echo $lang['button']['save'];?> </button></td>
                </tr>
            </form>    
        </table>

<?php    include (ROOT."/views/layouts/footer.php");?>