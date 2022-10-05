<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "sistem_krs_jwp");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Isi KRS</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SI KRS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="isi_krs.php">Isi Krs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="lihat_krs.php">Lihat KRS</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
        </nav>
        <div>
        <section>
            <div class = "container">
            <div class="bg-light p-5 rounded">
            <h1> Pengisian KRS Mahasiswa</h1>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>    
                            <th scope="col">Kode Matkul</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Ruang Kuliah</th>
                            <th scope="col">Waktu Kuliah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <?php $i = 1; ?>
                        <?php foreach ($_SESSION ["lihatkrs"] as $id => $jumlah ):?>
                        <!-- menampilkan matkul yang dipilih -->
                        <?php
                        $ambil = $conn->query("SELECT * FROM kuliah
                                WHERE id ='$id' ");
                        $pecah = $ambil->fetch_assoc();
                        ?>
                        <tr>    
                            <td><?= $i; ?></td>
                            <td><?php echo $pecah["kode_matkul"];?></td>
                            <td><?php echo $pecah["nama_matkul"];?></td>
                            <td><?php echo $pecah["nama_dosen"];?></td>
                            <td><?php echo $pecah["ruang_kul"];?></td>
                            <td><?php echo $pecah["waktu_kul"];?></td>
                            <td><a  href="hapus.php?id=<?php echo $id?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php $i ++; ?>
                        <?php endforeach ?>

                    </tbody>
                </table>

                <a href="isi_krs.php" class="btn btn-primary">Tambah Matkul</a>
            
            </div>
            </div>
        </section>
        </div>
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>