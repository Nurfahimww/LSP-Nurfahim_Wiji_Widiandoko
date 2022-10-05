<?php
    session_start();
    $id = $_GET["id"];
    unset($_SESSION ["lihatkrs"] [$id]);

    echo "<script>alert('Mata Kuliah berhasil berhasil dihapus');</script>";
    echo "<script>location='lihat_krs.php';</script>";
?>