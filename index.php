<!DOCTYPE html>
<html>

<head>
    <title>Belajar Insert Data Form ke Database</title>

</head>

<body>
    <h2>Form Input Data Mahasiswa </h2>
    <form method="post" action="simpan.php">
        <input type="hidden" value="<?php echo $data['id']; ?>" name="id_mahasiswa">
        <table>
            <tr>
                <td>NIM : </td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>

            <!--Tanggal Lahir -->
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>

            <tr>
                <td>Tempat Lahir :</td>
                <td><input type="text" name="tmpt_lahir" required></td>
            </tr>
            <tr>
                <td>Jurusan :</td>
                <td>
                    <select name="jurusan">
                        <option value="Teknik Informatika">-Pilih Jurusan-</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun Masuk :</td>
                <td>
                    <select name="thn_masuk" size="1" id="thn_masuk">
                        <option value="thn_masuk">-Pilih Tahun-</option>
                        <?php
                        for ($i = 2000; $i <= 2020; $i++) {
                            echo "<option value=" . $i . ">" . $i . "</option>";
                        }
                        ?>
                </td>
            </tr>

            <tr>
                <td colspan="2"><button type="submit" value="simpan">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>