<?php
    include ("connect.php");
    $teacher_name = $_POST['teacher_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $class_id = $_POST['class_id'];
    $sql = "INSERT into teachers (teacher_name,email,contact,class_id) VALUE ('$teacher_name','$email','$contact','$class_id')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>