<?php
include("php/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE Id=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    $success = mysqli_stmt_execute($stmt);
    if ($success) {
        echo json_encode(array("success" => true));
    } else {
        $error = mysqli_error($con);
        error_log("Error deleting user: $error");
        echo json_encode(array("success" => false, "error" => $error));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    echo json_encode(array("success" => false, "error" => "Invalid request method"));
}
