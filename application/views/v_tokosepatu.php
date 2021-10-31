<!DOCTYPE html>
<html>
    <head>
        <title>Toko Sepatu</title>
    </head>
    <body>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Tokosepatu/cetak'); ?>

        <h1>Toko Sepatu Sumber Makmur</h1>

        <form action="<?= base_url('Tokosepatu/cetak'); ?>" method="post">
        <table>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <th><input type="text" name="nama" id="nama"></th>
            </tr>
            <tr>
                <th>Nomor Telephone</th>
                <th>:</th>
                <th><input type="text" name="notlp" id="notlp"></th>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <th>:</th>
                <th><select name="merk" id="merk">
                    <option value="">Pilih Merk Sepatu</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                        <option value="Bucherri">Bucherri</option>
                </select></th>

            </tr>
            <tr>
            <th>Ukuran Sepatu</th>
                <th>:</th>
                <th><select name="ukuran" id="ukuran">
                    <option value="">Pilih Ukuran Sepatu</option>
                        <option value=32>32</option>
                        <option value=33>33</option>
                        <option value=34>34</option>
                        <option value=35>35</option>
                        <option value=36>36</option>
                        <option value=37>37</option>
                        <option value=38>38</option>
                        <option value=39>39</option>
                        <option value=40>40</option>
                        <option value=41>41</option>
                        <option value=42>42</option>
                        <option value=43>43</option>
                        <option value=44>44</option>
                </select></th>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="Submit"></td>
            </tr>
            
        </table>
        </form>
    </body>
</html>
