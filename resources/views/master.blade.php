<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brave</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
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
  .jumbotron {
      background-color: #e6e6e6;
      color: #fff;
      padding: 100px 0px 0px;
      font-family: Montserrat, sans-serif;
      margin-bottom: 0px;

  }
  .container-fluid {
      padding: 60px 50px;
      text-align: center;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .bg-grass{
      background-color: #419E71;
      color: #fff;
  }
  .bg-grass2{
      background-color: #a7d692;
      color: #fff;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #808080 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .mainlogo{
      float: left;
      height: 50px;
      padding: 3px 15px;
      font-size: 18px;
      line-height: 20px;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  #img_header{
      height: 187px;
      width: 100%;
      background-image: url('img/all.png');
      background-size: 2000px;
      background-repeat: no-repeat;
      z-index: 1;
      background-position: center;
      bottom: 0px;
      margin-top: 20%;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  /*nyalira*/
  .competitions{
    margin-top: 60px;
    margin-bottom: 20px;
  }

  .rew{
    height: 250px;
    text-align: center;
  }
  .juara{
    background-size: 166px;
    height: 150px;
    background-repeat: no-repeat;
    text-align: right;
  }
  .juara1{
    background-image: url('img/box1.png');
  }
  .juara2{
    background-image: url('img/box2.png');
    padding-top:35px;
  }
  .juara3{
    background-image: url('img/box3.png');
    padding-top: 40px;
  }
  .rewards{
  }

  .journalist{
    background-image: url('img/networking.svg');
    background-repeat: no-repeat;
    height: 300px;
    background-size: 220px;
    background-position: center;
  }
  .icete{
      background-image: url('img/computer.svg');
      background-repeat: no-repeat;
      height: 300px;
      background-size: 220px;
      background-position: center;
    }
  .plain-text{
    text-align: left;
    padding-top: 100px
  }
  .plain{
    text-align: left;
  }
  .geser-modal{
    margin-top: 100px;
    color:black;
    text-align: left;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="mainlogo" href="#myPage">
        <img src="img/karisma.png" height="45px"/>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#lomba">COMPETITIONS</a></li>
        <li><a href="#training">TRAINING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <img src="img/logo.png" height="100px" />
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      @if (session('berhasil'))
      <div class="alert alert-success">
        {{ session('berhasil') }}
      </div>
      @endif
      @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
      @endforeach

    </div>
    <div class="col-sm-4"></div>
  </div>
  <div id="img_header"></div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grass">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <h2>About</h2><br>
      <h4>Brave (Bandung Creativ Exhibition) adalah event yang diadakan tiap tahun oleh Karisma ITB yang bertujuan untuk mengajak remaja SMP dan SMA melakukan kontribusi berupa ide-ide kreatif untuk dunia yang lebih baik. Maka dari itu kami mengajak kalian remaja SMP dan SMA untuk mengikuti kegiatan ini.</h4><br>
      <p>Let's join us!</p>
    </div>
    <div class="col-sm-3"></div>
  </div>
  <div class="row competitions slideanim">
    <div class="col-sm-3"></div>
    <div class="col-sm-2">
      <img src="img/book.svg" height="100px" />
      <h3>Lomba Cerpen</h3>
      <p>untuk pelajar SMA</p>
      @include('daftarcerpen')
    </div>
    <div class="col-sm-2">
      <img src="img/science.svg" height="100px" />
      <h3>Lomba Sains</h3>
      <p>untuk pelajar SMP dan SMA</p>
    </div>
    <div class="col-sm-2">
      <img src="img/check.svg" height="100px" />
      <h3>Lomba Karya Tulis Ilmiah</h3>
      <p>untuk pelajar SMA</p>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>

<!-- Container (Lomba Section) -->
<div id="lomba" class="container-fluid bg-grass2">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <h2>Reward</h2><br>
      <h4>Selain itu ada juga hadiah menarik yang bisa didapatkan untuk tiap lomba</h4><br>
    </div>
    <div class="col-sm-3"></div>
  </div>


    <div id="theCarousel" class="carousel slide rewards" data-ride="carousel">
      <!-- pembungkus slide -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="row">
            <h4>Lomba Cerpen</h4>
            <div class="col-sm-3"></div>
            <div class="col-sm-2 rew">
              <div class="juara1 juara">
                <p>Juara 1</p>
                <p>IDR 250K</p>
              </div>
            </div>
            <div class="col-sm-2 rew">
              <div class="juara2 juara">
                <p>Juara 2</p>
                <p>IDR 175K</p>
              </div>
            </div>
            <div class="col-sm-2 rew">
              <div class="juara3 juara">
                <p>Juara 3</p>
                <p>IDR 125K</p>
              </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <h4>Lomba Sains</h4>
            <div class="col-sm-3"></div>
            <div class="col-sm-2 rew">
              <div class="juara1 juara">
                <p>Juara 1</p>
                <p>IDR 500K</p>
              </div>
            </div>
            <div class="col-sm-2 rew">
              <div class="juara2 juara">
                <p>Juara 2</p>
                <p>IDR 200K</p>
              </div>
            </div>
            <div class="col-sm-2 rew">
              <div class="juara3 juara">
                <p>Juara 3</p>
                <p>IDR 300K</p>
              </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <h4>Karya Tulis Ilmiah</h4>
            <div class="col-sm-3"></div>
            <div class="col-sm-2 rew">
              <div class="juara1 juara">
                <p>Juara 1</p>
                <p>IDR 600K</p>
              </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2 rew">
              <div class="juara2 juara">
                <p>Juara 2</p>
                <p>IDR 450K</p>
              </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
      </div>
      <!-- indicators -->
      <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1" ></li>
        <li data-target="#theCarousel" data-slide-to="2" ></li>
      </ol>
    </div>

</div>

<!-- Container (Training Section) -->
<div id="training" class="container-fluid text-center">
  <h2>Training</h2>
  <h4>Selain lomba kami juga mengadakan training</h4>
  <div class="row plain-text slideanim">
    <div class="col-sm-1"></div>
    <div class="col-sm-3 journalist"></div>
    <div class="col-sm-7">
      <h4>Traning Jurnalistik</h4>
      <p>Perluas wawasan jurnalistik mu dengan mengikuti training ini, acara training ini akan menghadirkan seorang pemateri yang sangat berpengalaman di bidang jurnalistik.</p>
      <p>Training ini akan dilaksanakan di Salman ITB pada tanggal 27 Maret 2016 pada pukul 9:00 sampai 12:00</p>
      <a href="https://www.eventbrite.com/e/brave-trainging-tickets-23005836075" class="btn btn-warning">Pesan Tiket</a>
    </div>
    <div class="col-sm-1"></div>
  </div>

  <div class="row plain-text slideanim">
    <div class="col-sm-1"></div>
    <div class="col-sm-7">
      <h4>Traning Teknologi Informasi Komunikasi</h4>
      <p>Perluas wawasan <i>ICT</i> mu dengan mengikuti training ini, acara training ini akan menghadirkan seorang pemateri yang sangat berpengalaman di bidang <i>ICT</i>.</p>
      <p>Training ini akan dilaksanakan di Salman ITB pada tanggal 27 Maret 2016 pada pukul 9:00 sampai 12:00</p>
      <a href="https://www.eventbrite.com/e/brave-trainging-tickets-23005836075" class="btn btn-warning">Pesan Tiket</a>
    </div>
    <div class="col-sm-3 icete"></div>
    <div class="col-sm-1"></div>
  </div>

</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 plain">
      <p>Hubungi kami di</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bandung, ID</p>
      <p><span class="glyphicon glyphicon-phone"></span> Nur Tsuraya +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> brave.karisma35@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(-6.8942648, 107.6091815);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:15,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyrigth<a href="http://karismaitb.org" > Keluarga Remaja Islam Salman ITB</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
