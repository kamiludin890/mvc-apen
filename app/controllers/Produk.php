<?php
class Produk extends Controllers
{
    public function index()
    {
        if (!empty($_POST['up_produk'])) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $detail = $_POST['detail'];
            $qty = $_POST['qty'];
            $target_dir = "../Database/img/";
            $target_file = $target_dir . basename($_FILES['gambar_product']['name']);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $nama_barang = "$target_dir$nama.$imageFileType";
            move_uploaded_file($_FILES["gambar_product"]["tmp_name"], $target_file);
            rename($target_file, $nama_barang);
            $img = "$nama.$imageFileType";
            $this->model('Produk_model')->addProduk($kode, $nama, $detail, $qty, $img);
        }

        $data['profile'] = $this->model('Login_model')->UserLogin($_SESSION['sesi']);
        $data['usernameId'] = $this->model('User_model')->getUserName($data['profile'][0]);
        $data['judul'] = 'Produk';
        $data['produk'] = $this->model('Produk_model')->getAllProduk();
        if (empty($_SESSION['sesi'])) {
            echo "<script>window.location='" . BASEURL . "/Login';</script>";
        } else {
            $this->view('Layout/header', $data);
            $this->view('Produk/Index');
            $this->view('Layout/footer');
        }
    }
}
