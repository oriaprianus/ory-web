<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body id="home">
    <!-- navbar Awal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="./index.php">My Bloger</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar Akhir -->

      <!-- My Blog awal-->
      <section class="jumbotron text-center bg-body-secondary p-5 ">
        <img src="img/icon.jpg" class="img-fluid mt-4" alt="My Blog" width="300" class=" img-thumbnail ">
        <h1 class="display-6">My Blog!</h1>
        <p class="lead"> Info Seputar Teknologi</p>
      </section>
      <!-- My Blog  akhir -->

      <!--Awal Home -->
      <section id="home">
        <div class="container ">
          <div class="row text-center mt-3">
            <div class="col ">
              <h2>content</h2>
            </div>
          </div> 
          <div class="row gap-2 justify-content-md-center mb-4">
            <?php
            // mengambil semua data json  
            $json_data = file_get_contents("data.json");
            $datas = json_decode($json_data, true);
            if(count($datas) !=0){
              // menampilkan data json kedalam text html
              foreach ($datas as $data) {
            ?>
              <div class="col-sm-6 col-lg-3 p-2 card" >
                <img src=<?php echo $data['image'] ?> class="card-img-top img-thumbnail" alt="cont1" style="height: 200px">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $data['title'] ?></h5>
                  <p class="card-text"><?php echo $data['excapt'] ?></p>
                  <a href="single.php?id=<?php echo $data['id'] ?>" class="mb-3">baca selengkahpnya</a>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
        </div>
      </section>
      <!-- Akhir Home -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>