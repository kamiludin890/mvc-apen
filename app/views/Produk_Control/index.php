<div>
    <div style="margin-top: 5px;margin-bottom:5px;" class="d-flex">
        <form method="post" action="<?= BASEURL ?>/Produk" enctype="multipart/form-data">
            <label for="kode">Kode Produk</label>
            <input type="text" name="kode" id="kode">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama">
            <label for="detail">Detail</label>
            <textarea type="text" name="detail" id="detail" style="height:20px;"></textarea>
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="qty">
            <label for="gambar_product">Foto Produk</label>
            <input type="file" name="gambar_product" id="gambar_product">
            <input type="submit" name="up_produk" value="Upload">
        </form>
    </div>
    <div class="produk">
        <table style="border-collapse: collapse;width: 100%;">
            <th>
                <tr style="border: 2px solid black;">
                    <td style="border: 2px solid black;text-align:center;">No</td>
                    <td style="border: 2px solid black;text-align:center;width: 6.5%;">Nama</td>
                    <td style="border: 2px solid black;text-align:center;width: 10%;">Kode Produk</td>
                    <td style="border: 2px solid black;text-align:center;">Detail</td>
                    <td style="border: 2px solid black;text-align:center;">Qty</td>
                    <td style="border: 2px solid black;text-align:center;">Gambar Produk</td>
                </tr>
            </th>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['produk'] as $rows):
                ?>
                    <tr style="border: 2px solid black;">
                        <td style="border: 2px solid black;text-align:center;"><?= $no++ ?></td>
                        <td style="border: 2px solid black;text-align:start;">&nbsp<?= $rows['nama'] ?></td>
                        <td style="border: 2px solid black;text-align:start;">&nbsp<?= $rows['kode'] ?></td>
                        <td style="border: 2px solid black;"><?= $rows['detail'] ?></td>
                        <td style="border: 2px solid black;text-align:center;width: 4%;"><?= $rows['qty'] ?></td>
                        <td style="border: 2px solid black;text-align:center;"><img src="<?= IMG_DB . $rows['img'] ?>" alt="" style="width:270px;"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>