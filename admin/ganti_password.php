<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "oke"){
                echo "<div class='alert alert-success'>Kata Sandi telah diganti!</div>";
            }
        }
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Kata Sandi</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="ganti_password_aksi.php">
                    <div class="form-group">
                        <label>Masukkan Kata Sandi Baru</label>
                        <input type="password" class="form-control" name="password_baru" placeholder="Masukkan Kata Sandi Baru Anda ..">
                    </div>


                    <br/>


                    <input type="submit" class="btn btn-warning" value="Ganti Kata Sandi">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
