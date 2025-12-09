// ===== HERO SLIDER =====
const slides = document.querySelectorAll('.slide');
let index = 0;

function showSlide() {
  slides.forEach((slide, i) => {
    slide.style.opacity = i === index ? 1 : 0;
  });
  index = (index + 1) % slides.length;
}

setInterval(showSlide, 6000);
showSlide();

// ===== MOBILE MENU =====
// ===== MOBILE MENU =====
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobileMenu');
  const closeMenu = document.getElementById('closeMenu');
  const menuLinks = document.querySelectorAll('#mobileMenu a'); // All menu links

  // Open Menu
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
  });

  // Close Menu (X button)
  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });

  // Close menu on clicking any menu link
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  });
});
