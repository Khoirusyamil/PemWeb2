<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 2 PHP</title>
    <style>
    #proses {
      background-color: #28a745; 
      border-color: #28a745;
    }
    .harga-title {
      background-color: #007bff;
      border-color: #007bff;
    }
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 align="center" class="mt-2">Belanja Online</h1>
<hr>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 order-md-1">
      <form action="form_belanja.php" method="POST">
        <div class="form-group row mb-3">
            <label for="customer" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input type="text" class="form-control" id="customer" name="customer" required>
          </div>
        </div>
        <div class="mb-3">
          <label class="mr-4" for="produk" class="form-label">Produk Pilihan</label>
          <div class="form-check form-check-inline ml-5">
            <input class="form-check-input" type="radio" name="produk" id="tv" value="tv" required>
            <label class="form-check-label" for="tv">TV</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="kulkas" required>
            <label class="form-check-label" for="kulkas">Kulkas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="produk" id="mesincuci" value="mesincuci" required>
            <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
          <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="proses" id="proses">Kirim</button>
      </form>
    </div>
    <div class="col-md-6 order-md-2">
      <h4 align="center" class="harga-title p-1">Daftar Harga</h4>
      <table class="table">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TV</td>
            <td>Rp 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas</td>
            <td>Rp 3.100.000</td>
          </tr>
          <tr>
            <td>Mesin Cuci</td>
            <td>Rp 3.800.000</td>
          </tr>
        </tbody>
      </table>
      <h4 align="center" class="harga-title p-1">Harga Dapat Berubah Suatu Saat</h4>
    </div>
  </div>
    <?php
        $customer = $_POST["customer"];
        $produk = $_POST["produk"];
        $jumlahBeli = $_POST["jumlah"];

        switch ($produk) 
        {
            case "tv":
                $hasil = (4200000 * $jumlahBeli);
                break;
    
            case "kulkas":
                $hasil = (3100000 * $jumlahBeli);
                break;
            
            case "mesincuci":
                $hasil = (3800000 * $jumlahBeli);
                break;

            default:
                $hasil = "-";
                break;
        }
        
        echo "Nama Customer : $customer" , "<br/>";
        echo "Produk Pilihan : $produk" , "<br/>"; 
        echo "Jumlah Beli : $jumlahBeli" , "<br/>";
        echo "Total Belanja : Rp. $hasil";

    ?>
</body>
</html>
