<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVG</title>
</head>
<body>
    
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "work";


      $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT AVG(id) FROM practise ";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
  
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["AVG(id)"]. "<br>";
  }
    } 
    else {
         echo "0 results";
}
$conn->close();
?>


</body>
</html>