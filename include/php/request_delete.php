<?php
    include 'connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM members WHERE member_id='$id'";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            $conn->close();
            header("location: ../../members/ ");
        }
    }
?>