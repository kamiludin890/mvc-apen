<?php
class Produk_Model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllProduk()
    {
        $this->db->query("SELECT * FROM " . DB_NAME . ".db_product ORDER BY id DESC");
        return $this->db->resultSet();
    }
    public function addProduk($kode, $nama, $detail, $qty, $img)
    {
        $query = "INSERT INTO " . DB_NAME . ".db_product (kode,nama,detail,qty,img)VALUES (:kode,:nama,:detail,:qty,:img)";
        $this->db->query($query);
        $this->db->bind('kode', $kode);
        $this->db->bind('nama', $nama);
        $this->db->bind('detail', $detail);
        $this->db->bind('qty', $qty);
        $this->db->bind('img', $img);
        $this->db->execute();
    }
}
