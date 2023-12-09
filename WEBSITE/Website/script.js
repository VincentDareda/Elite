// Toggle class active untuk menu atau hamburger menu
const navbarNav = document.querySelector('.navbar-nav');
const hamburgerMenu = document.querySelector('#hamburger-menu');

hamburgerMenu.onclick = () => {
  navbarNav.classList.toggle('active');
};

// Toggle class active untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');
const searchButton = document.querySelector('#search');

searchButton.onclick = (e) => {
  searchForm.classList.toggle('active');
  searchBox.focus();
  e.preventDefault();
};

// Toggle class active untuk Shopping cart
const shoppingCart = document.querySelector('.shopping-cart');
const shoppingCartButton = document.querySelector('#shopping-cart-button');

shoppingCartButton.onclick = (e) => {
  shoppingCart.classList.toggle('active');
  e.preventDefault();
};

// Klik di luar elemen tersebut
document.addEventListener('click', function (e) {
  if (!hamburgerMenu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }

  if (!searchButton.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove('active');
  }

  if (!shoppingCartButton.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove('active');
  }
});

// Fungsi untuk search
function search() {
  var input = document.getElementById("search-box").value.toLowerCase();
  var cards = document.getElementsByClassName("menu-card");

  Array.from(cards).forEach((card) => {
    var title = card.querySelector(".menu-card-title").innerText.toLowerCase();
    card.style.display = title.includes(input) ? "" : "none";
  });
}

document.getElementById("search-box").addEventListener("input", search);

// Fungsi untuk menampilkan detail produk
// Fungsi untuk mendapatkan data produk berdasarkan indeks
function getProductData(index) {
  var productData = [
    {
      image: 'https://i.pinimg.com/236x/35/5f/1a/355f1acc15d4747ad9219afaf3a075ac.jpg',
      title: 'Attire #1',
      description: 'Haruki Series - Kafka. Limited Stock !  ',
      price: 'IDR 699k'
    },
     {
      image: 'https://i.pinimg.com/236x/bd/21/48/bd214855d70a5ebf20928a41dc22c3fb.jpg',
      title: 'Attire #2',
      description: 'Haruki Series - Nakata. Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/62/5f/eb/625feb0a981a41d8ac1c4b59f02edcc1.jpg',
      title: 'Attire #3',
      description: 'Haruki Series - Toro, Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/fe/78/ff/fe78ffe6717048b436788d32526921fc.jpg',
      title: 'Attire #4',
      description: 'Junko Series - Luca. Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/2f/41/9b/2f419bf2b8c47784cfca28ee8e3adfb2.jpg',
      title: 'Attire #5',
      description: 'Junko Series - Mogu . Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/41/31/ae/4131aefc73e59cf4d7d7b12747a8bce9.jpg',
      title: 'Attire #6',
      description: 'Junko Series - Hinagiku. Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/a5/d1/e5/a5d1e5a1fa4aa36140f7e66d3ca07f46.jpg',
      title: 'Attire #7',
      description: 'Shiba Series - Rune . Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/d2/d6/f3/d2d6f303c93920f1a6982342d8121f8b.jpg',
      title: 'Attire #8',
      description: 'Shiba Series - Riou . Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/2d/4a/a2/2d4aa2a710ebd2519d4b31c569fba9e8.jpg',
      title: 'Attire #9',
      description: 'Yoshikawa Series - Fleur . Limited Stock !',
      price: 'IDR 699k'
     },
     {
      image: 'https://i.pinimg.com/236x/7e/67/ba/7e67ba17d46841e560e3cd88f7fbbab0.jpg',
      title: 'Attire #10',
      description: 'Yoshikawa Series - Goma  . Limited Stock !',
      price: 'IDR 699k'
     },
  ];

  return productData[index];
}

function showProductDetail(index) {
  event.preventDefault();
  var modal = document.getElementById('item-detail-modal');
  var modalImage = document.getElementById('modal-product-image');
  var modalTitle = document.getElementById('modal-product-title');
  var modalDescription = document.getElementById('modal-product-description');
  var modalPrice = document.getElementById('modal-product-price');

  var productData = getProductData(index);
  modalImage.src = productData.image;
  modalTitle.textContent = productData.title;
  modalDescription.textContent = productData.description;
  modalPrice.textContent = productData.price;

  modal.style.display = 'block';
  
}



// Fungsi untuk menutup modal dan menggulir ke bagian tertentu
function closeModal() {
  var modal = document.getElementById('item-detail-modal');
  modal.style.display = 'none';

  var menuSection = document.getElementById('menu');
  menuSection.scrollIntoView({ behavior: 'smooth' });
  event.preventDefault();
}

// Menambahkan event listener untuk tombol detail produk
var detailButtons = document.getElementsByClassName('item-detail-button');
Array.from(detailButtons).forEach((button) => {
  button.addEventListener('click', function (event) {
    event.stopPropagation();
    var index = event.target.getAttribute('data-product-index');
    showProductDetail(index);
  });
});

// Menambahkan event listener untuk tombol tutup modal
var closeButton = document.getElementsByClassName('close-icon')[0];
closeButton.addEventListener('click', closeModal);
