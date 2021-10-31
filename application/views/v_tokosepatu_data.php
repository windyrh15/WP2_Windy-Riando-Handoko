<!DOCTYPE html>
<html>
    <head>
        <title>Toko Sepatu</title>
    </head>
    <body>
        <h1>Data Toko Sepatu Sumber Makmur</h1>
        <table>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <th><?= $nama; ?></th>
            </tr>
            <tr>
                <th>Nomor Telephone</th>
                <th>:</th>
                <th><?= $notlp; ?></th>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <th>:</th>
                <th><?= $merk; ?></th>

            </tr>
            <tr>
            <th>Ukuran Sepatu</th>
                <th>:</th>
                <th><?= $ukuran; ?></th>
            </tr>
            <tr>
                <th>Harga</th>
                <th>:</th>
                <th><?= $harga; ?></th>
            </tr>
            <tr>
                <td><a href="<?= base_url('Tokosepatu'); ?>">Kembali</a></td>
            </tr>
        </table>
    </body>
</html>