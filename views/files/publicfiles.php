<?php include (ROOT."/views/layouts/header.php");?>

    <h3>Files here</h3>
    <table class = "bordered">
            <tr>
                <th><h3> File </h3></th>
                <th><h3> Other </h3></th>
                <th><h3> Save </h3></th>

           </tr>


            <tr>
                <form method ="POST" action="" enctype="multipart/form-data">
                    <td><h4><input name ="inputfile" type = "file" id="inputfile"/></h4></td>
                    <td><input name ="week" type="text" value="" /></td>
                    <td><button type="submit" value="Click to upload"> Click to upload </button></td>

                </form>
            </tr>
        </table>

        <?php
            if(isset($_FILES['inputfile'])){
                $dest_dir = 'public/'.$_FILES['inputfile']['name'];
                move_uploaded_file($_FILES['inputfile']['tmp_name'], $dest_dir);
                echo 'File uploaded';
            }
        ?>


<?php include (ROOT."/views/layouts/footer.php");?>