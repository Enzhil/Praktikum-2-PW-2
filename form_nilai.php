<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <h1>Nilai Mahasiswa</h1>
  <form method="GET" action="form_get.php">
    <div class="form-group row">
      <label for="name" class="col-4 col-form-label">Nama Lengkap</label>
      <div class="col-8">
        <input id="name" name="name" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="ddp">Dasar-Dasar Pemrograman</option>
          <option value="data">Basis Data</option>
          <option value="pw">Pemrograman 2</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai" class="col-4 col-form-label">Nilai UTS</label>
      <div class="col-8">
        <input id="nilai" name="nilai" placeholder="Nilai UTS" type="text" required="required" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilaiU" class="col-4 col-form-label">Nilai UAS</label>
      <div class="col-8">
        <input id="nilaiU" name="nilaiu" placeholder="Nilai UAS" type="text" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilaip" class="col-4 col-form-label">Nilai Praktikum</label>
      <div class="col-8">
        <input id="nilaip" name="nilaip" placeholder="Nilai Praktikum" type="text" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="proses" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

</body>

</html>