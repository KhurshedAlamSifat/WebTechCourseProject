<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="bookshop";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $email, $phn, $city, $area, $pass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (fname, mail, phone, city, area, pass) 
        VALUES ('$fname','$email','$phn','$city','$area','$pass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../../Login/View/deliverlogin.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }
    function CheckUser($email,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE mail='$email' AND pass='$pass'");
        return $result;
    }
    function closecon($conn)
    {
        $conn->close();
    }
}
?>