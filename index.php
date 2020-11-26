<!DOCTYPE html>
<html lang="id">

<head>
  <title>Grafik Prodis BLUD Air Minum Kota Cimahi</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <h3>GRAFIK PRODIS BLUD AIR MINUM KOTA CIMAHI</h3>
    <nav>
      <ul>
        <li><a href="#prodis">/Prodis</a></li>
        <li><a href="#kimia">/Kimia</a></li>
        <li><a href="#dosis">/Dosis</a></li>
        <li><a href="#bocor">/Kebocoran</a></li>
      </ul>
    </nav>
  </header>
  <section id="prodis">
    <h4>Grafik Produksi dan Distribusi Air Minum</h4>
    <div class="canvas-container">
      <canvas id="graphCanvas"></canvas>
    </div>
  </section>
  <section id="kimia">
    <h4>Grafik Pemakaian Bahan Kimia</h4>
    <div class="canvas-container">
      <canvas id="graphCanvasKimia"></canvas>
    </div>
  </section>
  <section id="dosis">
    <h4>Grafik Dosis Koagulan & Disinfektan</h4>
    <div class="canvas-container">
      <canvas id="graphCanvasDosis"></canvas>
    </div>
  </section>
  <section id="bocor">
    <h4>Grafik Kebocoran</h4>
    <div class="canvas-container">
      <canvas id="graphCanvasBocor"></canvas>
    </div>
  </section>

  <footer>
    <p>&copy; 2020. dibuat dengan ❤️ oleh <a href="https://anugrah.club">anugrah</a> untuk BLUD AM Cimahi</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>