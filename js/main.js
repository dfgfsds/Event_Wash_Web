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


document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname.split("/").pop(); 
    const links = document.querySelectorAll(".category-link");

    links.forEach(link => {
        const href = link.getAttribute("href");

        if (href === currentPage) {
            // Apply active styles to the link
            link.classList.remove("bg-[#111]", "text-gray-300");
            link.classList.add(
                "bg-gradient-to-r",
                "from-purple-700/60",
                "to-yellow-400/40",
                "border-yellow-500/40",
                "text-white",
                "font-semibold"
            );

            // Update the indicator bar
            const indicator = link.querySelector(".indicator");
            indicator.classList.remove("bg-gray-500");
            indicator.classList.add("bg-yellow-400");
        }
    });
});

