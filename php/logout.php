<?php
session_start();
$base = "http://localhost/";
$_SESSION['username'] = '';
$_SESSION['status'] = '';
unset($_SESSION['username']);
unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Berhasil Keluar !');window.location='" . $base . "index.php'</script>";
