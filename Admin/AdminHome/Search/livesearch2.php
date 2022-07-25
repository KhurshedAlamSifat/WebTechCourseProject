<?php
include("../../Model/model.php");

if(isset($_POST['input'])){
    $input =$_POST['input'];

    $connection = new db();
    $conobj=$connection->opencon();
    $userQuery=$connection->Search($input,"seller",$conobj);
    if ($userQuery->num_rows > 0) 
    {
        ?>
        <div class="Section">
        <table class="table table-bordered table-striped mt-4">
        <thead>
        <tr>
           <th>&nbsp;Name&nbsp;</th>
           <th>&nbsp;Gender&nbsp;</th>
           <th>&nbsp;Email&nbsp;</th>
           <th>&nbsp;publication&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $userQuery->fetch_assoc()){
            $name=$row["fname"];
            $email=$row["mail"];
            $gender=$row["gender"];
            $publication=$row["publication"];

            ?>


            <tr>
                <td>&nbsp;&nbsp;<?php echo $name; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $email; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $gender; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $publication; ?>&nbsp;&nbsp;</td>
            </tr>

            <?php

        }
        ?>
        </tbody>
        </table>
        <?php
    } else{
        ?>
        <td>No data founded</td><?php
    }?>
    </div>
    <?php
}

?>