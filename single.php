
<?php
// mengambil id dari url yang dikirim
$id = $_GET['id'];

// mengambil data json
$json_data = file_get_contents("data.json");
$datas = json_decode($json_data, true);
$single_data;
// menampilkan single konten berdasarkan id yang dikirim dari url
foreach ($datas as $data) {
    if ($data['id'] == $id) {
        $single_data = $data;
    }
}
?>

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
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="./index.php">My Bloger</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar Akhir -->

      <!--Awal single Post-->
      <section id="home">
        <div class="container" style="width: 80%">
          <div class="row text-center mt-3">
            <div class="col ">
              <h2>content</h2>
            </div>
          </div>
          <div class="card mb-3">
            <img src="<?php echo $single_data['image'] ?>" class="img-fluid" alt="cont1" style="height: 500px">
            <div class="card-body">
              <h5 class="card-title"><?php echo $single_data['title'] ?></h5>
              <p class="card-text"><?php echo $single_data['body'] ?></p>
              <a href="./index.php" class="btn btn-primary">Back</a>
            </div>
          </div> 
        </div>
      </section>
      <!-- Akhir Single post -->

   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>