<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mata Diklat</div>
                <div class="col-4">
                    <a href="?m=mapel&s=add" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=mapel&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="mapel" class="form-control" placeholder="Mata Diklat" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="hours" class="form-control" placeholder="Jam" required>
                    </div>
            </div>
            <div class="mb-3">
                <input type="submit" name="save" value="Simpan" class="btn btn-primary">
                <input type="reset" class="btn btn-warning">&nbsp;
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>