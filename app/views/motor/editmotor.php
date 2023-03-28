
<div class="container mt-5">
    <h2>Detail Motor</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">id MOtor</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['id_motor'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis MOtor</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['jenis_motor'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Motor</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['nama_motor'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Muatan</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['muatan'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Harga/Hari</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['harga'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['penyewa'][0]['status_motor'] ?>">
        </div>
    </div>
    <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
                Edit Data Motor
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/motor/ubah/<?= $data['penyewa'][0]['nik']; ?>" method="post">
        <input type="hidden" name="nik" value="<?= $data['penyewa'][0]['nik']; ?>">
          <div class="mb-3">
            <label for="id_motor" class="form-label">Id motor</label>
            <input type="text" class="form-control" id="id_motor" placeholder="id_motor misal Yamaha = YMH" name="id_motor" value="<?= $data['penyewa'][0]['id_motor'] ?>">
          </div>
          <div class="mb-3">
            <label for="nama_motor" class="form-label">Nama motor</label>
            <input type="text" class="form-control" id="nama_motor" placeholder="nama motor" name="nama_motor" value="<?= $data['penyewa'][0]['nama_motor'] ?>">
          </div>
          <div class="mb-3">
            <label for="jenis_motor" class="form-label">Jenis motor</label>
            <input type="text" class="form-control" id="jenis_motor" placeholder="jenis motor" name="jenis_motor" value="<?= $data['penyewa'][0]['jenis_motor'] ?>">
          </div>
          <div class="mb-3">
            <label for="muatan" class="form-label">Muatan motor</label>
            <input type="number" class="form-control" id="muatan" placeholder="Muatan motor" name="muatan" value="<?= $data['penyewa'][0]['muatan'] ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Sewa motor</label>
            <input type="number" class="form-control" id="harga" placeholder="Harga Sewa" name="harga" value="<?= $data['penyewa'][0]['harga'] ?>">
          </div>
          <label for="harga" class="form-label">Status Motor</label>
          <input type="hidden" class="form-control" id="harga" placeholder="" name="status_motor" value="<?= $data['penyewa'][0]['status_motor'] ?>">
          <select class="form-select" aria-label="Default select example" name="status_motor" value="<?= $data['penyewa'][0]['status_motor'] ?>" disabled>
            <option value="Tersedia">Tersedia</option>
            <option value="Tidak Tersedia">Tidak Tersedia</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ubah data</button>
          </div>
      </form>
    </div>
  </div>
</div>
