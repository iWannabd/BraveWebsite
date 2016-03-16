<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulir Cerpen Brave</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style media="screen">
      body {
          font: 400 15px Lato, sans-serif;
          line-height: 1.8;
          color: #818181;
          background-color: #419E71;
          padding-top: 50px;
      }
      h2 {
          font-size: 24px;
          text-transform: uppercase;
          font-weight: 600;
          margin-bottom: 30px;
      }
      h4 {
          font-size: 19px;
          line-height: 1.375em;
          font-weight: 400;
      }
      .mainform {
          background-color: white;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
        @if (session('berhasil'))
        <div class="alert alert-success">
          {{ session('berhasil') }}
        </div>
        @endif
        @foreach ($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        <div class="mainform">
          {!! Form::open(
            array(
              'url' => '/ikutsains',
              'class' => 'form',
              'files' => true)) !!}

            <!-- token -->
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <!-- nama tim -->
            <div class="form-group">
              <label for="namatim">Nama Tim</label>
              <input type="text" class="form-control" id="namatim" name="namatim">
            </div>

            <div class="form-group">
              <label for="nama1">Nama Ketua</label>
              <input type="text" class="form-control" id="nama1" name="nama1">
            </div>

            <div class="form-group">
              <label for="nama2">Nama Anggota 1</label>
              <input type="text" class="form-control" id="nama2" name="nama2">
            </div>

            <div class="form-group">
              <label for="sekolah">Asal Sekolah</label>
              <input type="text" class="form-control" id="sekolah" name="sekolah">
            </div>

            <div class="form-group">
              <label for="jenjang">Jenjang</label>

              <div class="radio">
                <label>
                  <input type="radio" class="form-control" id="jenjang" name="jenjang" value="smp">SMP
                </label>
              </div>

              <div class="radio">
                <label>
                  <input type="radio" class="form-control" id="jenjang" name="jenjang" value="sma">SMA
                </label>
              </div>

            </div>

            <div class="form-group">
              <label for="kontak">Nomor HP</label>
              <input type="text" class="form-control" id="kontak" name="kontak">
            </div>

            <div class="form-group">
              <label for="email">Alamat Surel</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          {!! Form::close() !!}
        </div>
      </div>
      <div class="col-sm-3">

      </div>
    </div>
  </body>
</html>
