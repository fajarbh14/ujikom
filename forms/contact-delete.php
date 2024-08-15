<?php 

include '../config/db.php';

# delete contact 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
}

$sql = "DELETE FROM kontak WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: ../admin.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

$conn->close();

?>