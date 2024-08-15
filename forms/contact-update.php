<?php

include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $konten = $_POST['konten'];
}

// Validate input
if (empty($id) || empty($nama) || empty($email) || empty($subjek) || empty($konten)) {
    echo "<script>alert('All fields are required.'); window.location.href='../admin.php'</script>";
    exit();
}

// Prepare and bind
$stmt = $conn->prepare("UPDATE kontak SET nama=?, email=?, subjek=?, konten=? WHERE id=?");
if ($stmt === false) {
    echo "<script>alert('Error preparing statement: " . $conn->error . "'); window.location.href='../admin.php'</script>";
    exit();
}

$stmt->bind_param("ssssi", $nama, $email, $subjek, $konten, $id);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>alert('Data updated successfully.'); window.location.href='../admin.php'</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='../admin.php'</script>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
