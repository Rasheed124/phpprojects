<?php

session_start();
include 'connect.php';


if (!isset($_SESSION['id']) || $_SESSION['id'] <= 0) {
    header("Location: login.php");
}

// Header 
include_once 'header.php';

?>



<div class="container mt-5">
    <h2 class="text-center mb-4">Patients List</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>Code</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Date & Time</th>
                <th>Department</th>
                <th>Doctor</th>
                <th>Duration</th>
                <th>Complaint</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Join `appointments` with `registration` table using a common column (e.g., email or ID)
            $query = "SELECT a.code, r.full_name, r.phone_number, a.date_time, a.department, a.doctor, a.duration, a.complain, a.message 
                      FROM appointments AS a
                      INNER JOIN registration AS r ON a.code = r.id 
                      ORDER BY a.id DESC";

            $result = mysqli_query($connect_db, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['code']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['date_time']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['doctor']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['duration']) . " min</td>";
                    echo "<td>" . htmlspecialchars($row['complain']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['message']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9' class='text-center'>No patients found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>




<?php

// Footer 
require_once 'footer.php';
?>