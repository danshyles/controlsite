<html>
Hello World!

<form action="senddata.php" method="post">
<input type="submit" value="click to add a row">
</form>

<?php
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

    $sql = "SELECT id, reading FROM statevar";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["ID"]. " - reading: " . $row["reading"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>

</html>
