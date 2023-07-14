<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $servername = "127.0.0.1";
    $username   = "root";
    $password   = "";
    $db         = "webprog2022"; //sesuaikan dengan nama db masing-masing
            
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    $query = "SELECT * FROM contoh_tabel";
    $result = mysqli_query($conn, $query);
    ?>
    <table border=1>
        <thead>
            <th>Nama</th>
            <th>Kota asal</th>
            <th>Fakultas</th>
            <th>Setuju</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            while ($d = mysqli_fetch_array($result)){
                $id         = $d['id'];
                $nama       = $d['nama'];
                $kota       = $d['kota_asal'];
                $fakultas   = $d['fakultas'];
                $setuju     = $d['setuju'];

                echo "<tr>";
                echo "<td>$nama</td>";
                echo "<td>$kota</td>";
                echo "<td>$fakultas</td>";
                echo "<td>$setuju</td>";
                echo "<td><a href='setujui.php?id=$id'>Setujui</td>";
                echo "</tr>";
            } 
            ?>
        </tbody>
    </table>
</body>
</html>