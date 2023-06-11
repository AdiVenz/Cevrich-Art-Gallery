<?php
    $Name =$_POST['Name'];
    $email =$_POST['email'];
    $number =$_POST['number'];
    $link =$_POST['link'];
    $commi =$_POST['commission'];

    $conn = new mysqli('localhost:3306','root','','commission');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else  {
        $stmt = $conn->prepare("Insert into commission(Name, email, number, link, commission) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $Name, $email, $number, $link, $commi);
        $stmt->execute();
        echo "Thank you for your commission!";
        $stmt->close();
        $conn->close();
    }
?> 