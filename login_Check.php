<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="ukccms";
    $data=mysqli_connect($host,$user,$password,$db);

    if($data===false)
    {
        die("Connection Error");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=$_POST['Uname'];
        $pass = $_POST['Pass'];
        $sql ="select * from user where username='".$name."' AND password='".$pass."'";

    }
?>