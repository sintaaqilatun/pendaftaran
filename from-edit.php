<?php
include ("config.php");

if(!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}
    $id = $_GET['id'];

    $sql = "SELECT * FROM calon_karyawann WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ) {
        die ("Data tidak ditemukan...");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Karyawan smk negeri 2 pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <center>

  <section class="header mt-4 mb-5">
    <h3 class=" fw-bold">FORMULIR <span style="color: rgb(11, 127, 255);">EDIT SISWA</span></h3>
 </section>

    <h3>Formulir Edit Siswa</h3>
    
  </center>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id']?>" /> 

            <p>
                <label for="Nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="Alamat" class="form-label">Alamat: </label>
                <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="Jenis_kelamin" class="me-2">Jenis Kelamin:</label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="laki" <?php echo ($jk == 'laki') ? "checked": "" ?> /> Laki-laki</label>
                <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?> /> Perempuan</label>
            </p>
            <p>
                <label for="Agama" class="form-label">Agama : </label>
                <?php $agama = $siswa ['agama']; ?>
                <select name="agama" class="form-select">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?> value="Islam">Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?> value="Kristen">Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?> value="Hindu">Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?> value="Budha">Budha</option>
                    <option <?php echo ($agama == 'Konghucu') ? "selected": "" ?> value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="Asal_sekolah" class="form-label">Sekolah: </label>
                <input type="text" class="form-control" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $siswa ['asal_sekolah'] ?>" />
            </p>
        </fieldset>
        <p>
        <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
        </p>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>