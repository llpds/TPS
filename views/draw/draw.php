<?php include (ROOT."/views/layouts/header.php");?>

    <h3><?php echo $lang['nav']['draw'];?></h3>


    <table class = "bordered">
            <tr>
                <th><h3> <?php echo $lang['draw']['deep'];?> </h3></th>
                <th><h3> <?php echo $lang['draw']['startX'];?> </h3></th>
                <th><h3> <?php echo $lang['draw']['startY'];?> </h3></th>
                <th><h3> <?php echo $lang['draw']['endX'];?> </h3></th>
                <th><h3> <?php echo $lang['draw']['endY'];?> </h3></th>
           </tr>
            <tr>
                <form method ="POST" action="">                
                    <td><h4><input name ="deep" type = "text" value ="<?php if (isset($deep)) echo $deep; ?>"/></h4></td>
                    <td><h4><input name ="startX" type = "text" value ="<?php if (isset($stX)) echo $stX; ?>"/></h4></td>
                    <td><h4><input name ="startY" type = "text" value ="<?php if (isset($stY)) echo $stY; ?>"/></h4></td>
                    <td><h4><input name ="endX" type = "text" value ="<?php if (isset($enX)) echo $enX; ?>"/></h4></td>
                    <td><h4><input name ="endY" type = "text" value ="<?php if (isset($enY)) echo $enY; ?>"/></h4></td>
                    <td><button name="submit" type="submit"> <?php echo $lang['button']['save'];?> </button></td>

                </form>
            </tr>
        </table>

        <?php  if(isset($_POST["submit"])):?>
            <div 
                class='hidden'
                data-stx="<?= $stX; ?>"
                data-sty="<?= $stY; ?>"
                data-enx="<?= $enX; ?>"
                data-enY="<?= $enY; ?>"
            >
            </div>

            <canvas id="tutorial" width="500" height="500"></canvas>
            <script src="template/js/canv.js" onload = "drawdoc()"></script><br>
            <?php echo $templOld;?>
        <?php endif;?>

<!--        <canvas id="test" width="288" height="512"></canvas>
        <script src="template/js/test.js"></script>
        -->
<?php include (ROOT."/views/layouts/footer.php");?>