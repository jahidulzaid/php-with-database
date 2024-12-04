<?php
include 'db_connect.php';

$sql = "SELECT id, student_id, name, email, cgpa FROM students";

$result = $connection->query($sql);
if($result->num_rows>0){
    echo "<table border='1'>
            <tr>
                <th>STUDENT ID</th>
                <th>STUDENT NAME</th>
                <th>EMAIL ADDRESS</th>
                <th>CGPA</th>

                
                <th>ACTIONS</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["student_id"]) . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . htmlspecialchars($row["cgpa"]) . "</td>
                <td>
                    <a href='update_student.php?id=" . urlencode($row["id"]) . "'>Update</a> |
                    <a href='delete_student.php?id=" . urlencode($row["id"]) . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}