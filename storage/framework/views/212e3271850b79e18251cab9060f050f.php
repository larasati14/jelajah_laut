<!DOCTYPE html>
<html lang="id">

<!-- CSS -->
<style> 
/* === RESET & BASE === */
/* Google Font */
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

/* Tampilan Background */
body {
  background-color: #f0f8ff;
  color: #033f63;
  line-height: 1.6;
}

a {
  text-decoration: none;
  color: inherit;
}

img {
  max-width: 100%;
  height: auto;
}

/* === HEADER === */
header {
  background-color: #fff;
  padding: 1rem 2rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: #006994;
  position: sticky;
  top: 0;
  z-index: 10;
}

.logo {
  font-weight: bold;
  font-size: 1.4rem;
  display: flex;
  align-items: center;
}

.logo img {
  height: 40px;
  margin-right: 10px;
}

.navbar {
  list-style: none;
  display: flex;
  gap: 1rem;
}

.navbar li a {
  color: #006994;
  padding: 0.5rem;
  border-radius: 5px;
  transition: background 0.3s;
}

.navbar li a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}

/* === SECTION GENERAL === */
section {
  padding: 3rem 2rem;
  text-align: center;
}

.heading {
  margin-bottom: 2rem;
}

.search-bar {
  padding: 0.6rem;
  width: 100%;
  max-width: 400px;
  border: 1px solid #ccc;
  border-radius: 8px;
  margin: 1rem auto;
}

/* === HOME SECTION === */
.home {
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  gap: 2rem;
  background: linear-gradient(to right, #c6ecff, #ffffff);
  padding: 3rem 2rem;
}

.home-text {
  flex: 1;
  text-align: left;
  padding-top: 12rem;
  padding-right: 2rem;
  padding-left: 2rem;
}

.home-text h1 {
  font-size: 3rem;
  color: #006994;
}

.home-text h2 {
  font-size: 2rem;
  margin: 0.5rem 0;
}
.home-text p {
  font-size: 1,5rem;
  padding-bottom: 2rem;
}
.btn{ /*effect di join now*/
  padding: 7px 16px;
  border: 2px solid var(--second-color);
  border-radius: 40px;
  color: var(--second-color);
  font-weight: 500;
}
.btn:hover{ /*effect di join now saat kursor di situ*/
  color:#f3f4f4;
  background: var(--second-color);
}
.home-img {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 10rem;
  padding-bottom: 10rem;
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
  text-align: justify;
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


/* === FORM (DUKUNG KAMI) === */
.contact#help {
  background: linear-gradient(to right, #c6ecff, #ffffff);
}

.contact#help .heading h1 {
  font-size: 2rem;
  color: #006994;
}

.contact#help form {
  background-color: rgba(255, 255, 255, 0.95);
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact#help form input,
.contact#help form textarea {
  padding: 0.9rem 1rem;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 1rem;
  width: 100%;
}

.contact#help form textarea {
  resize: vertical;
  min-height: 120px;
}

.contact#help form button {
  background-color: #006994;
  color: white;
  border: none;
  padding: 0.9rem;
  border-radius: 100px;
  cursor: pointer;
  transition: background 0.3s ease;
  width: 100%;
}

.contact#help form button:hover {
  background-color: #004e70;
}

/* === FOOTER === */
.footer-section {
  background-color: #006994;
  color: white;
  padding: 2rem;
}

.footer-section .social,
.footer-section .links {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}

.footer-section .social a {
  font-size: 1.8rem;
  color: white;
  transition: color 0.3s ease;
}

.footer-section .social a:hover {
  color: #d9d9d9;
}

.footer-section .links a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.footer-section .links a:hover {
  color: #d9d9d9;
}

