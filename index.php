<?php 
 
include 'koneksi.php';
session_start();
 
if (!isset($_SESSION['username'])) {
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Undangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="scss/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="scss/swiper-bundle.min.css">
</head>

<body class="stop-scrol">

  <section class="banner">
    <div class="container">
      <div class="row layer-1">
        <div class="overlay">
          <form action="" method="POST" class="login-email">
            <h1>Wedding Putu & Puspa</h1>
            <h2>Selasa, 4 Oktober 2022</h2>
            <h2>Kepada</h2>
            <h2>Bapak/Ibu/Saudara/i</h2>
            <?php if($_GET['pawiwehan']=='untuk'){
                    echo "<h3>$_GET[penerima]</h3>";
                    }
                  ?>
            <a href="#isi"><button class="btn" id="buka">Buka Undangan</button></a>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="container audio">
    <audio id="Audio" autoplay>
      <source src="music/music.mp3" type="audio/mpeg">
    </audio>
    <a onClick="Play()"><img id="on-of" src="img/hidup.png" alt=""></a>
  </div>


  <section class="isi" id="isi">
    <div class="container">
      <div class="row pembuka">
        <div class="col-xxl-2"></div>
        <div class="col-xxl-8 col-xl-12">
          <h1>Om Swastyastu</h1>
          <p>Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang
            Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Pawiwehan Putra dan Putri kami.</p>
        </div>
        <div class="col-xxl-2"></div>
      </div>

      <div class="row pengantin" data-aos="fade-up">
        <div class="col-xxl-6 col-xl-6 col-lg-12 putu">
          <img src="img/putu.png">
          <h1>I Putu Bahagiana</h1>
          <h2>Putra pertama dari pasangan</h2>
          <h3>I Wayan Putu & Ni Made Kadek</h3>
          <h4>&</h4>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-12 puspa">
          <img src="img/puspa.png">
          <h1>Ayu Puspa Anggraeni</h1>
          <h2>Putri pertama dari pasangan</h2>
          <h3>I Wayan Putu & Ni Made Kadek</h3>
        </div>
      </div>

      <div class="ukiran" data-aos="fade-up">
        <img src="img/ukiran1.png">
        <h1>Devan bhavayatanena te deva bhavayantu vah parasparam bhavayantah sreyah param avapsyatha
        </h1>
        <h2>(Bhagavad Gita3:11)</h2>
        <h1>Dengan ini (Yadnya), kami berbakti kepada Hyang Widhi dan dengan ini pula Hyang Widhi
          memelihara dan mengasihi kamu. Dengan saling memelihara satu sama lain, kamu akan mencapai kebaikan yang maha
          tinggi.</h1>
        <img class="ukiran-bawah" src="img/ukiran.png">
      </div>
    </div>
  </section>

  <section class="waktu-tempat">
    <div class="container">
      <div class="row">
        <div class="waktu">
          <h1 data-aos="fade-up">Waktu & Tempat</h1>
          <h2 data-aos="fade-up">Selasa</h2>
          <h3 data-aos="fade-up">4 Oktober 2022</h3>
          <hr data-aos="fade-up">
          <h2 data-aos="fade-up">Pukul</h2>
          <h3 data-aos="fade-up">13.00 WITA - Selesai</h3>
          <hr data-aos="fade-up">
          <h3 data-aos="fade-up">Bertempat di</h3>
          <p data-aos="fade-up">Br. Telabah Sukawati, Gianyar, Bali</p>
          <a data-aos="fade-up" href="https://goo.gl/maps/mHkLG7FA6h5VSDKH7"><button class="btn" data-aos="fade-up">Map
              Lokasi Acara</button></a>
        </div>
        <div class="ukiran bawah">
          <img src="img/ukiran.png" data-aos="fade-up">
        </div>
      </div>
    </div>
  </section>

  <section class="penutup">
    <div class="container">
      <div class="row kalimat-penutup">
        <div class="col-1"></div>
        <div class="col-10" data-aos="fade-up">
          <h1>Merupakan suatu kebahagiaan dan kehormatan bagi kami apabila Bapak/ Ibu/ Saudara/i berkenan hadir untuk
            memberikan doa restu.</h1>
          <h1>Atas kehadiran dan doa restunya kami ucapkan terimakasih</h1>
        </div>
        <div class="col-1"></div>
        <h2 data-aos="fade-up">Om Shanti Shanti Shanti Om</h2>
        <h3 data-aos="fade-up">Kami yang berbahagia</h3>
        <h3 data-aos="fade-up">Keluarga Bendesa Gede Gumyar Sukawati</h3>
      </div>
    </div>
  </section>

  <section class="menuju-acara">
    <div class="container">
      <div class="row waktu">
        <h1 data-aos="fade-up">Menuju Acara</h1>
        <div class="ukiran">
          <img src="img/ukiran.png" data-aos="fade-up">
        </div>
        <div class="waktu-mundur" data-aos="fade-up">
          <div id="hari" class="box"></div>
          <div id="jam" class="box"></div>
          <div id="menit" class="box"></div>
          <div id="detik" class="box"></div>
        </div>
        <div class="time-label" data-aos="fade-up">
          <div class="label">
            <h1>Hari</h1>
          </div>
          <div class="label">
            <h1>Jam</h1>
          </div>
          <div class="label">
            <h1>Menit</h1>
          </div>
          <div class="label">
            <h1>Detik</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<section class="galery">
        <div class="container">
          <div class="row photo-galery">
            <h1>Photo Galery</h1>
            <div class="ukiran">
              <img src="img/ukiran.png" alt="">
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/foto-2.jpg" class=" w-60" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/foto-3.jpg" class="d-block w-60" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/foto-4.jpg" class="d-block w-60" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/foto-4.jpg" class="d-block w-60" alt="...">
                </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              </div>
            </div>
          </div>
        </div>
      </section>-->

  <div class="slide-container swiper">
    <h1>Photo Galery</h1>
    <div class="ukiran">
      <img src="img/ukiran.png" alt="">
    </div>
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-1.jpg" alt="">
            <img src="img/foto-1.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-1">
            <img src="img/foto-2.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-3.jpg" alt="">
            <img src="img/foto-3.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-1">
            <img src="img/foto-4.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-1.jpg" alt="">
            <img src="img/foto-1.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-1">
            <img src="img/foto-5.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-1.jpg" alt="">
            <img src="img/foto-1.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-1.jpg" alt="">
            <img src="img/foto-1.jpg" alt="">
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="galery-2">
            <img src="img/foto-1.jpg" alt="">
            <img src="img/foto-1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <section class="ucapan">
    <div class="container">
      <div class="row input">
        <h1>Mohon Doa Restu</h1>
        <div class="ukiran">
          <img src="img/ukiran.png" alt="">
        </div>
        <div class="row border-input">
          <form action="" method="POST">
            <label for="">Masukan Namamu</label>
            <input type="text" name="nama" id="input-nama" placeholder="Nama" class="box" required>
            <label for="">Berikan Ucapanmu</label>
            <textarea name="ucapan" id="id-ucapan" rows="5" placeholder="Tulis Ucapan & Doa" class="box"
              required></textarea>
            <label for="">Kamu Akan Hadir?</label>
            <!--<div class="form-check">
                  <input class="form-check-input" type="radio" name="kehadiran" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Hadir
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kehadiran" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Tidak Hadir
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kehadiran" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios3">
                    Masih Ragu
                  </label>
                </div>-->

            <select name="kehadiran" class="input-kehadiran" required>
              <option value="">Pilih</option>
              <option value="saya akan hadir">hadir</option>
              <option value="saya berhalangan hadir">tidak hadir</option>
            </select>
            <a href=""><button name="kirim" class="btn">Kirim Ucapan</button></a>
        </div>
        </form>
      </div>
    </div>
  </section>

  <?php
        if(isset($_POST['kirim'])){

          $nama = addslashes($_POST['nama']);
          $ucapan = addslashes($_POST['ucapan']);
          $kehadiran = ($_POST['kehadiran']);


          $cek = mysqli_query($conn, "SELECT nama FROM ucapan_doa WHERE nama='". $nama ."' ");

          if(mysqli_num_rows($cek)>0){
            echo '<div class="alert alert-error">coba nama lain</div>';
          }else{

            $simpan	= mysqli_query($conn, "INSERT INTO ucapan (nama, ucapan, kehadiran) VALUES ('".$nama."', '".$ucapan."', '".$kehadiran."')");

            if($simpan){
                      echo "<script>alert('Berhasil Disimpan')</script>";
            }else {
                      echo '<div class="alert alert-gagal">Gagal Simpan</div>';
            }
          }

                  

        }
      ?>


  <section class="ucapan-doa">
    <div class="container">
      <div class="row ucapan">
        <h1>Ucapan Doa</h1>
        <div class="ukiran">
          <img src="img/ukiran.png" alt="">
        </div>
        <div class="box">
          
          <?php
              if(isset($_GET['key'])){
                $where .=" AND id_anggota LIKE '%".addslashes($_GET['key'])."%' ";
              }

              $ucapan =mysqli_query($conn, "SELECT * FROM ucapan ORDER BY nama");

              if(mysqli_num_rows($ucapan)>0){
                while ($p=mysqli_fetch_array($ucapan)) {

              ?>
          <div class="nama">
            <h2>
              <?= $p['nama']?>
            </h2>
            <h4><i class="fa-solid fa-check"></i>
              <?= $p['kehadiran']?>
            </h4>
          </div>
          <div class="doa">
            <h3>
              <?= $p['ucapan']?>
            </h3>
          </div>
          <?php }}else { ?>
          <tr>
            <td>Data Kosong</td>
          </tr>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="protokol">
    <div class="container">
      <div class="row protokol-kesehatan">
        <h1>Protokol Kesehatan</h1>
        <p>Harap tetap mematuhi protokol kesehatan dengan:</p>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/cuci-tangan.png" alt="">
          <h2>Cuci Tangan</h2>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/gunakan-masker.png" alt="">
          <h2>Gunakan
            Masker</h2>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/jaga-jarak.png" alt="">
          <h2>Jaga Jarak</h2>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/berjabat-tangan.png" alt="">
          <h2>Tidak Berjabat Tangan</h2>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/kerumunan.png" alt="">
          <h2>Hindari Kerumunan</h2>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-2 image-protokol">
          <img src="img/handsanitizer.png" alt="">
          <h2>Gunakan Handsanitizer</h2>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row penutup">
        <h1>Matur Suksma</h1>
        <div class="medsos">
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-youtube"></i>
          <i class="fa-brands fa-whatsapp"></i>
        </div>
        <h2>Undangan Digital</h2>
      </div>
    </div>
  </footer>


  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>