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
          <li><a href="user">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"">Jadwal Mengajar <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="userJadwal">Jadwal Mengajar Tersedia</a></li>
              <li><a href="userJadwalTerdaftar">Jadwal Mengajar Saya</a></li>
            </ul>
          </li>          
          <li><a href="userProfil">Profil</a></li>           
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
  </header>
  
<body>
  <div id="preloader"></div>
  <div class="container fluid" style="min-height:500px">
    <h1>Jadwal Mengajar BPU - JMMI 2018</h1>
    <div class="col-sm-12">
      <div class="panel panel-default panel-table" id="table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
            </div>
            <div class="col col-xs-6 text-center">
              <h4></h4>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Rincian Jadwal Menagajar</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ action('JadwalController@store') }}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="nama">Tanggal : </label>
                      <input name="tanggal" type="text" class="form-control" id="nama" placeholder="masukkan tanggal..">
                    </div>
                    <div class="form-group">
                      <label for="jenis">Waktu : </label>
                      <input name="waktu" type="text" class="form-control" id="jenis" placeholder="masukkan waktu..">
                    </div>
                    <div class="form-group">
                      <label for="desaBinaan">Desa Binaan :</label>
                      <select name="desa_binaan" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($desaBinaan as $desaBinaans)
                        <option value="{{ $desaBinaans->id_desa_binaan }}">{{ $desaBinaans->nama_desa_binaan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="jumlah">Tempat : </label>
                      <input name="tempat" type="text" class="form-control" id="jumlah" placeholder="masukkan tempat..">
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

        <!-- Modal -->
        @foreach ($jadwal as $jadwals)
        <div class="modal fade" id="edit-jadwal-{{$jadwals->id_jadwal_mengajar}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Ubah Jadwal</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{URL::to('/jadwal/'.$jadwals->id_jadwal_mengajar).'/update'}}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="nama">Tanggal : </label>
                      <input name="tanggal" type="text" class="form-control" id="nama" placeholder="masukkan tanggal.." value="{{ $jadwals->tanggal }}">
                    </div>
                    <div class="form-group">
                      <label for="jenis">Waktu : </label>
                      <input name="waktu" type="text" class="form-control" id="jenis" placeholder="masukkan waktu.." value="{{ $jadwals->waktu }}">
                    </div>
                    <div class="form-group">
                      <label for="desaBinaan">Desa Binaan :</label>
                      <select name="desa_binaan" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($desaBinaan as $desaBinaans)
                        <option value="{{ $desaBinaans->id_desa_binaan }}">{{ $desaBinaans->nama_desa_binaan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="jumlah">Tempat : </label>
                      <input name="tempat" type="text" class="form-control" id="jumlah" placeholder="masukkan tempat.." value="{{ $jadwals->tempat }}">
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
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Desa Binaan</th>
                  <th>Tempat</th>
                  <th>Daftar</th>
              </tr> 
            </thead>
            <tbody>
              @foreach ($jadwal as $jadwals)
              <tr>
                <td>{{ $jadwals->tanggal}}</td>
                <td>{{ $jadwals->waktu}}</td>
                <td>{{ $jadwals->desaBinaan->nama_desa_binaan}}</td>
                <td>{{ $jadwals->tempat}}</td>
                <td>
                <form action="{{URL::to('/jadwal/'.$jadwals->id_jadwal_mengajar)}}/daftar" method="POST">{{ csrf_field() }}<button type="submit" class="btn btn-secondary">Daftar</button></form>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
      
        </div>
<style>
.jumlah-data, .paging {
    width: 50%;
    height: 50px;
    display: block;
}

.jumlah-data {
    float: left;
    padding-top: 15px;
}

.paging {
    float: right;
    text-align: right;
}

.paging ul.pager, .paging ul.pagination {
    text-align: right;
}

ul.pagination, ul.pager {
    margin-top: 8px;
}
</style>
        <div class="panel-footer">
          <div class="row">
            <div class="col col-xs-12">
                <div class="paging">
                    {{ $jadwal->links() }}
                </div>
              </div>
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
