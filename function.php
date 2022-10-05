<?php
//koneksi
$conn = mysqli_connect("localhost", "root", "", "sistem_krs_jwp");

//ambil data dri tabel data base
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

?>