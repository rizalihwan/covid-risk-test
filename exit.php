<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>alert('Anda Berhasil Keluar!');
document.location.href='index.php'; </script>";
