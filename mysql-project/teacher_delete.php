<?php
    include ("connect.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>