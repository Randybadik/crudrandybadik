<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran nasabah Baru </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran nasabah Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <input type="text" name="alamat" placeholder="Masukkan alamat" />
        </p>
        <p>
            <label for="agama">agama: </label>
            <select name="agama">
                <option>katolik</option>
                <option>islam</option>
                <option>protestan</option>
                <option>Budha</option>
                <option>Hindu</option>
            </select>
        
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>