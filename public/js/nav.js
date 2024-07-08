const nav = document.querySelector('nav');
let lastScrollTop = 0;
let isScrollingUp = false;

window.addEventListener('scroll', () => {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // Menggulir ke bawah
    if (isScrollingUp) {
      // Jika sebelumnya menggulir ke atas, tambahkan class scrolled
      nav.classList.add('scrolled');
      isScrollingUp = false;
    }
  } else {
    // Menggulir ke atas
    if (!isScrollingUp && scrollTop < 100) {
      // Jika sebelumnya menggulir ke bawah dan posisi scroll cukup tinggi, hilangkan class scrolled
      nav.classList.remove('scrolled');
      isScrollingUp = true;
    }
  }

  lastScrollTop = scrollTop;
});
