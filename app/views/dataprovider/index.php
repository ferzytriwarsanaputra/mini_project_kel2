<div class="container mt-5">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">nik_customer</th>
        <th scope="col">Nama</th>
        <th scope="col">jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach($data['provider'] as $psn) : ?>
            <tr>
                <td><?= $psn['nik'] ?></td>
                <td><?= $psn['nama_pemilik'] ?></td>
                <td><?= $psn['jeniskelamin'] ?></td>
                <td><?= $psn['Alamat'] ?></td>
                <td><button type="button" class="btn btn-info"><a href="<?= BASEURL; ?>/dataprovider/hapusProvider/<?= $psn['nik']; ?>">Hapus Provider</button></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>
</div>