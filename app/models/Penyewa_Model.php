<?php

class Penyewa_Model {

    private $table = 'pemilik';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMhs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMotorById($nik)
    {
        $this->db->query('SELECT * FROM kendaraan WHERE nik= :nik');
        $this->db->bind('nik', $nik);
        return $this->db->resultSet();
    }
    public function getMotorById2($id_motor)
    {
        $this->db->query('SELECT * FROM kendaraan WHERE id_motor= :id_motor');
        $this->db->bind('id_motor', $id_motor);
        return $this->db->resultSet();
    }

    public function getSewaById($nik)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nik= :nik');
        $this->db->bind('nik', $nik);
        return $this->db->single();
    }
    public function getCustomerById($nik)
    {
        $this->db->query('SELECT * FROM customer WHERE nik= :nik');
        $this->db->bind('nik', $nik);
        return $this->db->single();
    }
    public function tambahDataMotor($data)
    {
        $query = "INSERT INTO kendaraan VALUES
        (:id_motor, :jenis_motor, :nama_motor, :muatan, :harga, :status_motor, :nik)";

        $this->db->query($query);
        $this->db->bind('id_motor', $data['id_motor']);
        $this->db->bind('jenis_motor', $data['jenis_motor']);
        $this->db->bind('nama_motor', $data['nama_motor']);
        $this->db->bind('muatan', $data['muatan']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('status_motor', $data['status_motor']);
        $this->db->bind('nik', $data['nik']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function tambahPesanMotor($data)
    {
        // var_dump($data);
        $query = "INSERT INTO pesanan VALUES
        (:nik, :nama_pemilik, :id_motor, :id, '', :estimasi)";

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('id_motor', $data['id_motor']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('estimasi', $data['estimasi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataMhs($id)
    {
        $query = "DELETE FROM mhs WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataMotor($data)
    {
        // var_dump($data);
        $query = "UPDATE kendaraan SET
            id_motor = :id_motor,
            jenis_motor = :jenis_motor,
            nama_motor = :nama_motor,
            muatan = :muatan,
            harga = :harga,
            status_motor = :status_motor,
            nik = :nik
            WHERE id_motor = :id_motor
        ";
        $this->db->query($query);
        $this->db->bind('id_motor', $data['id_motor']);
        $this->db->bind('jenis_motor', $data['jenis_motor']);
        $this->db->bind('nama_motor', $data['nama_motor']);
        $this->db->bind('muatan', $data['muatan']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('status_motor', $data['status_motor']);
        $this->db->bind('nik', $data['nik']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahSewaData($data)
    {
        // var_dump($data);
        $query = "UPDATE pemilik SET
            nik = :nik,
            nama_pemilik = :nama_pemilik,
            jeniskelamin = :jeniskelamin,
            Alamat = :Alamat,
            password = :password
            WHERE nik = :nik
        ";
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('jeniskelamin', $data['jeniskelamin']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahCustomerData($data)
    {
        // var_dump($data);
        $query = "UPDATE customer SET
            nik = :nik,
            nama_pemilik = :nama_pemilik,
            jeniskelamin = :jeniskelamin,
            Alamat = :Alamat,
            password = :password
            WHERE nik = :nik
        ";
        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('jeniskelamin', $data['jeniskelamin']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getMotorAllCustomer()
    {
        $query = 'SELECT pemilik.nama_pemilik, pemilik.Alamat, kendaraan.* FROM kendaraan
        INNER JOIN pemilik
        ON kendaraan.nik = pemilik.nik';

        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getPesanan($nik)
    {
        $query = 'SELECT nama_pemilik FROM customer WHERE nik = :nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);

        $nama_pemilik = $this->db->single();
        $nama = $nama_pemilik['nama_pemilik'];


        return $this->db->single();


    }

    public function inner3($nama)
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
        kendaraan.jenis_motor,
        (pesanan.estimasi*kendaraan.harga) AS total_harga
        FROM (((pesanan INNER JOIN pemilik ON pesanan.nik = pemilik.nik)
        INNER JOIN pembayaran ON pesanan.id = pembayaran.id)
        INNER JOIN kendaraan ON pesanan.id_motor = kendaraan.id_motor) WHERE pesanan.nama_pemilik = :nama_pemilik';

        $this->db->query($query);
        $this->db->bind('nama_pemilik', $nama);

        return $this->db->resultSet();

    }
    public function deletePesanan($id)
    {
        $query = 'DELETE FROM pesanan WHERE id_pesanan = :id_pesanan';
        $this->db->query($query);
        $this->db->bind('id_pesanan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMotor($id)
    {
        $query = 'DELETE FROM kendaraan WHERE id_motor = :id_motor';
        $this->db->query($query);
        $this->db->bind('id_motor', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

// SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
// FROM ((Orders
// INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
// INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);