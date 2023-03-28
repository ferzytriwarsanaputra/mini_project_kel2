<div class="container">
    <h2>Daftar Motor</h2>
<div class="d-flex flex-row m-3">
    <?php if (!empty($data['motor'][0]['nama_pemilik'])) : ?>
      <?php foreach ($data['motor'] as $pnw) : ?>
        <div class="card text-white bg-primary m-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Profile Motor</h5>
            <p class="card-text">Pemilik : <?= $pnw['nama_pemilik']; ?></p>
            <p class="card-text">Jenis Motor : <?= $pnw['jenis_motor']; ?></p>
            <p class="card-text">Nama Motor : <?= $pnw['nama_motor']; ?></p>
            <p class="card-text">Muatan : <?= $pnw['muatan']; ?></p>
            <p class="card-text">Harga/Hari : <?= $pnw['harga']; ?></p>
            <p class="card-text">Status Motor : <?= $pnw['status_motor']; ?></p>
            <p class="card-text">Alamat : <?= $pnw['Alamat']; ?></p>
          </div>
        </div>
      <?php endforeach ?>
    <?php endif ?>
    </div>