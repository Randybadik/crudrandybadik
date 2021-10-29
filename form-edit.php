<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-nasabah.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_nasabah WHERE id=$id";
$query = mysqli_query($db, $sql);
$nasabah = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit nasabah | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit nasabah</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $nasabah['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $nasabah['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <textarea name="alamat"><?php echo $nasabah['alamat'] ?></textarea>
        </p>
        <p>
            <label for="agama">agama: </label>
            <?php $agama = $nasabah['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'katolik') ? "selected": "" ?>>katolik</option>
                <option <?php echo ($agama == 'islam') ? "selected": "" ?>>islam</option>
                <option <?php echo ($agama == 'protestan') ? "selected": "" ?>>protestan</option>
                <option <?php echo ($agama == 'budha') ? "selected": "" ?>>budha</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
            </select>
           
        </p>
        <p>
      
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>