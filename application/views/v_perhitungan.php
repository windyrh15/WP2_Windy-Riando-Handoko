<!DOCTYPE html>
<html>
    <title>Perhitungan</title>
    <body>
        <h1>Perhitungan +</h1>
        <form action="<?= base_url('latihan1/penjumlahan') ?>" method="post">
            <table>
                <tr>
                    <td>Nilai 1</td>
                    <td>:</td>
                    <td><input type="text" name="nilai1" id="nilai1"></td>
                </tr>
                <tr>
                    <td>Nilai 2</td>
                    <td>:</td>
                    <td><input type="text" name="nilai2" id="nilai2"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>