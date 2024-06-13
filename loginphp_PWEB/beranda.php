<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasMinggu6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12" style="background-color: cadetblue;">
                <br>
                <h1 style="text-align: center; color: white;">
                    <?php echo "WELCOME, " . $_SESSION["username"] . "!"; ?>
                </h1>
                <br>
            </div>
    <ul class="nav flex-column">
        <a class="navbar-brand" href="#">Daffaa</a>
        <li class="nav-item">
          <a class="nav-link active nav" aria-current="page" href="okk.html"><p class="text-white bg-primary">Beranda</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Biodata.php">Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal Kuliah</a>
        </li>
      </ul>

      <div class="mb-3">
        <input type="text" class="form-control" id="formGroupExampleInput">
        <label for="formGroupExampleInput" class="form-label"><p class="text-white bg-primary">Search Information</p></label>
      </div>
      <div> <form action="hapus.php" method="post" style="text-shadow: center; margin-top: 20px;">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form></div>

      <div class="container mt-4">
        <h1>Me and My Activities</h1>
        <p>Hello, I'm excited to share insights into my life and activities. My name is Daffaa, and I find joy in
          exploring various interests and engaging in diverse activities. From creative pursuits like writing and painting
          to outdoor adventures such as hiking and cycling, I thrive on discovering new experiences. This journey
          has not only shaped my identity but also broadened my perspective on life. Join me as I delve into the depths
          of my passions and the vibrant tapestry of activities that define who I am.</p>
    
        <div class="row">
          <div class="col-md-4">
            <img src="LawangSewu.jpg" class="img-fluid mb-3" alt="Dawn">
            <p>Sunset<br>Di Lawang Sewu</p>
          </div>
          <div class="col-md-4">
            <img src="tugumuda.jpg" class="img-fluid mb-3" alt="Sunset">
            <p>Tugumuda<br>Di Siang Hari</p>
          </div>
          <div class="col-md-4">
            <img src="kotalama.jpg" class="img-fluid mb-3" alt="Wolf">
            <p>Pemandangan<br>Dikota Lama</p>
          </div>
        </div>
    
        <h2>Really informative info</h2>
        <p>Welcome to a glimpse into my world! I'm Daffaa, an individual with a rich tapestry of interests and activities.
          At the core of my pursuits lies a deep passion for creativity and exploration. My journey has led me to fall in love
          with the art of expression and in means of connecting with others through the power of words. My canvas becomes
          alive with strokes of paint, reflecting my innermost thoughts and emotions.</p>
        <p>I find solace in the grandeur of outdoor spaces. I feel solace in the great outdoors. Hiking through lush
          trails or cycling along scenic routes invigorates my spirit and nourishes my soul. Nature, with its breathtaking
          beauty, becomes my sanctuary.</p>
        <p>In essence, my life is a mosaic of creativity, adventure, and intellectual curiosity. Through my activities, I seek
          not only personal fulfillment but also the opportunity to inspire and connect with others on a deeper level.
          Join me on this journey of discovery and exploration!</p>
      </div>
</body>
</html>