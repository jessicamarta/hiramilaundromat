<?php include 'header.php'; ?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Catatan Operasional</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="operasional_aksi.php">
                    <div class="form-group">
                        <label>Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" placeholder="Masukkan keperluan operasional..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
