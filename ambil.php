<?php 
    session_start();
        //mendapatkan id matkul
        $id = $_GET['id']; 
        // jika matkul sudah dipilih maka muncul pesan eror
        if (isset($_SESSION ['lihatkrs'] [$id]))
        {
            $_SESSION['lihatkrs'][$id]=1;
            echo "<script>alert('Erorr Anda sudah menambahkan matkul ini');</script>";
            echo "<script>location='lihat_krs.php';</script>";
        }
        // jika matkul belum dipilih maka masuk ke tabel
        else {
            $_SESSION['lihatkrs'][$id]=1; 
            echo "<script>alert('Mata Kuliah berhasil ditambahkan');</script>";
            echo "<script>location='lihat_krs.php';</script>";

        }

    
?>