.footer-section p {
  text-align: center;
  font-size: 0.9rem;
  margin-top: 1rem;
}
/* === FAQ SECTION === */
.faq-section {
    padding: 60px 20px;
    background-color: #f0f8ff;
}
.faq-title {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 30px;
    color: #004080;
}
.faq-container {
    max-width: 800px;
    margin: 0 auto;
}
.faq-item {
    margin-bottom: 15px;
    border: 1px solid #cce;
    border-radius: 10px;
    overflow: hidden;
    background-color: white;
}
.faq-question {
    width: 100%;
    padding: 15px;
    background-color: #e6f2ff;
    color: #004080;
    font-weight: bold;
    border: none;
    text-align: left;
    cursor: pointer;
    outline: none;
}
.faq-answer {
    display: none;
    padding: 15px;
    background-color: #f9f9f9;
}
.faq-question.active + .faq-answer {
    display: block;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
            const answer = button.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    });
});
</script>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jelajah Laut</title>
  <link rel="stylesheet" href="style.css" />
  <!-- JS -->
  <script src="main.js"></script>
  <!-- Box Icons -->
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
  <!-- Header -->
  <header>
    <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#maps">Maps</a></li>
      <li><a href="#help">Help Us</a></li>
      <li><a href="#faq">FaQ</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </header>

  <!-- Home Section -->
  <section class="home" id="home">
    <div class="home-text">
      <h1>Welcome to Jelajah Laut</h1>
      <h2>Ensiklopedia Fauna Laut Nusantara</h2>
      <p>
        Jelajah Laut adalah platform digital berbasis ensiklopedia yang menyajikan informasi tentang fauna laut
        Nusantara. Temukan keajaiban dunia bawah laut di ujung jarimu🐚</p>
        <a href=" " class="btn">Join Now</a>
    </div>
    <div class="home-img">
      <img src="img/logo.png" alt="" />
    </div>
  </section>

  <!-- Maps Section -->
  <section class="app" id="maps">
    <div class="heading">
      <h1>Maps</h1>
    </div>
    <input type="text" placeholder="Cari fauna laut..." class="search-bar" id="wikiSearch" list="fauna-list" /> <!-- Perbaiki ID pada list -->
    <datalist id="fauna-list">
      <!-- Fauna Laut -->
      <option value="Orca"> 
      <option value="Dolphin">
      <option value="Blue Whale">
      <option value="Humpback Whale">
      <option value="Sperm Whale">
      <option value="Manta Ray">
      <option value="Shark">
      <option value="Clownfish">
      <option value="Tuna">
      <option value="Sunfish">
      <option value="Barracuda">
      <option value="Napoleon Wrasse">
      <option value="Seahorse">
      <!-- Terumbu Karang -->
      <option value="Staghorn Coral">
      <option value="Brain Coral">
      <option value="Elkhorn Coral">
      <option value="Table Coral">
      <option value="Fire Coral">
      <option value="Soft Coral">
      <!-- Hewan Laut Lunak -->
      <option value="Jellyfish">
      <option value="Crystal Jellyfish">
      <option value="Octopus">
      <option value="Cuttlefish">
      <option value="Squid">
      <option value="Sea Slug">
      <option value="Nudibranch">
      <!-- Hewan Laut Berkulit Keras -->
      <option value="Lobster">
      <option value="Crab">
      <option value="Hermit Crab">
      <option value="Shrimp">
      <option value="Horseshoe Crab">
      <!-- Lainnya -->
      <option value="Sea Turtle">
      <option value="Starfish">
      <option value="Sea Urchin">
      <option value="Sea Cucumber">
      <option value="Sea Anemone">
      <option value="Sea Snake">
    </datalist>   
    <!-- Button --> 
    <div class="category">
      <button class="btn">Ikan&Mamalia Laut</button>
      <button class="btn">Terumbu Karang</button>
      <button class="btn">Hewan Laut Lunak</button>
      <a href="/maps" class="btn">Lainnya...</a>
    </div>
    <!-- Box Container Artikel -->
    <!-- PAUS ORCA --------------------------------------------------------->
    <div class="maps-container">
      <div class="box">
        <div class="box-img">
          <!-- Untuk meletakkan foto -->
          <img src="img/orca.jpg" alt="Ikan" />
        </div>
        <!-- Judul Container -->
        <h2>Paus orca</h2>
        <!-- Deskripsi -->
        <span>Paus Orca (Orcinus orca), spesies lumba-lumba terbesar, dikenal dengan tubuh hitam-putih mencolok dan sirip punggung tinggi. 
          Hidup di perairan Indonesia seperti Laut Banda, orca memburu ikan dan cumi secara berkelompok dengan strategi cerdas dan ikatan sosial kuat.</span>
          <!-- Untuk meletakkan link artikel serta tombol -->
          <a href="https://en.wikipedia.org/wiki/Orca" class="btn">Baca Artikel</a>
      </div>
      <!-- Karang Tanduk Rusa ----------------------------------------------->
      <div class="box">
        <div class="box-img">
          <!-- Untuk meletakkan foto -->
          <img src="img/staghorn coral.jpg" alt="Terumbu Karang" />
        </div>
        <!-- Judul Container -->
        <h2>Karang Tanduk Rusa</h2>
        <!-- Deskripsi -->
        <span>Staghorn Coral (Acropora cervicornis) adalah karang bercabang mirip tanduk rusa yang tumbuh cepat di perairan dangkal Indonesia.
           Warnanya bervariasi dan menjadi habitat penting bagi ikan kecil. 
           Karang ini rentan terhadap pemutihan akibat perubahan suhu laut.</span>
           <!-- Untuk meletakkan link artikel serta tombol -->
           <a href="https://en.wikipedia.org/wiki/Staghorn_coral" class="btn">Baca Artikel</a>
      </div>
      <!-- Ikan Badut ------------------------------------------------------->
      <div class="box">
        <div class="box-img">
          <!-- Untuk meletakkan foto -->
          <img src="img/clownfish.jpg" alt="Cumi-cumi" />
        </div>
        <!-- Judul Container -->
        <h2>Clown Fish</h2>
        <!-- Deskripsi -->
        <span>Clown Fish (Amphiprioninae) adalah ikan kecil berwarna oranye dengan garis putih khas. 
          Hidup bersimbiosis dengan anemon laut yang melindunginya dari predator. Ditemukan di terumbu karang Indonesia,
           ikan ini dikenal karena perilaku sosial unik dan kemampuannya berubah kelamin.</span>
           <!-- Untuk meletakkan link artikel serta tombol -->
           <a href="https://en.wikipedia.org/wiki/Clownfish" class="btn">Baca Artikel</a>
      </div>
      <!-- Ubur-Ubur Kristal -------------------------------------------------->
      <div class="box">
        <div class="box-img">
          <!-- Untuk meletakkan foto -->
          <img src="img/ubur-ubur kristal.png" alt="Paus" />
        </div>
        <!-- Judul Container -->
        <h2>Ubur-ubur Kristal</h2>
        <!-- Deskripsi -->
        <span>Ubur-ubur Kristal (Aequorea victoria) memiliki tubuh transparan menyerupai kristal dan mampu memancarkan cahaya lembut. 
          Hidup di perairan laut Indonesia, ubur-ubur ini tidak berbahaya bagi manusia dan dikenal karena keindahannya yang unik.</span>
          <!-- Untuk meletakkan link artikel serta tombol -->
          <a href="https://en.wikipedia.org/wiki/Aequorea_victoria" class="btn">Baca Artikel</a>
      </div>
    </div>
  </section>

  <!-- Help Us Section -->
  <section class="contact" id="help">
    <div class="heading">
      <h1>Help Us</h1>
    </div>
    <form action="/jelajah_laut" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="nama" placeholder="Nama Lengkap"><br>
        <input type="text" name="no_telepon" placeholder="No. Telepon"><br>
        <input type="number" name="usia" placeholder="Usia"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="pekerjaan" placeholder="Pekerjaan"><br>
        <input type="text" name="asal_kota" placeholder="Asal Kota"><br>
        <input type="text" name="provinsi" placeholder="Provinsi"><br>
        <input type="text" name="negara" placeholder="Negara"><br>
        <textarea name="saran" placeholder="Pesan atau saran..."></textarea><br>
        <button type="submit">Kirim</button>
    </form>
  </section>
  
<!-- FAQ Section -->
<section id="faq" class="faq-section">
    <h2 class="faq-title">Pertanyaan yang Sering Diajukan</h2>
    <div class="faq-container">
        <?php $__currentLoopData = $faqList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="faq-item">
                <button class="faq-question"><?php echo e($faq->question); ?></button>
                <div class="faq-answer">
                    <p><?php echo e($faq->answer); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>


  <!-- Footer / Kontak -->
  <section class="footer-section" id="contact">
    <div class="social">
      <!-- Untuk menghubungkan ke Box Icon agar icon dapat muncul -->
      <a href="#"><i class="bx bxl-facebook"></i></a>
      <a href="#"><i class="bx bxl-twitter"></i></a>
      <a href="#"><i class="bx bxl-instagram"></i></a>
      <a href="#"><i class="bx bxl-youtube"></i></a>
    </div>
    <div class="links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="#">Our Company</a>
    </div>
    <p>&#169; Jelajah Laut All Right Reserved.</p>
  </section>
</body>

</html>
<?php /**PATH C:\Users\Lia\jelajah_laut\resources\views/jelajah_laut.blade.php ENDPATH**/ ?>