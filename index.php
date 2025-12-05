<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #ff52abff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 85%;
            max-width: 900px;
            margin: 50px auto;
            background: #ff27acff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 30px 40px;
        }
        h1 {
            text-align: center;
            color: #ffb9deff;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #ff67c5ff;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn:hover {
            background-color:  #ffb9deff;
        }
        hr {
            border: none;
            border-top: 2px solid #ff61c0ff;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color:  #ffb9deff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #ff75caff;
        }
        tr:hover {
            background-color: #e1ecf9;
        }
        .no-data {
            text-align: center;
            color:  #ffb9deff;
            font-style: italic;
            margin-top: 15px;
        }
        footer {
            text-align: center;
            color: rgba(251, 39, 155, 1)9deff;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📘 Daftar Mahasiswa</h1>

        <a href="tambah.php" class="btn">+ Tambah Data</a>
        <hr>

        <?php
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Prodi</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['prodi']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='no-data'>Belum ada data mahasiswa.</p>";
        }
        ?>

        <footer>
            <p>© 2025 Sistem Survei Pelayanan SKAMVNELA | Politeknik Negeri Lampung</p>
        </footer>
    </div>
</body>
</html>
