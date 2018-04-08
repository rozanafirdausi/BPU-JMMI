<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BPU-JMMI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/table.css" rel="stylesheet">
  <link href="css/keuangan.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
  <header id="header">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">BPU - JMMI</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="menu-admin.html">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"">Keuangan <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="laporan-keuangan.html">Laporan Keuangan</a></li>
              <li><a href="penjualan.html">Penjualan</a></li>
              <li><a href="bantuan.html">Bantuan</a></li>
            </ul>
          </li>
          <li><a href="barang.html">Barang</a></li>
          <li><a href="absensi.html">Absensi</a></li>
          <li><a href="desaBinaan.html">Desa Binaan</a></li>
          <li class="test"><a href="jadwal-mengajar.html">Jadwal Mengajar</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../BPU-JMMI"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
  </header>
  
<body>
  <div id="preloader"></div>
  <div class="container fluid">
    <h1>Data Desa Binaan BPU - JMMI 2018</h1>
    <div class="col-sm-12">
      <div class="panel panel-default panel-table" id="table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
            </div>
            <div class="col col-xs-6 text-right">
              <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#add-modal">Create New</button>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Desa Binaan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="tanggal">ID : </label>
                      <input type="text" class="form-control" id="tanggal" placeholder="masukkan ID">
                    </div>
                    <div class="form-group">
                      <label for="item">Nama Desa Binaan : </label>
                      <input type="text" class="form-control" id="item" placeholder="masukkan nama desa binaan">
                    </div>
                    <div class="form-group">
                      <label for="debit">Alamat Desa Binaan : </label>
                      <input type="text" class="form-control" id="debit" placeholder="masukkan alamat desa binaan">
                    </div>
                    <div class="form-group">
                      <label for="kredit">CP : </label>
                      <input type="text" class="form-control" id="kredit" placeholder="masukkan nama cp">
                    </div>
                    <div class="form-group">
                      <label for="jumlah-uang">Telp CP : </label>
                      <input type="text" class="form-control" id="jumlah-uang" placeholder="masukkan no telp cp">
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Jumlah Warga : </label>
                      <input type="text" class="form-control" id="keterangan" placeholder="masukkan jumlah warga">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-list">
            <thead>
              <tr>
                  <th><em class="fa fa-cog"></em></th>
                  <th>ID</th>
                  <th>Nama Desa Binaan</th>
                  <th>Alamat Desa Binaan</th>
                  <th>CP</th>
                  <th>Telp CP</th>
                  <th>Jumlah Warga</th>
              </tr> 
            </thead>
            <tbody>
              <tr>
                <td align="center">
                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                </td>
                <td>1</td>
                <td>Keputih</td>
                <td>Keputih, Surabaya, Jawa Timur</td>
                <td>Ojan</td>
                <td>082567453980</td>
                <td>120</td>
              </tr>
              <tr>
                <td align="center">
                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                </td>
                <td>2</td>
                <td>Kejawan</td>
                <td>Kejawan, Surabaya, Jawa Timur</td>
                <td>Mar</td>
                <td>087654321876</td>
                <td>90</td>
              </tr>
              <tr>
                <td align="center">
                  <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                </td>
                <td>3</td>
                <td>Gebang</td>
                <td>Gebang, Surabaya, Jawa Timur</td>
                <td>Hida</td>
                <td>089789678567</td>
                <td>110</td>
              </tr>
            </tbody>
          </table>
      
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col col-xs-4">Page 1 of 5
            </div>
            <div class="col col-xs-8">
              <ul class="pagination hidden-xs pull-right">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
              <ul class="pagination visible-xs pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>     
    </div>    
  </div>
  

  <!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>BPU-JMMI</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
