<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formaddedit";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
    $sql = "DELETE FROM `productes` WHERE id=" .  $_POST["id"];
        

    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    
    
    header('Location: ex2FormLlistat.php');

?>
