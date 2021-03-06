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
              'url' => '/ikutcerpen',
              'class' => 'form',
              'files' => true)) !!}

            <!-- token -->
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <!-- nama peserta -->
            <div class="form-group">
              <label for="email">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <!-- asal sekolah peserta -->
            <div class="form-group">
              <label for="email">Asal sekolah</label>
              <input type="text" class="form-control" id="sekolah" name="sekolah">
            </div>

            <!-- email peserta -->
            <div class="form-group">
              <label for="email">Alamat Surel</label>
              <input type="email" class="form-control" id="surel" name="surel">
            </div>

            <!-- hp peserta -->
            <div class="form-group">
              <label for="kontak">Nomor HP</label>
              <input type="text" class="form-control" id="kontak" name="kontak">
            </div>

            <!-- judul cerpen -->
            <div class="form-group">
              <label for="email">Judul Cerpen</label>
              <input type="text" class="form-control" id="judul" name="judul">
            </div>

            <!-- upload cerpen -->
            <div class="form-group">
                {!! Form::label('Upload Cerpen max 2mb') !!}
                {!! Form::file('isicerpen', null) !!}
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
