<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sertikom</title>

    
    <!-- Core Stylesheet -->
    <link href="stylehotel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Notable&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <div class="background bg-img bg-overlay animated-img" style="background-image: url(img/background.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="isi text-center">
                    	<img class="logo" src="img/hotel.png">
                        <h1>GOLDEN HOTEL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="tengah bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dalemnya">
                        <div class="row no-gutters">
                            
                            <div class="col-12 col-md-4">
                                <div class="tulis text-center">
                                	<a href="index.php"><img class="gambar" src="img/pay.png"></a>
                                    <h5><a href="index.php">Jenis Kamar</a></h5>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="tulis text-center">
                                <a data-toggle="modal" data-target="#exampleModal"><img class="gambar " src="img/service.png"></a>
                                  <h5><a data-toggle="modal" data-target="#exampleModal">Pesan Kamar</a></h5>
                              </div>
                          </div>
                            <div class="col-12 col-md-4">
                                <div class="tulis text-center">
                                	<a href="tentanggkami.php"><img class="gambar" src="img/history.png"></a>
                                    <h5><a href="tentanggkami.php">Tentang Kami</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<div class="isibody">
  <section>
      <div class="textjeniskamar">
        <p>Selamat datang di Golden Hotel – Tempat Keindahan dan Kenyamanan yang Menakjubkan.
          <br><br>
          Golden Hotel adalah destinasi yang sempurna bagi Anda yang menginginkan pengalaman menginap istimewa di tengah pusat kota. 
          Terletak dengan strategis di jantung kota, kami menawarkan kemudahan akses ke berbagai tempat menarik, pusat perbelanjaan, dan tempat-tempat penting lainnya. 
          Di sini, Anda akan menemukan harmoni antara keindahan arsitektur modern dan kenyamanan yang tiada tara.
          <br><br>
          Alamat Hotel:<br>
          Jl. Emas No. 123<br>
          Kota Emas, Nusantara<br>
          Kode Pos: 12345
          <br><br>
          Kami selalu siap memberikan pelayanan terbaik untuk menjadikan kunjungan Anda sebagai pengalaman yang tak terlupakan. 
          Jika Anda memiliki pertanyaan atau kebutuhan khusus sebelum atau selama menginap, jangan ragu untuk menghubungi kami melalui salah satu metode berikut:
          <br><br>
          Nomor Telepon Reservasi:<br>
          +62 123 4567 890
          <br><br>
          Alamat Email:<br>
          info@goldenhotel.com
          <br><br>
          Tim kami yang ramah dan berpengalaman akan dengan senang hati membantu Anda dalam mengatur detail kunjungan Anda atau menjawab pertanyaan-pertanyaan yang Anda miliki.
          <br><br>
          Golden Hotel bukan sekadar tempat menginap, tetapi juga destinasi di mana Anda dapat merasakan kemewahan, kenyamanan, dan keramahan yang tak terlupakan. 
          Kami berkomitmen untuk memberikan pengalaman luar biasa bagi setiap tamu yang menginap bersama kami. 
          Tunggu apa lagi? Jadikan Golden Hotel pilihan utama Anda untuk pengalaman menginap yang mengesankan.
        </p>
      </div>
  </section>      
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="processs_form.php" method="post">
        <div class="modal-body">
        

          <label for="namaPemesan">Nama Pemesan :</label>
          <input type="text" id="namaPemesan" name="namaPemesan" required><br>
          
          <label for="jenisKelamin">Jenis Kelamin :</label>
          <label id="jenisKelamin" required>
              <input type="radio" value="Laki-laki" name="jenisKelamin"> Laki-laki
              <input type="radio" value="Perempuan" name="jenisKelamin"> Perempuan
          </label><br>
          
          <label for="nomorIdentitas">Nomor Identitas :</label>
          <input type="text" id="nomorIdentitas" name="nomorIdentitas" required pattern="\d{16}" ><br>
          
          <label for="tipeKamar">Tipe Kamar :</label>
          <select id="tipeKamar" name="tipeKamar" onchange="updateHarga()" required>
            <option value="-" disabled selected>Pilih</option>
              <option value="Standar">Standar</option>
              <option value="Deluxe">Deluxe</option>
              <option value="Exclusive">Exclusive</option>
          </select><br>
          
          <label for="harga">Harga :</label>
          <input type="text" id="harga" name="harga" readonly><br>
          
          <label for="tanggalPesan">Tanggal Pesan :</label>
          <input type="date" id="tanggalPesan" name="tanggalPesan" required><br>
          
          <label for="durasiMenginap">Durasi Menginap :</label>
          <input type="number" id="durasiMenginap" name="durasiMenginap" required> Hari<br>
          
          <label for="termasukBreakfast">Termasuk Breakfast :</label>
          <input type="checkbox" id="termasukBreakfast" name="termasukBreakfast"><br>
          
          <label for="totalBayar">Total Bayar :</label>
          <input type="text" id="totalBayar" name="totalBayar" readonly><br>
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" onclick="hitungTotalBayar()">Hitung Total Bayar</button>
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <button class="btn btn-primary" type="submit" name="insertdata">Pesan Tiket</button>
          <!-- <button data-toggle="modal" data-target="#exampleModal2" type="button" class="btn btn-primary" data-dismiss="modal">Next -->
        </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
       <h1>Estimasi Waktu</h1>
       <h3>03 Jam 53 Menit</h3><br><br><br>
       <h1>Biaya Sementara</h1>
       <h3>Rp.320.000</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

   

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <script src="js/imagesslide.js"></script>
    <script>
      function updateHarga() {
            var hargaKamar = document.getElementById("tipeKamar").value;
            var hargaLabel = document.getElementById("harga");
            
            if (hargaKamar === "Standar") {
                hargaLabel.value = "100000";
            } else if (hargaKamar === "Deluxe") {
                hargaLabel.value = "200000";
            } else if (hargaKamar === "Exclusive") {
                hargaLabel.value = "300000";
            }
        }

      function hitungTotalBayar() {
          var hargaKamar = document.getElementById("tipeKamar").value;
          var durasiMenginap = parseFloat(document.getElementById("durasiMenginap").value);
          var termasukBreakfast = document.getElementById("termasukBreakfast").checked;
          var totalBayar = 0;
          
          if (hargaKamar === "Standar") {
              totalBayar = durasiMenginap * 100000;
          } else if (hargaKamar === "Deluxe") {
              totalBayar = durasiMenginap * 200000;
          } else if (hargaKamar === "Exclusive") {
              totalBayar = durasiMenginap * 300000;
          }
          
          if (durasiMenginap > 3) {
              totalBayar *= 0.9; // Diskon 10% untuk menginap lebih dari 3 hari
          }
          
          if (termasukBreakfast) {
              totalBayar += 80000; // Biaya tambahan jika memilih breakfast
          }
          
          document.getElementById("totalBayar").value = totalBayar;
      }
      
      window.onload = function() {
        var nomorIdentitasInput = document.getElementById("nomorIdentitas");

        nomorIdentitasInput.addEventListener("input", function() {
            if (nomorIdentitasInput.validity.patternMismatch) {
                nomorIdentitasInput.setCustomValidity("Nomor identitas harus terdiri dari 16 digit angka");
            } else {
                nomorIdentitasInput.setCustomValidity("");
            }
        });
    };
  </script>
</body>