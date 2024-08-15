<?php
// Menggunakan koneksi yang sudah dibuat sebelumnya
include '../config/db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Menyiapkan perintah SQL untuk memasukkan data
    $sql = "INSERT INTO kontak (nama, email, subjek, konten) VALUES (?, ?, ?, ?)";

    // Menyiapkan prepared statement
    $stmt = $conn->prepare($sql);

    // Mengikat parameter ke perintah SQL
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Menjalankan perintah SQL
    if ($stmt->execute()) {
        // Konfigurasi email
        $app_email = "agrimateind@gmail.com";
        $app_pass = "iuyucyfgnycfppfo";

        // Membuat instance PHPMailer
        $mail = new PHPMailer(true);

        // Konfigurasi server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Ganti dengan host SMTP server Anda
        $mail->SMTPAuth = true;
        $mail->Username = $app_email;
        $mail->Password = $app_pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Pengaturan email penerima dan pengirim
        $mail->setFrom($app_email, 'Sekolah Lingkungan');
        $mail->addAddress($email, $name);  // Mengirim ke email yang diinput pengguna

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = 'Terima kasih atas pesan Anda: <b>' . $message . '</b>';
        $mail->AltBody = 'Terima kasih atas pesan Anda: ' . $message;

        // Mengirim email
        $mail->send();
      echo "OK";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Menutup koneksi
$conn->close();
?>
