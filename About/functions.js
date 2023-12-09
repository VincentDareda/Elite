// Mendapatkan elemen-elemen yang dibutuhkan
const sliderContainer = document.getElementById("slider-container");
const slider = document.querySelector(".slider");
const previousButton = document.querySelector(".previous");
const nextButton = document.querySelector(".next");

// Mengatur posisi awal slide
let slidePosition = 0;

// Mengatur event listener untuk tombol sebelumnya
previousButton.addEventListener("click", function () {
  if (slidePosition === 0) {
    slidePosition = slider.childElementCount - 1;
  } else {
    slidePosition--;
  }
  updateSlidePosition();
});

// Mengatur event listener untuk tombol berikutnya
nextButton.addEventListener("click", function () {
  if (slidePosition === slider.childElementCount - 1) {
    slidePosition = 0;
  } else {
    slidePosition++;
  }
  updateSlidePosition();
});

// Fungsi untuk memperbarui posisi slide
function updateSlidePosition() {
  slider.style.transform = `translateX(-${slidePosition * 100}%)`;
}

// Memanggil fungsi untuk memulai slide
updateSlidePosition();
