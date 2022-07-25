<?php
include("../../Model/model.php");

if(isset($_POST['input'])){
    $input =$_POST['input'];

    $connection = new db();
    $conobj=$connection->opencon();
    $userQuery=$connection->Search($input,"deliver",$conobj);
    if ($userQuery->num_rows > 0) 
    {
        ?>
        <div class="Section">
        <table class="table table-bordered table-striped mt-4">
        <thead>
        <tr>
           <th>&nbsp;Name&nbsp;</th>
           <th>&nbsp;Email&nbsp;</th>
           <th>&nbsp;Phone&nbsp;</th>
           <th>&nbsp;City&nbsp;</th>
           <th>&nbsp;Area&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $userQuery->fetch_assoc()){
            $name=$row["fname"];
            $email=$row["mail"];
            $phone=$row["phone"];
            $city=$row["city"];
            $area=$row["area"];
            ?>


            <tr>
                <td>&nbsp;&nbsp;<?php echo $name; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $email; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $phone; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $city; ?>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;<?php echo $area; ?>&nbsp;&nbsp;</td>
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