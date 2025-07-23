<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Catatan Operasional</h4>
        </div>
        <div class="panel-body">
            <a href="operasional_tambah.php" class="btn btn-sm btn-info pull-right">Tambah Catatan</a>
            <br/><br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                <?php 
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM operasional");
                $no = 1;
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['keperluan']; ?></td>
                        <td>
                            <?php if($d['status'] == 1){ ?>
                                <span class="label label-success">Selesai</span>
                            <?php }else{ ?>
                                <span class="label label-warning">Belum Selesai</span>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if($d['status'] == 0){ ?>
                                <a href="operasional_selesai.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-success">Selesai</a>
                            <?php } ?>
                            <a href="operasional_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
