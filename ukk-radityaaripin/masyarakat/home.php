<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Pengaduan</title>
</head>
<body>
<div class="grid gap-0 row-gap-3">
  <div class="p-5 g-col-9">
<div class="container text-center">
<div class="row">
    <div class="col-4">
    <div class="text-center">
              <img src="https://png.pngtree.com/png-vector/20190726/ourmid/pngtree-human-character-logo-sign-png-image_1602831.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
    <h5 class="card-title">Hai, Your Name</h5>
    <p class="card-text p-5 g-col-9">Kepedulian sosial bukanlah untuk mencampuri urusan orang lain, tetapi lebih pada membantu menyelesaikan permasalahan yang di hadapi orang lain dengan tujuan kebaikan dan perdamaian. </p>
    <a href="tampil_login.php" class="btn btn-danger">Logout</a>
    </div>

<div class="col-8">
      <h4 id="scrollspyHeading1">FORM PENGADUAN</h4>
      <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputtext">
    </div>
  </div>
      <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nik</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputnumber">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtext">
    </div>
  </div>
  <div class="mb-3 row">
  <label for="inputPassword" class="col-sm-2 col-form-label">Unggah Foto</label>
    <div class="col-sm-10">
    <input type="file" name="foto" class="form-label" accept=".jpg, .jpeg, .png, .gif,">
  </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-dark text-white">AJUKAN LAPORAN</button>
    </div>
  </div>
  
  <div class="row">
    <div class="col md-12 mt-3">
      <div class="card">
        <div class="card-header">
          FORM PENGADUAN 
        </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <Th>NO</th>
              <Th>JUDUL</th>
              <Th>ISI</th>
              <Th>FOTO</th>
              <Th>STATUS</th>
              <Th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <Th>1</th>
              <Td>Selokan Mampet</td>
              <Td>Laporan Selokan</td>
              <Td><img src="" width="100"></td>
              <Td>proses</td>
              <Td>
                <a href="" class="btn btn-primary">EDIT</a>
                <a href="" class="btn btn-danger">HAPUS</a>
              </td>
            </tr>
          </tbody>
        </table>
</div>
</div>
</div>
</div>
</form>
</div>
</body>
</html>