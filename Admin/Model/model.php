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
    function CheckUser($userid,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE userid='$userid' AND pass='$pass'");
        return $result;
    }


    function Search($search,$tablename,$conn){
        $result = $conn->query("SELECT * FROM  $tablename WHERE fname LIKE '{$search}%' OR mail LIKE '{$search}%'");
        return $result;
    }

    function closecon($conn)
    {
        $conn->close();
    }
}
?>