const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//missing search
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajax

  // xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // };

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();


  // fetch()

  fetch('ajax/ajax_cari_index.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});

// Priview Image untuk Tambah dan Ubah
function previewImage() {
  const img = document.querySelector('.img');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(img.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}






jQuery(document).ready(function () {

  var navOffset = jQuery("nav").offset().top;

  jQuery("nav").wrap('<div class="nav-placeholder"></div>');
  jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

  jQuery("nav").wrapInner('<div class="nav-inner"></div>');
  jQuery("nav-inner").wrapInner('<div class="nav-inner-most"></div>');

  jQuery(window).scroll(function () {
    var scrollPos = jQuery(window).scrollTop();
    jQuery(".status").html(scrollPos);

    if (scrollPos >= navOffset) {
      jQuery("nav").addClass("fixed");
    } else {
      jQuery("nav").removeClass("fixed");
    }

  });
});
