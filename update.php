<?php
include 'config.php';

 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM stock WHERE id_barang=$id");
$row = $result->fetch_assoc();

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                            </a>
                           
                          
                            
                            
                         
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Update </h1><br>
                        
                        <form method="POST" action="tambah_stok.php">
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Kode Barang </label>
                            <div class="col-sm-8">
                              <input type="text" readonly class="form-control-plaintext" name="id" id="id" value="<?php echo $row['id_barang']; ?>" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Barang </label>
                            <div class="col-sm-8">
                              <input type="text" readonly class="form-control-plaintext" name ="nama_barang" id="nama_barang" value="<?php echo $row['nama_barang']; ?>" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Jenis transaksi</label>
                            <div class="col-sm-8">
                                <!--  -->
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="pilihan" id="keluar" value="keluar">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Barang keluar
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="pilihan" id="masuk" value="masuk" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                                Barang masuk
                              </label>
                            </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">keterangan </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">stok</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="stok" name="stok" value="">
                            </div>
                            <div class="col-sm-2">
                                <label for="">stok saat ini <?php echo $row['stok']; ?></label>                    
                                <button class="btn btn-primary"name="simpan" type="submit">simpan</button></div>
                          </div>
                        </form>
                        
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
