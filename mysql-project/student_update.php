<?php
    include ("connect.php");
    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $age = $_POST['age'];
    $subject = $_POST['subject'];
    $teacher_id = $_POST['teacher_id'];
    $sql = "UPDATE students SET student_name='$student_name', age='$age', subject='$subject' , teacher_id='$teacher_id' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>