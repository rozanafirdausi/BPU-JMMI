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
          <li><a href="admin">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"">Keuangan <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="keuangan">Laporan Keuangan</a></li>
              <li><a href="penjualan">Penjualan</a></li>
              <li><a href="bantuan">Bantuan</a></li>
            </ul>
          </li>
          <li><a href="barang">Barang</a></li>
          <li><a href="absensi">Absensi</a></li>
          <li><a href="desaBinaan">Desa Binaan</a></li>
          <li class="test"><a href="adminJadwal">Jadwal Mengajar</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../BPU-JMMI"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
  </header>
  
<body>
  <div id="preloader"></div>
  <div class="container fluid">
    <h1>Data Barang BPU - JMMI 2018</h1>
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
                <h3 class="modal-title" id="exampleModalLabel">Tambah Barang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ action('BarangController@store') }}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="item">Nama Barang : </label>
                      <input type="text" name="nama_barang" class="form-control" id="item" placeholder="masukkan nama barang">
                    </div>
                    <div class="form-group">
                      <label for="debit">Harga Barang : </label>
                      <input type="text" name="harga_barang" class="form-control" id="debit" placeholder="masukkan harga barang">
                    </div>
                    <div class="form-group">
                      <label for="kredit">Harga Jual : </label>
                      <input type="text" name="harga_jual" class="form-control" id="kredit" placeholder="masukkan harga jual">
                    </div>
                    <div class="form-group">
                      <label for="jumlah-uang">Stok : </label>
                      <input type="text" name="stok" class="form-control" id="jumlah-uang" placeholder="masukkan stok">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        @foreach($data as $barang)
        <div class="modal fade" id="edit-modal-{{$barang->id_barang}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Edit Barang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{URL::to('barang/'.$barang->id_barang)}}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                  
                    <div class="form-group">
                      <label for="item">Nama Barang : </label>
                      <input type="text" name="nama_barang" class="form-control" id="item" placeholder="masukkan nama barang" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="form-group">
                      <label for="debit">Harga Barang : </label>
                      <input type="text" name="harga_barang" class="form-control" id="debit" placeholder="masukkan harga barang" value="{{ $barang->harga_barang }}">
                    </div>
                    <div class="form-group">
                      <label for="kredit">Harga Jual : </label>
                      <input type="text" name="harga_jual" class="form-control" id="kredit" placeholder="masukkan harga jual" value="{{ $barang->harga_jual }}">
                    </div>
                    <div class="form-group">
                      <label for="jumlah-uang">Stok : </label>
                      <input type="text" name="stok" class="form-control" id="jumlah-uang" placeholder="masukkan stok" value="{{ $barang->stok }}">
                    </div>
                    
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach

        <div class="panel-body">
          <table class="table table-striped table-bordered table-list">
            <thead>
              <tr>
                  <th><em class="fa fa-cog"></em></th>
                  <th>Nama Barang</th>
                  <th>Harga Barang</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
              </tr> 
            </thead>
            <tbody>
            @foreach($data as $barang)
              <tr>
                <td align="center">
                  <a class="btn btn-default" data-toggle="modal" data-target="#edit-modal-{{$barang->id_barang}}" href="{{URL::to('barang/'.$barang->id_barang)}}" method="get"><em class="fa fa-pencil"></em></a>
                  <form action="/desaBinaan/{{$desaBinaan->id_desa_binaan}}" method="POST">{{ csrf_field() }}<a class="btn btn-danger"><button type="submit"><em class="fa fa-trash"></em></button></a></form>
                </td>                
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->harga_barang}}</td>
                <td>{{$barang->harga_jual}}</td>
                <td>{{$barang->stok}}</td>                
              </tr>
              @endforeach
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
