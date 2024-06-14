<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Karyawan SMK Negeri 2 Pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <center>
        <section class="header mt-4 mb-5">
          <p>
        <img src="smk2.png" class="object-fit-contain border rounded" style="width: 25%;">
          </p>
            <h3 class=" fw-bold">PENDAFTARAN KARYAWAN</h3>
              <h3 class=" fw-bold"><span style="color: blue">SMK  NEGERI 2 PEKALONGAN</span></h3>
            <p class="fw-semibold"><span style="color: brown">Selamat Datang </span> SMK N 2 Pekalongan</p>
       <p class="menu">
            <h5 class="mb-4">Silahkan Pilih Menu :</h5> 
              <a href="form-daftar.php"><button type="button" class="btn btn-danger">Pendaftaran</button></a>
            <a href="list-siswa.php"><button type="button" class="btn btn-danger">Calon Karyawan</button></a>
          </p>
        </section>

  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
    if($_GET['status'] == 'sukses' ) {
      echo "Pendaftaran Karyawan Berhasil";
    } else {
      echo "Pendaftaran Gagal";
    }
    ?>
  </p>
<?php endif; ?>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>