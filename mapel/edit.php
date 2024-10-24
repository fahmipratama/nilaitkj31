<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mapel</div>
                <div class="col-4">
                    <a href="?m=mapel&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM subjects WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query)
            ?>
            <div class="card-body">
                <form action="?m=mapel&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="subject" value="<?= $r['subject'] ?>" class="form-control" placeholder="Nama Mapel" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="hours" value="<?= $r['hours'] ?>" class="form-control" placeholder="Waktu Belajar" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                        <input type="reset" class="btn btn-warning">&nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>