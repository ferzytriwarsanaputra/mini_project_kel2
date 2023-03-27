<div class="container">

    <center>
        <h1>DAFTAR PESANAN</h1>
    </center>

    <table class="table">
        <th>NIK</th>
        <th>Nama Pemilik</th>
        <th>ID Pesanan</th>
        <th>Estimasi</th>
        <th>Alamat</th>
        <th>Jenis Bayar</th>
        <th>Nama Motor</th>
        <th>Muatan</th>
        <th>Harga</th>
        <th>Jenis Motor</th>
        <th>Total Harga</th>

        <?php foreach ($data['pesan'] as $pesanan) : ?>



            <tr>
                <td><?= $pesanan['nik'] ?></td>
                <td><?= $pesanan['nama_pemilik'] ?></td>
                <td><?= $pesanan['id_pesanan'] ?></td>
                <td><?= $pesanan['estimasi'] ?></td>
                <td><?= $pesanan['Alamat'] ?></td>
                <td><?= $pesanan['jenis_pembayaran'] ?></td>
                <td><?= $pesanan['nama_motor'] ?></td>
                <td><?= $pesanan['muatan'] ?></td>
                <td><?= $pesanan['harga'] ?></td>
                <td><?= $pesanan['jenis_motor'] ?></td>
                <td><?= $pesanan['total_harga'] ?></td>

            </tr>
        <?php endforeach ?>
    </table>
</div>