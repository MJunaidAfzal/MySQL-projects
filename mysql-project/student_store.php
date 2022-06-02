<?php
    include ("connect.php");
    $student_name = $_POST['student_name'];
    $age = $_POST['age'];
    $subject = $_POST['subject'];
    $teacher_id = $_POST['teacher_id'];
    $sql = "INSERT into students (student_name,age,subject,teacher_id) VALUE ('$student_name','$age','$subject','$teacher_id')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>