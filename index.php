<!DOCTYPE html>
<html>
<head>
    <title>HIRAMI LAUNDROMAT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body style="background:rgb(183, 244, 173)">
    <br/>
    <br/>
    <center>
        <h2>HIRAMI LAUNDROMAT</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php 
            session_start();
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger'>Login gagal! nama pengguna dan kata sandi salah!</div>";
                }else if($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
                }
            }
            ?>          
            
            <form action="login.php" method="post">
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input type="password" class="form-control" name="password">
                        </div>  


                        <input type="submit" class="btn btn-warning" value="Log In">                
                    </div>
                    <br/>
                </div>
            </form>


        </div>
    </div>

    <footer class="text-center text-lg-start" style="background-color: #ffffff; position: fixed; bottom: 0; left: 0; width: 100%; box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);">
    <div class="text-center p-3">
        © 2025 Copyright :
        <a class="text-body" href="https://www.linkedin.com/in/jessicamartagraceselasilaen/" target="_blank">Jessica Marta Gracesela Silaen</a>
    </div>
</footer>

</body>
</html>
