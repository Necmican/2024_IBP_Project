<!DOCTYPE html>
<html lang="tr" >
<head>
  <meta charset="UTF-8">
  <title>Sayraç Restoran</title>
  <link rel="stylesheet" href="{{asset('script-ho.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sayraç Restoran</title>
    <meta name="description" content="ROSA is an enchanting Parallax Restaurant WordPress Theme that allows you to tell your story in an enjoyable way, perfect for restaurants or coffee shops.">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->

    <link rel="stylesheet" href="{{asset('style-ho.css')}}">
</head>

<body class="stop-scroll">

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->

  <!--Start Dots-->
  <div class="dots">
      <div class="active one" data-x="header"></div>
      <div class="two" data-x=".recipes"></div>
      <div class="three" data-x=".fixed-image"></div>
  </div>
  <!--End Dots-->

 <!--Start Header-->
  <header>
      <nav>
          <div class="logo">
              <a href="{{route('home')}}">
                <img style="width: 64px" src="{{asset('spon.png')}}" alt="Rosa Logo">
            </a>
          </div>
          <div class="toggle">
              <span class="first"></span>
              <span class="middle"></span>
              <span class="last"></span>
          </div>
          <div class="navigation-bar">
              <ul style="padding-left: 400px;">
                  <li><a href="{{route('userAnnouncements')}}">Duyurular<span  class="underline"></span></a></li>
              </ul>
          </div>
      </nav>
      <div class="text">
          <h2>Hos Geldiniz</h2>
          <h1>SAYRAÇ RESTORAN</h1>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
              <span class="right"></span>
          </div>
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div class="arrow-down">
      </div>
  </header>
  <!--End Header-->

  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h2>Hikayemizi</h2>
          <h3>Keşfet</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Sayraç Restoran'ın hikayesi, 1960'ların İstanbul'unda, Beyoğlu'nun hareketli sokaklarında başlar. Rum asıllı bir ailenin işlettiği küçük bir meyhane olarak doğan Sayraç, o dönemin bohem sanatçıları ve entelektüellerinin uğrak yeriydi. Geleneksel mezeleri, taze deniz ürünleri ve sıcak atmosferiyle kısa sürede ünlenen mekan, zamanla büyüyerek bir restorana dönüştü. Bugün hala aynı adreste hizmet veren Sayraç, İstanbul'un kozmopolit ruhunu yansıtan menüsü ve nostaljik atmosferiyle hem yerli halkın hem de turistlerin gözdesi olmaya devam ediyor.</p>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988527/vertical-photo-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988532/vertical-photo-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h2>Ustasından</h2>
          <h3>Tarifler</h3>
      </div>
  </div>
  <!--End Recipes-->

  <!--start Menu-->
  <div class="menu">
      <div class="box-model">
          <i class="fas fa-times fa-2x close"></i>
          <div class="arrow">
              <div class="arrow arrow-right"></div>
              <div class="arrow arrow-left"></div>
          </div>
          <div class="box-image-container">
              <div class="box-image">
                  <img src=""  alt="Food Photo">
              </div>
          </div>
      </div>
      <div class="menu-image-container">
          <div class="image active">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988517/big-menu-thumb-1.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/big-menu-thumb-2.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/big-menu-thumb-4.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988524/big-menu-thumb-6.jpg" alt="Food Photo">
          </div>
      </div>
      <div class="text">
          <h2>Yepisyeni</h2>
          <h3>Lezzetler</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Sayraç Restoran, köklü geçmişine sadık kalırken damakları şenlendirecek yeni lezzetlerle de misafirlerini ağırlıyor. Şefin özel dokunuşlarıyla hazırlanan mevsimsel tatlar, geleneksel mezelere eşlik ediyor. Ege otları ve taze deniz ürünleriyle harmanlanan yaratıcı tabaklar, Sayraç'ın menüsüne modern bir soluk getiriyor.</p>
      </div>
  </div>
  <!--End Menu-->

  <!--Start fixed-image-->
  <div class="fixed-image">
      <div class="text">
          <h2>Ustaca</h2>
          <h3>Hazırlanır</h3>
      </div>
  </div>
  <!--End fixed-image-->

  <!--start About Us-->
  <div class="reservation">
      <div class="text">
          <h2>Muhtesem</h2>
          <h3>Tatlılar</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Sayraç Restoran, köklü geçmişine sadık kalırken damakları şenlendirecek yeni lezzetlerle de misafirlerini ağırlıyor. Şefin özel dokunuşlarıyla hazırlanan mevsimsel tatlar, geleneksel mezelere eşlik ediyor. Ege otları ve taze deniz ürünleriyle harmanlanan yaratıcı tabaklar, Sayraç'ın menüsüne modern bir soluk getirirken, özenle hazırlanan tatlılar ise unutulmaz bir deneyim vadediyor.</p>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--Start Footer-->
  <footer>
      <div class="text">
          <h2>Sayraç Restoran Hakkında</h2>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Sayraç, İstanbul'un kalbinde, Beyoğlu'nun hareketli sokaklarında yer alan bir lezzet mabedi. 60'lardan beri aynı adreste hizmet veren mekan, eski İstanbul'un bohem havasını solumak isteyenlerin uğrak noktası. Burada her şey var: enfes mezeler, taze balıklar, enfes et yemekleri... Hem geleneksel tatlara sadık kalıyorlar hem de yeni lezzetler denemekten çekinmiyorlar. Kısacası, Sayraç'ta herkes kendine göre bir şeyler bulabilir. Ha unutmadan, tatlıları da efsane! Bir de mekanın kendine has bir havası var, sanki zamanda yolculuk yapıyorsun. Bence mutlaka gidip deneyimlemelisin!</p>
      </div>
      <div class="contact-container">
        <div class="social-media">
            <h3>Bizi Takip Et!</h3>
            <div class="links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
          <div class="newsletter">
            <a href="{{route('userChat')}}">
                <h3 style="color: rgb(38, 101, 219)">Bize Ulaşın!</h3>
            </a>

      </div>
  </footer>
<!--End Footer-->

<!--Start Copy-Right-->
<div class="copyright">
    <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
    <i class="fas fa-angle-double-up arrow-up"></i>
    <ul class="info">
        <li>&copy; Sayraç Restoran 2024</li>
        <li>123 Mavi Sokak, İstanbul</li>
        <li>Tel: 5551234567</li>
        <li>Sevgiyle el işçiliği <a href="#">Pixelgrade</a> Takımı tarafından</li>
    </ul>
</div>

  <!--End Copy-Right-->

  <!-- Add your site or application content here -->
</body>

</html>
<!-- partial -->
  <script  src="{{asset('script-ho.js')}}"></script>

</body>
</html>
