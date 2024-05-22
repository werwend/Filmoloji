<?php
session_start();

// Oturumu temizleme işlemi
session_unset();
session_destroy();


header("Location: homepage.php");
exit;
?>
