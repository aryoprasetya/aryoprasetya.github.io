<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    $to = "aryoyulioo@gmail.com"; // Ganti dengan alamat email Anda
    $subject = $subjek;
    $message = "Nama: $nama\nEmail: $email\nNomor Telepon: $nomor_telepon\n\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan Anda telah terkirim.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengirim pesan.";
    }
}
?>
