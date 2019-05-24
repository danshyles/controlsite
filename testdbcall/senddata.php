<?php
    //return to original page after submit
    header('Location: index.php');

    echo "Sending Request..."; // Your code here
    $servername = "localhost";
    $username = "root";
    $password = "Andromeda";
    $dbname = "testdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //$sql = "SELECT id, reading FROM statevar";
    $sql = "INSERT INTO statevar (reading) VALUES (10101)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

