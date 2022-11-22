<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM MATEMATIKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="row mt-3 col-md-6 offset-3">
        <div class="text-center">
          <h1>OPERATOR ARITMATIKA</h1>
          <p>20202205041 - Nur Azizah Muchtar</p>

          <?php
              $hari = date ("l");
              switch ($hari){
                case"Sunday":
                  $hari="Minggu";
                break;
                case"Monday":
                  $hari="Senin";
                break;
                case"Tuesday":
                  $hari="Selasa";
                break;
                case"Wednesday":
                  $hari="Rabu";
                break;
                case"Thursday":
                  $hari="Kamis";
                break;
                case"Friday":
                  $hari="Jumat";
                break;
                case"Saturday":
                  $hari="Sabtu";
                break;
              }

              $bulan = date ("F");
              switch ($bulan){
                case"January":
                  $bulan="Januari";
                break;
                case"February":
                  $bulan="Februari";
                break;
                case"March":
                  $bulan="Maret";
                break;
                case"April":
                  $bulan="April";
                break;
                case"May":
                  $bulan="Mei";
                break;
                case"June":
                  $bulan="Juni";
                break;
                case"July":
                  $bulan="Juli";
                break;
                case"August":
                  $bulan="Agustus";
                break;
                case"September":
                  $bulan="September";
                break;
                case"October":
                  $bulan="Oktober";
                break;
                case"November":
                  $bulan="November";
                break;
                case"December":
                  $bulan="Desember";
                break;
              }

              $bulan = date ("F");
              switch ($bulan){
                case"January":
                  $bulan="Januari";
                break;
                case"February":
                  $bulan="Februari";
                break;
                case"March":
                  $bulan="Maret";
                break;
                case"April":
                  $bulan="April";
                break;
                case"May":
                  $bulan="Mei";
                break;
                case"June":
                  $bulan="Juni";
                break;
                case"July":
                  $bulan="Juli";
                break;
                case"August":
                  $bulan="Agustus";
                break;
                case"September":
                  $bulan="September";
                break;
                case"October":
                  $bulan="Oktober";
                break;
                case"November":
                  $bulan="November";
                break;
                case"December":
                  $bulan="Desember";
                break;
              }

              date_default_timezone_set ('Asia/Makassar');
              echo $hari.date (", d "),$bulan.date(" Y H:i:s");
            ?>

        </div>
        <div class="card-body">
          <form action="form_matematika.php" method="post"> 
            <div class="row mb-3">
              <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Pertama</label>
              <div class="col-sm-9">
                <input type="number"class="form-control"id="inputnumber3"name="n_pertama">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Kedua</label>
              <div class="col-sm-9">
                <input type="number"class="form-control"id="inputnumber3"name="n_kedua">
              </div>
            </div>
              <button type="submit" class="btn btn-success">HITUNG</button>
              <p>
              <?php
               $a_pertama = isset ($_POST["n_pertama"]) ? $_POST["n_pertama"] : "";
               $a_kedua = isset ($_POST["n_kedua"]) ? $_POST["n_kedua"] : "";
               if (empty($a_pertama))
               {
                 echo '<div class="alert alert-danger text-center">Angka pertama tidak boleh kososng </div>';
               }
               else if (empty($a_kedua))
               {
                 echo '<div class="alert alert-danger text-center">Angka kedua tidak boleh kososng </div>';

               }
               else if ($a_pertama < $a_kedua )
               {
                 echo '<div class="alert alert-danger text-center">Angka pertama harus lebih besar dari pada angka kedua </div>';
               }
               else{
                 echo "<h3>Hasil Operasi Aritmatika</h3>";
                 echo "# Hasil Penjumlahan = ".($a_pertama + $a_kedua)."<br>";
                 echo "# Hasil Pengurangan = ".($a_pertama - $a_kedua)."<br>";
                 echo "# Hasil Perkalian = ".($a_pertama * $a_kedua)."<br>";
                 echo "# Hasil Pembagian = ".($a_pertama / $a_kedua)."<br>";
                 echo "# Sisa Hasil Bagi = ".($a_pertama % $a_kedua)."<br>";
               }
              ?>
          </form>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>