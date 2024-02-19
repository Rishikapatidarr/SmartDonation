<?php
   

    $FirstName = $_POST['FirstName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //Database Connection

    $conn = new mysqli('localhost','root','','test');
    if ($conn->connect_error) {
        die('Connection Failed :'. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("Insert into Registration('FirstName','Email','Password')
        values(?,?,?)");
        $stmt->bind_param("sss", $FirstName, $Email,$Password);
        $stmt->execute();
        echo"Registration Successfully...";
        $stmt->close();
        $conn->close();



    }



?>