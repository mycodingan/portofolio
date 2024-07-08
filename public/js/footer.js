AOS.init();

// Kontroller untuk footer
const footerLinks = document.querySelectorAll('.footer-links a');
const footerSocialLinks = document.querySelectorAll('.footer-social a');

// Tambahkan event listener untuk animasi ketika elemen di-hover
footerLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        link.style.transform = 'scale(1.1)'; // Efek scaling ketika di-hover
    });

    link.addEventListener('mouseleave', () => {
        link.style.transform = 'scale(1)'; // Kembalikan ke ukuran semula
    });
});

footerSocialLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        link.style.color = '#ff9900'; // Ubah warna ketika di-hover
    });

    link.addEventListener('mouseleave', () => {
        link.style.color = '#fff'; // Kembalikan warna semula
    });
});
