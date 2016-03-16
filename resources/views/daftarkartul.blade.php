<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulir Karya Tulis Brave</title>
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
              'url' => '/ikutkartul',
              'class' => 'form',
              'files' => true)) !!}

            <!-- token -->
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

            <!-- nama peserta -->
            <div class="form-group">
              <label for="namaketua">Nama Lengkap Ketua</label>
              <input type="text" class="form-control" id="namaketua" name="namaketua">
            </div>

            <!-- nama anggota1 -->
            <div class="form-group">
              <label for="namaanggota1">Nama Lengkap Anggota 1</label>
              <input type="text" class="form-control" id="namaanggota1" name="namaanggota1">
            </div>

            <!-- nama anggota2 -->
            <div class="form-group">
              <label for="namaanggota2">Nama Lengkap Anggota 2</label>
              <input type="text" class="form-control" id="namaanggota2" name="namaanggota2">
            </div>

            <!-- asal sekolah peserta -->
            <div class="form-group">
              <label for="email">Asal sekolah</label>
              <input type="text" class="form-control" id="sekolah" name="sekolah">
            </div>

            <!-- email peserta -->
            <div class="form-group">
              <label for="surelketua">Alamat Surel Ketua</label>
              <input type="email" class="form-control" id="surelketua" name="surelketua">
            </div>

            <!-- nokontak peserta -->
            <div class="form-group">
              <label for="kontakketua">Nomor HP Ketua</label>
              <input type="text" class="form-control" id="kontakketua" name="kontakketua">
            </div>

            <!-- tema -->
            <div class="form-group">
              <label for="tema">Tema Karya Tulis</label>

              <div class="radio">
                <label>
                  <input type="radio" class="form-control" id="tema" name="tema" value="tema1">The Innovation of Green Technology
                </label>
              </div>

              <div class="radio">
                <label>
                  <input type="radio" class="form-control" id="tema" name="tema" value="tema2">Innovative Business Plan
                </label>
              </div>
            </div>

            <!-- upload cerpen -->
            <div class="form-group">
                {!! Form::label('Upload Karya Tulis max 5mb') !!}
                {!! Form::file('karyatulis', null) !!}
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          {!! Form::close() !!}
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </body>
</html>
