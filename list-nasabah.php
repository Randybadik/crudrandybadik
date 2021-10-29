<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran nasabah Baru</title>
</head>

<body>
    <header>
        <h3>nasabah yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>agama</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_nasabah";
        $query = mysqli_query($db, $sql);

        while($nasabah = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$nasabah['nama']."</td>";
            echo "<td>".$nasabah['alamat']."</td>";
            echo "<td>".$nasabah['agama']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$nasabah['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$nasabah['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>