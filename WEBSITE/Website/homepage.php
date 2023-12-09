
<?php
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

if (isset($_GET["logout"])) {
  session_destroy();
  header("Location: ../index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Baju</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css" />

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <script>
  <?php
 // Cek apakah data berhasil disimpan di fungsi.php
 if (isset($_GET['success'])) {
   echo 'alert("Data berhasil disimpan.");';
}
 ?>
 
</script>
<script>

 <?php
 
  //Cek apakah terjadi kesalahan atau format email tidak valid di fungsi.php
 if (isset($_GET['error'])) {
   $errorMessage = $_GET['error'];
   echo 'alert("' . $errorMessage . '");';
 } elseif (isset($_GET['success'])) {
   $successMessage = $_GET['success'];
   echo 'alert("' . $successMessage . '");';
 }
 ?>
 
 </script>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Elite<span>Attire</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Produk</a>
        <a href="#contact">Saran</a>
        <a href="logout.php">Log Out</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      
<!-- Search Form start -->
<div class="search-form">
   <input type="search" id= "search-box" placeholder="search here..." onkeypress="search()">
   <label for="search-box"><i data-feather="search"></i></label>
</div>
 <!-- Search Form end -->

<!-- Shopping cart  Start-->
      <div class="shopping-cart">
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/35/5f/1a/355f1acc15d4747ad9219afaf3a075ac.jpg" alt="Product 1">
          <div class="item-detail">
            <a href="#produk1" id="sc1">Product 1</a>
            <div class="item-price">
              IDR 699K
            </div>
          </div>
        </div>
      
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/bd/21/48/bd214855d70a5ebf20928a41dc22c3fb.jpg" alt="Product 2">
          <div class="item-detail">
            <a href="#produk2" id="sc1">Product 2</a>
            <div class="item-price">
              IDR 699K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/62/5f/eb/625feb0a981a41d8ac1c4b59f02edcc1.jpg" alt="Product 3">
          <div class="item-detail">
            <a href="#produk3" id="sc1">Product 3</a>
            <div class="item-price">
              IDR 889K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/fe/78/ff/fe78ffe6717048b436788d32526921fc.jpg" alt="Product 4">
          <div class="item-detail">
            <a href="#produk4" id="sc1">Product 4</a>
            <div class="item-price">
              IDR 1099K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/2f/41/9b/2f419bf2b8c47784cfca28ee8e3adfb2.jpg" alt="Product 5">
          <div class="item-detail">
            <a href="#produk5" id="sc1">Product 5</a>
            <div class="item-price">
              IDR 799K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/41/31/ae/4131aefc73e59cf4d7d7b12747a8bce9.jpg" alt="Product 6">
          <div class="item-detail">
            <a href="#produk6" id="sc1">Product 6</a >
            <div class="item-price">
              IDR 499K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/a5/d1/e5/a5d1e5a1fa4aa36140f7e66d3ca07f46.jpg" alt="Product 7">
          <div class="item-detail">
            <a href="#produk7" id="sc1">Product 7</a>
            <div class="item-price">
              IDR 699K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/d2/d6/f3/d2d6f303c93920f1a6982342d8121f8b.jpg" alt="Product 8">
          <div class="item-detail">
            <a href="#produk8" id="sc1">Product 8</a>
            <div class="item-price">
              IDR 599K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/2d/4a/a2/2d4aa2a710ebd2519d4b31c569fba9e8.jpg" alt="Product 9">
          <div class="item-detail">
            <a href="#produk9" id="sc1">Product 9</a>
            <div class="item-price">
              IDR 999K
            </div>
          </div>
        </div>
      
        <div class="cart-item">
          <img src="https://i.pinimg.com/236x/7e/67/ba/7e67ba17d46841e560e3cd88f7fbbab0.jpg" alt="Product 10">
          <div class="item-detail">
            <a href="#produk10" id="sc1">Product 10</a>
            <div class="item-price">
              IDR 699K
            </div>
          </div>
        </div>
      </div>
      
<!-- Shopping cart End -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start-->
    <section class="hero" id="home">
     <main class="content">
      <h1>Sesuaikan <span>fashion</span> kalian dengan isi dompet kalian</h1>
      <p>"Fashion is like eating, you shouldn't stick to the same menu." - Kenzo Takada</p>
      

     </main>
    </section>
    <!-- Hero Section end-->

    <!-- About Section start-->
<section id="about" class="about">
  <h2> <span>Tentang</span> Kami</h2>
  <div class="row">
    <div class="about-img">
      <img src="About1.jpg" alt="Tentang Kami">
    </div>
    <div class="content">
      <h3>Kenapa memilih toko baju kami??</h3>
      <p>
        Dengan pengalaman lebih dari 20 tahun di industri pakaian, toko kami telah menjadi destinasi favorit bagi pecinta fashion, dengan cabang yang tersebar di berbagai kota, pastinya toko kami adalah pilihan yang tepat untuk memenuhi kebutuhan pakaian Anda
      </p>
      <p>Jangan ragu untuk datang dan memeriksa berbagai macam desain yang kami miliki, serta diskon menarik yang sedang kami tawarkan untuk pembelian pertama kali</p>
    </div>
  </div>
</section>
    <!-- About Section end-->

    <!-- Menu Section  -->
    <section id="menu" class="menu">
      <h2><span>Produk</span> Kami</h2>
      <p>Monthly Best Seller</p>

  
    <div class="row">
      <div id="produk1" class="menu-card">
      <div class="product-card">
      <div class="product-icons">
        <a href="#"><i data-feather="shopping-cart"></i></a>
        <a href="#" class="item-detail-button" data-product-index="0"><i data-feather="info"></i></a>
      </div>
      <div class="product-img">
        <img src="https://i.pinimg.com/236x/35/5f/1a/355f1acc15d4747ad9219afaf3a075ac.jpg" alt="product1">
      </div>
        <div class="product-tittle">
          <h3 class="menu-card-title">Attire #1</h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 699k</p>
        </div>
      </div>
     </div>

     <div id="produk2" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="1"><i data-feather="info"></i></a>
      </div>
      </div>
      <div class="product-img"><img src="https://i.pinimg.com/236x/bd/21/48/bd214855d70a5ebf20928a41dc22c3fb.jpg"
        alt="set">
      </div>
      <div class="product-tittle">
        <h3 class="menu-card-title"> Attire #2 </h3>
      </div>
      <div class="product-price">
        <p class="menu-card-price">IDR 699K</p>
      </div>
      </div>
      
      <div id="produk3" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="2"><i data-feather="info"></i></a>
        </div>
      </div>
      <div class="product-img">
        <img src="https://i.pinimg.com/236x/62/5f/eb/625feb0a981a41d8ac1c4b59f02edcc1.jpg"
        alt="set">
      </div>
      <div class="product-tittle">
        <h3 class="menu-card-title"> Attire #3 </h3>
      </div>
      <div class="product-price">
        <p class="menu-card-price">IDR 889K</p>
      </div>
      </div>
      
      <div id="produk4" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="3"><i data-feather="info"></i></a>
      </div>
      </div>
      <div class="product-img"><img src="https://i.pinimg.com/236x/fe/78/ff/fe78ffe6717048b436788d32526921fc.jpg"
        alt="set">
      </div>
      <div class="product-tittle">
        <h3 class="menu-card-title"> Attire #4 </h3>
      </div>
      <div class="product-price">
        <p class="menu-card-price">IDR 1099K</p>
      </div>
      </div>
      
      <div id="produk5" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart" data-product-index="4"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="info"></i></a>
      </div>
      </div>
      <div class="product-img"><img src="https://i.pinimg.com/236x/2f/41/9b/2f419bf2b8c47784cfca28ee8e3adfb2.jpg"
        alt="set">
      </div>
      <div class="product-tittle">
        <h3 class="menu-card-title"> Attire #5 </h3>
      </div>
      <div class="product-price">
        <p class="menu-card-price">IDR 799K</p>
      </div>
      </div>
      
      
      <div id="produk6" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart" data-product-index="5"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="info"></i></a>
      </div>
      </div>
      <div class="product-img"><img src="https://i.pinimg.com/236x/41/31/ae/4131aefc73e59cf4d7d7b12747a8bce9.jpg"
        alt="set">
      </div>
        <div class="product-tittle">
          <h3 class="menu-card-title"> Attire #6 </h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 499K</p>
        </div>
      </div>
      
      
      <div id="produk7" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="6"><i data-feather="info"></i></a>
      </div>
      </div>
        <div class="product-img"><img src="https://i.pinimg.com/236x/a5/d1/e5/a5d1e5a1fa4aa36140f7e66d3ca07f46.jpg"
          alt="set">
        </div>
        <div class="product-tittle">
          <h3 class="menu-card-title"> Attire #7 </h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 699K</p>
        </div>
      </div>
     
      <div id="produk8" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="7"><i data-feather="info"></i></a>
      </div>
      </div>
        <div class="product-img"><img src="https://i.pinimg.com/236x/d2/d6/f3/d2d6f303c93920f1a6982342d8121f8b.jpg"
          alt="set">
        </div>
        <div class="product-tittle">
          <h3 class="menu-card-title"> Attire #8 </h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 599K</p>
        </div>
      </div>
     
     
      <div id="produk9" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="8"><i data-feather="info"></i></a>
      </div>
      </div>
        <div class="product-img"><img src="https://i.pinimg.com/236x/2d/4a/a2/2d4aa2a710ebd2519d4b31c569fba9e8.jpg"
          alt="set">
        </div>
        <div class="product-tittle">
          <h3 class="menu-card-title"> Attire #9 </h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 999K</p>
        </div>
      </div>
      
      <div id="produk10" class="menu-card">
      <div class="product-card">
        <div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button" data-product-index="9"><i data-feather="info"></i></a>
      </div>
      </div>
        <div class="product-img"><img src="https://i.pinimg.com/236x/7e/67/ba/7e67ba17d46841e560e3cd88f7fbbab0.jpg"
          alt="set">
        </div>
        <div class="product-tittle">
          <h3 class="menu-card-title"> Attire #10 </h3>
        </div>
        <div class="product-price">
          <p class="menu-card-price">IDR 699k</p>
        </div>
      </div>
    </div>
    </Section>
    <!-- menu end -->
<!-- Shopping cart-->

<!-- Contact Section start -->
<section id="contact" class="contact">
  <h2><span>Saran Unt</span>uk Kami</h2>
  <p>Saran anda menjadikan kami lebih baik</p>
  <div class="row">
    <form action="fungsi.php" method="post">
      <div class="input-group">
        <i data-feather="user"></i>
        <input type="text" placeholder="Nama" name="nama">    
      </div>
      <div class="input-group">
        <i data-feather="mail"></i>
        <input type="mail" placeholder="Email" name="email">    
      </div>
      <div class="input-group">
        <i data-feather="phone"></i>
        <input type="text" placeholder="Nomor HP" name="nomor_hp">
      </div>
      <div class="input-group">
        <i data-feather="message-square"></i>
        <input type="text" placeholder="Pesan Untuk Kami" name="pesan">    
      </div>
      <button type="submit" class="btn">Kirim pesan</button>
    </form>
  </div>
</section>

<!-- Contact Section end -->

    <!-- Icons -->

    <!-- Footer Start -->
<footer>
    <div class="links">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#menu">Produk</a>
    <a href="#contact">Saran</a>
    <a href="logout.php">Log Out</a>
     </div>
     
     <div class="credit">
      <p>About<a href="../About/index.php" target="_blank">Kelompok 2</a></p>
     </div>
     <div class="member">
      <a name="VS" href="https://instagram.com/poxyuu.05?igshid=YmMyMTA2M2Y=" target="_blank"><i
            data-feather="instagram" for="VS"></i>Vincent Sowody</a>
      <a name="VD"href="https://instagram.com/vincentdare_?igshid=YmMyMTA2M2Y=" target="_blank"><i
            data-feather="instagram" for="VD"></i>Vincent Dareda</a>
      <a name="CS"href="https://www.instagram.com/cessair_02/" target="_blank" ><i
            data-feather="instagram" for="CS"></i>Christian Somba</a>
      <a name="KL"href="https://instagram.com/kn.keii?igshid=ZDdkNTZiNTM=" target="_blank"><i
            data-feather="instagram" for="KL"></i>Kenneth Laorens</a>
     </div>
</footer>
<!--  Footer End  -->

<!-- Modal Box Item Detail Start -->
<div class="modal" id="item-detail-modal">
  <div class="modal-container">
    <a href="#" class="close-icon"><i data-feather="x"></i></a>
    <div class="modal-content">
      <img src="" alt="Product Image" id="modal-product-image">
      <div class="product-content">
        <h3 id="modal-product-title"></h3>
        <p id="modal-product-description"></p>
        <div class="product-price">
          <p id="modal-product-price"></p>
          <a href="#"><i data-feather="shopping-cart"></i><span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Modal Box -->
    <script>
      feather.replace();
    </script>
    <script src="script.js"></script>
  

  </body>
</html>


