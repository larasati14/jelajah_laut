<!DOCTYPE html>
<html lang="id">

  <!-- CSS -->
<style>

    /* Import from google font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 2rem;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
    font-family: "Poppins", sans-serif;
}
  .btn-back {
    position: absolute;
    top: 20px;
    left: 20px;
    background-color: #006994;
    color: white;
    padding: 10px 16px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    transition: background-color 0.3s;
}

.btn-back:hover {
    background-color: #006994;
}
section {
  padding: 3rem 2rem;
  text-align: center;
}
.home-img {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 10rem;
  padding-bottom: 10rem;
}
.heading-maps {
  margin: 2rem auto 0 auto;
  color: #ffffff;
  padding: 1rem 1rem;
  width: 320px;
  background: #006994;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center; /* pastikan isi teks juga rata tengah */
}
.heading-maps-h2 {
    padding-top: 2rem;
}


/* === MAPS SECTION === */
.category {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
  margin: 2rem 0;
}

.btn {
  background-color: #006994;
  color: #fff;
  border: none;
  padding: 0.6rem 1.2rem;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
  text-decoration: none;
  font-size: 0.9rem;
  text-align: center;
}

.btn:hover {
  background-color: #004e70;
}

.maps-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
  margin-top: 2rem;
}

.maps-container .box {
  width: 320px;
  height: 400px;
  background: #ffffff;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 1rem;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.maps-container .box h2 {
  text-align: center;
  margin-bottom: 0.5rem;
}

.maps-container .box span {
  text-align: center;
  margin-bottom: 0.8rem;
}

.maps-container .box .btn {
  margin-top: auto;
}
  
.maps-container .box-img {
  width: 100%;
  height: 150px;
  overflow: hidden;
  border-radius: 10px;
  margin-bottom: 0.5rem;
}

.maps-container .box-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>

<head>
  <!-- Connector -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jelajah Laut</title>
  <link rel="stylesheet" href="style.css" />
  <script src="main.js"></script>
</head>
 <!-- Button kembali untuk kembali ke halaman utama -->
  <a href="<?php echo e(url('/jelajah_laut')); ?>" class="btn-back">← Kembali</a>

  <!-- Heading Maps Section -->
  <section class="app" id="maps">
    <div class="home-img">
        <img src="img/logo.png" alt="" />
      </div>
    <div class="heading-maps">
      <h1>The Map</h1>
    </div>
    <div class="heading-maps-h2">
      <h2>Yuk! Jelajahi ekosistem perairan Indonesia sebagai mengenal lebih jauh tentang fauna perairan Indonesia.</h2>
    </div>

 <!-- Maps Container 1-->
 <div class="maps-container">
    <div class="box">
      <div class="box-img">
        <img src="img/Spons Laut.jpg" alt="Terumbu Karang" />
      </div>
      <h2>Spons Laut (Porifera spp.)</h2>
      <span>Daerah ditemukan: Laut Banda, Maluku</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Porifera" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/ikan napoleon.jpg" alt="Ikan" />
      </div>
      <h2>Ikan Napoleon</h2>
      <span>Daerah ditemukan: Kepulauan Seribu, Jawa</span>
      <span>Jenis Perairan: Air asin</span>
         <a href="https://id.wikipedia.org/wiki/Ikan_Napoleon" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/penyu hijau.jpg" alt="Penyu" />
      </div>
      <h2>Penyu Hijau</h2>
      <span>Daerah ditemukan: Pantai Merah, Flores</span>
      <span>Jenis Perairan: Air asin</span>
         <a href="https://id.wikipedia.org/wiki/Penyu_hijau" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/ikan pari manta.jpg" alt="Ikan" />
      </div>
      <h2>Ikan Pari Manta</h2>
      <span>Daerah ditemukan: Nusa Penida, Bali</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Pari_manta" class="btn">Baca Artikel</a>
    </div>
  </div>
