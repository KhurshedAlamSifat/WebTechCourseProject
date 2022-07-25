<?php

include "../../Model/model.php";
?>
<?php

if(isset($_POST["sellersignup"]))
{
    
    if(!empty($_POST["sellername"]) || isset($_post["sellergender"]) || !empty($_POST["buyeremail"]) || 
    preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["buyeremail"]) 
    || !empty($_POST["sellerpublication"]) || !strlen($_POST["sellerpass"])<6)
    {
        $name=$_POST["sellername"];
        $gender=$_POST["sellergender"];
        $email=$_POST["selleremail"];
        $pb=$_POST["sellerpublication"];
        $pass=$_POST["sellerpass"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $gender,$email, $pb, $pass,"seller", $conobj);
        $mydb->closecon($conobj);
    }
}

?>