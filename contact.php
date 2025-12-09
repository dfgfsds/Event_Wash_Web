<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Event Swash | Professional Event Management Company for Corporate & Wedding Events</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .neon-border {
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 15px rgba(255, 230, 0, 0.2);
        }

        .product-card:hover {
              box-shadow: 0 0 25px rgba(36, 127, 247, 0.5);
        }
    </style>
</head>

<body class="bg-[#050505] text-white">
    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
  <section class="py-20 mt-16 bg-gradient-to-b from-black to-[#0b0b0b] text-center" data-aos="fade-up">
    <h1 class="text-5xl md:text-6xl text-white font-bold mt-3">
        Contact Event Swash
    </h1>
    <p class="max-w-2xl mx-auto text-gray-400 text-lg mt-4">
        Reach out to Event Swash for premium sound systems, event equipment rentals, and complete event support services.
    </p>
</section>

    <!-- MAIN SECTION -->
<!-- CONTACT SECTION ADDED BELOW -->
    <section class="relative py-16 md:py-24 text-white" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

           

            <!-- Form & Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">

                <!-- Left: Map + Contact Info -->
                <div class="space-y-6 md:space-y-8">

                    <div data-aos="fade-up">
                          <h3 class="text-xl sm:text-2xl font-bold text-yellow-300 mb-2 sm:mb-3">Contact Information</h3>
                        <p class="text-gray-100 text-base sm:text-lg">
                            Reach out via email, phone, or fill in the form. We’re happy to assist with your event
                            needs.
                        </p>
                    </div>

                    <div class="space-y-3 text-gray-300" data-aos="fade-up">
                        <p class="flex items-center gap-3 sm:gap-4 text-sm sm:text-lg">
                            <span class="text-gray-100 text-lg sm:text-xl">📍</span>
                            <span>Kumaraswamy Layout,<br /> JP Nagar, Bangalore - 560078</span>
                        </p>
                        <p class="flex items-center gap-3 sm:gap-4 text-sm sm:text-lg">
                            <span class="text-gray-100 text-lg sm:text-xl">📞</span>
                            <span>+91 8105089996</span>
                        </p>
                        <p class="flex items-center gap-3 sm:gap-4 text-sm sm:text-lg">
                            <span class="text-gray-100 text-lg sm:text-xl">✉️</span>
                            <span>contact@eventswash.com</span>
                        </p>
                    </div>

                    <!-- Map -->
                    <div class="w-full h-56 sm:h-64 md:h-72 rounded-2xl overflow-hidden shadow-xl">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31112.587838379975!2d77.54232926112205!3d12.90299659397133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fd8bd62431f%3A0x98cb23be33255019!2sKumaraswamy%20Layout%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1761210065212!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Right: Form -->
                <form
                    class="glas1 rounded-3xl border border-gray-800 shadow-2xl p-6 sm:p-8 md:p-10 space-y-4 sm:space-y-6"
                    data-aos="fade-up">

                    <div>
                        <label class="block text-sm text-gray-400 mb-1 sm:mb-2">Name</label>
                        <input type="text" placeholder="Your Name"
                            class="w-full p-3 sm:p-4 rounded-xl bg-[#1f1f3b] border border-transparent focus:border-yellow-400 focus:outline-none text-white placeholder-gray-100 transition duration-300 text-sm sm:text-base">
                    </div>

                    <div>
                        <label class="block text-sm text-gray-400 mb-1 sm:mb-2">Number</label>
                        <input type="text" placeholder="Phone Number"
                            class="w-full p-3 sm:p-4 rounded-xl bg-[#1f1f3b] border border-transparent focus:border-yellow-400 focus:outline-none text-white placeholder-gray-100 transition duration-300 text-sm sm:text-base">
                    </div>

                    <div>
                        <label class="block text-sm text-gray-400 mb-1 sm:mb-2">Message</label>
                        <textarea rows="4" placeholder="Write your message..."
                            class="w-full p-3 sm:p-4 rounded-xl bg-[#1f1f3b] border border-transparent focus:border-yellow-400 focus:outline-none text-white placeholder-gray-100 transition duration-300 text-sm sm:text-base"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full sm:w-auto relative inline-block px-6 py-3 sm:px-8 sm:py-4 font-semibold text-gray-50 rounded-3xl bg-gradient-to-r from-purple-800 to-yellow-400 hover:from-yellow-400 hover:to-purple-600 transition-all duration-500 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-2xl before:absolute before:inset-0 before:rounded-full before:bg-white before:opacity-0 hover:before:opacity-10">
                        Send Message
                    </button>
                </form>

            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
    <script>
        AOS.init({ duration: 1200, once: true });
    </script>

</body>

</html>
