<html> 

    <head>
         <title>pertemuan 2</title>
    </head> 
    <body>
        <?php echo form_open('latihan1/penjumlahan'); ?>
        <form action="<?= base_url('latihan1/penjumlahan'); ?>" method="get">
        <table>
            <tr>
                <th>Nilai1</th>
                <th>:</th>
                <th><input type="text" name="nilai1"></th>
            </tr>
            <tr>
                <th>Nilai2</th>
                <th>:</th>
                <th><input type="text" name="nilai2"></th>
            </tr>
             <tr>
                <td colspan="3" align="center"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </body>
</html>