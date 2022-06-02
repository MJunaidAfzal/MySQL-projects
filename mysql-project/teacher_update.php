<?php
    include ("connect.php");
    $id = $_POST['id'];
    $teacher_name = $_POST['teacher_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $class_id = $_POST['class_id'];
    $sql = "UPDATE teachers SET teacher_name='$teacher_name', email='$email', contact='$contact' , class_id='$class_id' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>