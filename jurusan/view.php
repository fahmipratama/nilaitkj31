<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Jurusan</div>
                <div class="col-4">
                    <a href="?m=jurusan&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Kapasitas</th>
                            <th>Terisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <thbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT * FROM majors";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                <td>' . $no . '</td>
                                <td>' . $r['name'] . '</td>
                                <td>' . $r['capacity'] . '</td>
                                <td>' . $r['fill'] . '</td>
                                <td>
                                <a href="?m=jurusan&s=edit&id=' . $r['id'] . '" class="btn btn-lg btn-warning btn-sm">Edit</a>
                                <a href="?m=jurusan&s=delete&id=' . $r['id'] . '" class="btn btn-lg btn-danger btn-sm" onclick="return confirm(\' Yakin ni mau dihapus?, Menghapus jurusan akan menghilangkan semua data santri pada jurusan tersebut\')">Hapus</a>
                                
                                </td>    
                            </tr>';
                                $no++;
                            }
                        } else {
                            echo '<tr>
                                <td colspan="5" align="center">Data Kosong</td>
                            </tr>';
                        }
                        ?>
                    </thbody>

                </table>
            </div>
        </div>
    </div>
</div>