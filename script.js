const navbarNav = document.querySelector(".navbar-nav");

// Ketika hamburger menu diklik
document.querySelector("#hamburger-menu").addEventListener('click', () => {
  navbarNav.classList.toggle('active');
});

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function(e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});
