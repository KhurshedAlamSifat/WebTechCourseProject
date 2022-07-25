<?php

include "../../Model/model.php";
?>
<?php

if(isset($_POST["deliversignup"]))
{
    
    if(!empty($_POST["delivername"]) || !empty($_POST["deliverphone"]) || !empty($_POST["deliveremail"]) || 
    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["buyeremail"]) 
    || !empty($_POST["delivercity"]) ||!empty($_POST["deliverarea"])|| !strlen($_POST["buyerpass"])<6)
    {
        $name=$_POST["delivername"];
        $phn=$_POST["deliverphone"];
        $email=$_POST["deliveremail"];
        $city=$_POST["delivercity"];
        $area=$_POST["deliverarea"];
        $pass=$_POST["deliverpass"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $email, $phn, $city, $area, $pass,"deliver", $conobj);
        $mydb->closecon($conobj);
    }
}

?>