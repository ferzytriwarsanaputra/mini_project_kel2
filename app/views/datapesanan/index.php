<div class="container mt-5">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id_Pemilik</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">ID Pesanan</th>
        <th scope="col">Estimasi</th>
        <th scope="col">Alamat Motor</th>
        <th scope="col">Jenis Pembayaran</th>
        <th scope="col">Nama Motor</th>
        <th scope="col">Muatan Motor</th>
        <th scope="col">Harga Sewa/hari</th>
        <th scope="col">Jenis Motor</th>
        <th scope="col">Total Harga yang di bayar</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach($data['pesanan'] as $psn) : ?>
            <tr>
                <td><?= $psn['nik'] ?></td>
                <td><?= $psn['nama_pemilik'] ?></td>
                <td><?= $psn['id_pesanan'] ?></td>
                <td><?= $psn['estimasi'] ?></td>
                <td><?= $psn['Alamat'] ?></td>
                <td><?= $psn['jenis_pembayaran'] ?></td>
                <td><?= $psn['nama_motor'] ?></td>
                <td><?= $psn['muatan'] ?></td>
                <td><?= $psn['harga'] ?></td>
                <td><?= $psn['jenis_motor'] ?></td>
                <td><?= $psn['total_harga'] ?></td>
                <td><button type="button" class="btn btn-info"><a href="<?= BASEURL; ?>/datapesanan/konfirmasi/<?= $psn['id_motor']; ?>">Konfirmasi</a></button></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>
</div>