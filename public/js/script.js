document.addEventListener('DOMContentLoaded', function () {
  if (typeof Swiper !== 'undefined' && document.querySelector('.swiper-container')) {
    new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    });
  }

  window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    if (header) {
      var scrolled = window.scrollY > 10;
      if (scrolled) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    }
  });

  setTimeout(function () {
    let alert = document.querySelector('.alert');
    if (alert) {
      alert.style.display = 'none';
    }
  }, 5000);

  // Hamburger menu
  const hamburger = document.getElementById('hamburger-menu');
  const navList = document.querySelector('.nav-list');
  if (hamburger && navList) {
    hamburger.addEventListener('click', function () {
      navList.classList.toggle('nav-active');
      hamburger.classList.toggle('is-active');
    });
  }
});

function goBack() {
  window.history.back();
}

function updateProdi() {
  var jurusanElem = document.getElementById("jurusan");
  var prodi = document.getElementById("prodi");
  if (!jurusanElem || !prodi) return;

  var jurusan = jurusanElem.value;
  prodi.innerHTML = ""; // Clear existing options

  var options = [];
  if (jurusan === "Teknik Elektro") {
    options = ["D3 Teknik Elektronika", "D3 Teknik Listrik", "D3 Teknik Telekomunikasi", "D4 Teknik Listrik", "D4 Teknologi Rekayasa Jaringan Telekomunikasi"];
  } else if (jurusan === "Teknik Mesin") {
    options = ["D3 Teknik Konversi Energi", "D3 Teknik Mesin", "D3 Teknik Otomotif", "D3 Perawatan Alat Berat", "D4 Teknik Manufaktur", "D4 Teknik Mekatronika", "D4 Teknik Pembangkit Energi", "D4 Teknologi Rekayasa Energi Terbarukan", "S2 Terapan Rekayasa Teknologi Manufaktur"];
  } else if (jurusan === "Teknik Sipil") {
    options = ["D3 Teknik Konstruksi Gedung", "D3 Teknik Konstruksi Sipil", "D4 Perancangan Bangunan Gedung", "D4 Jasa Konstruksi"];
  } else if (jurusan === "Teknik Kimia") {
    options = ["D3 Analisis Kimia", "S1 Terapan Teknologi Kimia Industri", "S1 Terapan Teknologi Rekayasa Kimia Berkelanjutan"];
  } else if (jurusan === "Teknik Informatika dan Komputer") {
    options = ["D4 Teknik Multimedia dan Jaringan", "D4 Teknik Komputer dan Jaringan"];
  } else if (jurusan === "Administrasi Niaga") {
    options = ["D3 Administrasi Bisnis", "D4 Administrasi Bisnis"];
  } else if (jurusan === "Akuntansi") {
    options = ["D3 Akuntansi", "D4 Akuntansi Manajerial"];
  }

  options.forEach(function (option) {
    var opt = document.createElement("option");
    opt.value = option;
    opt.innerHTML = option.toUpperCase();
    prodi.appendChild(opt);
  });
}