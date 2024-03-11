<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="container-fluid">
  <div class="row">
    <div class="col-md-7">
      <form method="GET" action="belanja_get.php">
        <div class="form-group row">
          <label for="name" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Pilih Produk</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
              <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
              <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci">
              <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
          <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-5">
      <table class="table custom-table">
        <tbody>
          <tr>
            <td style="background-color: cyan;">Daftar Harga</td>
          </tr>
          <tr>
            <td>TV: 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas: 3.100.000</td>
          </tr>
          <tr>
            <td>Mesin Cuci: 3.800.000</td>
          </tr>
          <tr>
            <td style="background-color: cyan;">Harga Dapat Berubah Setiap Saat</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  </div>
</body>

</html>