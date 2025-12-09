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
    <section class="py-20 p-4 mt-16 bg-gradient-to-b from-black to-[#0b0b0b] text-center" data-aos="fade-up">
        <h1 class="text-5xl md:text-6xl text-white font-bold mt-3 ">
            Premium Sound System Rentals
        </h1>
        <p class="max-w-2xl mx-auto text-gray-400 text-lg mt-4">Perfect displays for exhibitions, events, conferences & weddings.</p>
    </section>

    <!-- MAIN SECTION -->
    <section class="max-w-7xl mx-auto px-4 py-12 flex flex-col lg:flex-row gap-12">

        <!-- LEFT SIDEBAR -->
       <?php include 'side-bar.php'; ?>
        <!-- RIGHT PRODUCT GRID -->
        <main class="flex-1">

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-10">

                <!-- PRODUCT 1 -->
                <div class="product-card bg-[#0d0d0d] rounded-2xl overflow-hidden neon-border transition-all duration-500 cursor-pointer group"
                    data-aos="fade-up" data-aos-delay="100">

                    <div class="relative w-full h-64 bg-black flex items-center justify-center">
                        <img src="assets/sound-system/1.png"
                            class="w-full h-full object-contain opacity-100 group-hover:opacity-0 transition-all duration-700">

                        <img src="assets/sound-system/2.png"
                            class="w-full h-full object-contain absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
                    </div>

                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-yellow-400">Bluetooth speakers</h3>

                        <h4 class="text-xl text-white font-bold">
                            ₹1,000 onwards
                        </h4>

                        <div class="flex justify-start ">
                            <a href="https://wa.me/8105089996?text=Hi! I want Bluetooth speakers Rental Quote."
                                class="relative inline-block px-5 sm:px-6  py-2 mt-6 sm:py-2.5 font-semibold text-gray-50 rounded-2xl bg-gradient-to-r from-purple-800 to-yellow-400 hover:from-yellow-400 hover:to-purple-600 transition-all duration-500 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-2xl before:absolute before:inset-0 before:rounded-full before:bg-white before:opacity-0 hover:before:opacity-10">
                                Rent Now
                            </a>
                        </div>
                    </div>
                </div>

                    <!-- PRODUCT 1 -->
                <div class="product-card bg-[#0d0d0d] rounded-2xl overflow-hidden neon-border transition-all duration-500 cursor-pointer group"
                    data-aos="fade-up" data-aos-delay="100">

                    <div class="relative w-full h-64 bg-black flex items-center justify-center">
                        <img src="assets/sound-system/3.png"
                            class="w-full h-full object-contain opacity-100 group-hover:opacity-0 transition-all duration-700">

                        <img src="assets/sound-system/4.png"
                            class="w-full h-full object-contain absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700">
                    </div>

                    <div class="p-4">
                        <h3 class="text-2xl font-bold text-yellow-400">PA System</h3>

                        <h4 class="text-xl text-white font-bold">
                            ₹4,000 onwards
                        </h4>

                        <div class="flex justify-start ">
                            <a href="https://wa.me/8105089996?text=Hi! I want PA System Rental Quote."
                                class="relative inline-block px-5 sm:px-6  py-2 mt-6 sm:py-2.5 font-semibold text-gray-50 rounded-2xl bg-gradient-to-r from-purple-800 to-yellow-400 hover:from-yellow-400 hover:to-purple-600 transition-all duration-500 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-2xl before:absolute before:inset-0 before:rounded-full before:bg-white before:opacity-0 hover:before:opacity-10">
                                Rent Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    </section>
<?php include 'footer.php'; ?>
    <script>
        AOS.init({ duration: 1200, once: true });
    </script>

</body>

</html>
