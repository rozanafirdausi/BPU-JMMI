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
          <li><a href="kelolaadmin">Kelola Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
  </header>
  
<body>
  <div id="preloader"></div>
  <div class="container fluid" style="min-height:500px">
    <h1>Data Absensi BPU - JMMI 2018</h1>
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
                <h3 class="modal-title" id="exampleModalLabel">Tambah Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"> 
                <form action="{{ action('AbsensiController@store') }}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="desaBinaan">Jadwal :</label>
                      <select name="id_jadwal_mengajar" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($jadwal as $jadwals)
                        <option value="{{$jadwals->id_jadwal_mengajar}}">{{$jadwals->desaBinaan->nama_desa_binaan}} - {{$jadwals->tempat}}</option>
                        @endforeach
                      </select>
                      <br>
                    </div>
                    <div class="form-group">
                      <label for="jumlah_warga"><span style="color: red">*</span> Jumlah Warga: </label>
                      <input name="jumlah_warga" type="text" class="form-control" id="jumlah_warga" placeholder="masukkan jumlah warga.." required>
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
        @foreach ($absensi as $absensis)        
        <div class="modal fade" id="edit-absensi-{{$absensis->id_jadwal_absensi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Ubah Absensi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"> 
                <form action="{{URL::to('/absensi/'.$absensis->id_jadwal_absensi.'/update')}}" method="post">
                  {{ csrf_field() }}
                  <input type=hidden name=_token value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="desaBinaan">Jadwal :</label>
                      <select name="id_jadwal_mengajar" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($jadwal as $jadwals)
                        <option value="{{$jadwals->id_jadwal_mengajar}}">{{$jadwals->desaBinaan->nama_desa_binaan}} - {{$jadwals->tempat}}</option>
                        @endforeach
                      </select>
                      <br>
                    </div>
                    <div class="form-group">
                      <label for="kredit"><span style="color: red">*</span> Jumlah Warga :</label>
                      <input type="text" class="form-control" id="kredit" placeholder="masukkan jumlah warga" name="jumlah_warga" value="{{ $absensis->jumlah_warga }}" required>
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
        <!-- Modal -->
        @foreach ($absensi as $absensis)
        <div class="modal fade" id="list-pengurus-{{ $absensis->id_jadwal_mengajar }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Daftar Pengurus</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <table class="table table-striped table-bordered table-list"> 
                <thead>
                  <tr>
                      <th >Pengajar</th>
                  </tr> 
                </thead>
                <tbody>
                @foreach ($pengurus as $penguruses)
                  <tr>
                    <td>
                      {{ $penguruses->pengurus->nama_pengurus}}
                    </td>                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
                
              </div>
              <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
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
                  <th>Jadwal Mengajar</th>
                  <th>Pengurus</th>
                  <th>Jumlah Warga</th>
              </tr> 
            </thead>
            <tbody>
            @foreach ($absensi as $absensis)
              <tr>
                <td align="center">
                  <div class="row">
                    <div class="col-sm-4">
                  <a class="btn btn-default" data-toggle="modal" data-target="#edit-absensi-{{$absensis->id_jadwal_absensi}}">
                    <em class="fa fa-pencil"></em></a></div>
                  <div class="col-sm-4">
                    <form action="{{URL::to('/absensi/'.$absensis->id_jadwal_absensi)}}" method="POST">{{ csrf_field() }}<button type="submit" class="btn btn-danger"><em class="fa fa-trash"></em></button></form></div>
                  </div>
                </td>
                <td>{{ $absensis->jadwal->desaBinaan->nama_desa_binaan}} - {{ $absensis->jadwal->tempat }}</td>
                <td>
                  <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#list-pengurus-{{$absensis->id_jadwal_mengajar}}">Lihat Pengurus</button>
                </td>
                <td>{{ $absensis->jumlah_warga }}</td>
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
                    {{ $absensi->links() }}
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
