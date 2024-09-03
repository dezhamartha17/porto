// Tambahkan efek hover pada menu navigasi
document.querySelectorAll('nav ul li a').forEach((link) => {
    link.addEventListener('mouseover', () => {
        link.classList.add('text-gray-900');
    });
    link.addEventListener('mouseout', () => {
        link.classList.remove('text-gray-900');
    });
});

// Tambahkan efek scroll pada halaman
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('bg-gray-900');
    } else {
        header.classList.remove('bg-gray-900');
    }
});