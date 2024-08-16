<div>
    <div style="margin-top: 5px;margin-bottom:5px;" class="d-flex">
        <form method="post" action="<?= BASEURL ?>/Produk" enctype="multipart/form-data">
            <label for="kode">Kode Produk</label>
            <input type="text" name="kode" id="kode">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama">
            <label for="detail">Detail</label>
            <input type="text" name="detail" id="detail">
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="qty">
            <label for="gambar_product">Foto Produk</label>
            <input type="file" name="gambar_product" id="gambar_product">
            <input type="submit" name="up_produk" value="Upload">
        </form>
    </div>
</div>