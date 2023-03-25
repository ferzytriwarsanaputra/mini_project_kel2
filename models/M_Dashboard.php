<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" action="koneksi/proses.php?id=daftar">
                    <div class="form-group">
                    <label for="">Nama Pengguna</label>
                    <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" id="" class="form-control"  required placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass" id="" class="form-control" required placeholder="" aria-describedby="helpId">
                    </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>