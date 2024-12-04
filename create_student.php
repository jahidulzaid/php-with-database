<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $std_id = $_POST['student_id']; 
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $cgpa = $_POST['cgpa'];


    $sql = "INSERT INTO students(student_id, name, email, cgpa) VALUES ('$std_id','$name','$email','$cgpa')";
    
    if ($connection->query($sql) === TRUE) {
        echo "<br>New student record has been inserted!";
    } else {
        echo "Error: $sql <br>" . $connection->error;
    }

}




?>


<form method="POST" action="create_student.php">
    <label for="student_id">Student ID:</label>
    <input type="number" id="student_id" name="student_id" required><br><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="cgpa">CGPA:</label>
    <input type="number" id="cgpa" name="cgpa" step="0.01" min="0" max="4.00" required><br><br>

    <input type="submit" value="Create Student">
</form>