<!----------------------------------------------------------------------------------------------------------->
   <!-- Maps Container 2 -->
 <div class="maps-container">
    <div class="box">
      <div class="box-img">
        <img src="img/ikan sidat.jpg" alt="Ikan" />
      </div>
      <h2>Ikan Sidat</h2>
      <span>Daerah ditemukan: Sungai Bengawan Solo, Jawa</span>
      <span>Jenis Perairan: Air tawar</span>
        <a href="https://id.wikipedia.org/wiki/Sidat" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/arwana super red.jpg" alt="Ikan" />
      </div>
      <h2>Arwana Super Red (Siluk Merah)</h2>
      <span>Daerah ditemukan: Sungai Kapuas, Kalimantan Barat</span>
      <span>Jenis Perairan: Air tawar</span>
         <a href="https://id.wikipedia.org/wiki/Siluk_merah" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/Belida.jpg" alt="Ikan" />
      </div>
      <h2>Belida</h2>
      <span>Daerah ditemukan: Sungai Musi, Sumatera Selatan</span>
      <span>Jenis Perairan: Air tawar</span>
         <a href="https://id.wikipedia.org/wiki/Belida_(chitala)" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/lobster bambu.jpg" alt="Lobster" />
      </div>
      <h2>Lobster Bambu</h2>
      <span>Daerah ditemukan: Laut Selatan Jawa</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Panulirus_versicolor" class="btn">Baca Artikel</a>
    </div>
  </div>
<!----------------------------------------------------------------------------------------------------------->
   <!-- Maps Container 3 -->
 <div class="maps-container">
    <div class="box">
      <div class="box-img">
        <img src="img/teripang pasir.jpg" alt="Teripang" />
      </div>
      <h2>Teripang Pasir (Holothuria scabra)</h2>
      <span>Daerah ditemukan: Laut Flores & Maluku</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Teripang_pasir" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/biawak air.jpg" alt="Reptil" />
      </div>
      <h2>Biawak Air (Varanus salvator)</h2>
      <span>Daerah ditemukan: Muara Sungai di Sumatera & Kalimantan</span>
      <span>Jenis Perairan: Air tawar & payau</span>
         <a href="https://id.wikipedia.org/wiki/Biawak_air" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/karang otak.jpg" alt="Terumbu Karang" />
      </div>
      <h2>Karang Otak (Platygyra spp.)</h2>
      <span>Daerah ditemukan: Raja Ampat, Papua Barat</span>
      <span>Jenis Perairan: Air asin</span>
         <a href="https://en.wikipedia.org/wiki/Brain_coral" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/bulu babi.jpg" alt="Bulu Babi" />
      </div>
      <h2>Bulu Babi (Diadema setosum)</h2>
      <span>Daerah ditemukan: Perairan Nusa Tenggara Timur</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Landak_laut" class="btn">Baca Artikel</a>
    </div>
  </div>
<!----------------------------------------------------------------------------------------------------------->
 <!-- Maps Container 4 -->
 <div class="maps-container">
    <div class="box">
      <div class="box-img">
        <img src="img/hiu gergaji.jpg" alt="Ikan" />
      </div>
      <h2>Hiu Gergaji (Pristis microdon)</h2>
      <span>Daerah ditemukan: 	Papua, Kalimantan</span>
      <span>Jenis Perairan: Air tawar & payau</span>
        <a href="https://id.wikipedia.org/wiki/Ikan_gergaji" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/kepiting kenari.jpg" alt="Kepiting" />
      </div>
      <h2>Kepiting Kenari (Birgus latro)</h2>
      <span>Daerah ditemukan: 	Pulau-pulau kecil di Papua & Maluku</span>
      <span>Jenis Perairan: Air asin (dekat pantai)</span>
         <a href="https://id.wikipedia.org/wiki/Ketam_kenari" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/mandarinfish.jpg" alt="Ikan" />
      </div>
      <h2>Ikan Mandarinfish</h2>
      <span>Daerah ditemukan: Laut Banda, Maluku</span>
      <span>Jenis Perairan: Air asin</span>
         <a href="https://id.wikipedia.org/wiki/Ikan_mandarin" class="btn">Baca Artikel</a>
    </div>
    <div class="box">
      <div class="box-img">
        <img src="img/dugong.jpg" alt="Dugong" />
      </div>
      <h2>Dugong (Dugong dugon)</h2>
      <span>Daerah ditemukan: Laut Sulawesi, Teluk Cenderawasih</span>
      <span>Jenis Perairan: Air asin</span>
        <a href="https://id.wikipedia.org/wiki/Duyung" class="btn">Baca Artikel</a>
    </div>
  </div>
<?php /**PATH C:\Users\Lia\jelajah_laut\resources\views/maps.blade.php ENDPATH**/ ?>