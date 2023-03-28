<?php

class Admin_Model{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPesanan()
    {
        $query = 'SELECT pesanan.nik,
        pesanan.nama_pemilik,
        pesanan.id_pesanan,
        pesanan.estimasi,
        pemilik.Alamat,
        pembayaran.jenis_pembayaran,
        kendaraan.nama_motor,
        kendaraan.muatan,
        kendaraan.harga,
        kendaraan.id_motor,
        kendaraan.jenis_motor,
        (pesanan.estimasi*kendaraan.harga) AS total_harga
        FROM (((pesanan INNER JOIN pemilik ON pesanan.nik = pemilik.nik)
        INNER JOIN pembayaran ON pesanan.id = pembayaran.id)
        INNER JOIN kendaraan ON pesanan.id_motor = kendaraan.id_motor)';

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getPesan($id)
    {
        $query = 'SELECT * FROM kendaraan WHERE id_motor = :id_motor';
        $this->db->query($query);
        $this->db->bind('id_motor', $id);
        return $this->db->single();
    }
    public function updateStatus($data, $id)
    {
        $status = "Tidak Tersedia";
        $query = "UPDATE kendaraan SET
        id_motor = :id_motor,
        jenis_motor = :jenis_motor,
        nama_motor = :nama_motor,
        muatan = :muatan,
        harga = :harga,
        status_motor = status_motor,
        nik = :nik
        WHERE id_motor = :id_motor";

        $this->db->query($query);
        $this->db->bind('id_motor', $data['id_motor']);
        $this->db->bind('id_motor', $data['jenis_motor']);
        $this->db->bind('id_motor', $data['nama_motor']);
        $this->db->bind('id_motor', $data['muatan']);
        $this->db->bind('id_motor', $data['harga']);
        $this->db->bind('id_motor', $status);
        $this->db->bind('id_motor', $data['nik']);
        // var_dump($data);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getMotor()
    {
        $query = 'SELECT pemilik.nama_pemilik, pemilik.Alamat, kendaraan.* FROM kendaraan INNER JOIN pemilik ON kendaraan.nik = pemilik.nik';

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getCustomer()
    {
        $query = 'SELECT * FROM customer';

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function delCustomer($nama)
    {
        $query = 'DELETE FROM pesanan WHERE nama_pemilik = :nama_pemilik';
        $this->db->query($query);
        $this->db->bind('nama_pemilik', $nama);
        $this->db->execute();

        $query2 = 'DELETE FROM customer WHERE nama_pemilik = :nama_pemilik';
        $this->db->query($query2);
        $this->db->bind('nama_pemilik', $nama);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getProvider()
    {
        $query = 'SELECT * FROM pemilik';

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function delProvider($nik)
    {
        $query = 'DELETE FROM pesanan WHERE nik = :nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();

        $query3 = 'DELETE FROM kendaraan WHERE nik = :nik';
        $this->db->query($query3);
        $this->db->bind('nik', $nik);
        $this->db->execute();

        $query2 = 'DELETE FROM pemilik WHERE nik = :nik';
        $this->db->query($query2);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

// DELETE P
//   FROM Product P
//   LEFT JOIN OrderItem I ON P.Id = I.ProductId
//  WHERE I.Id IS NULL