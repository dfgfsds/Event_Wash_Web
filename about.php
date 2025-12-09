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
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        .slide {
            transition: opacity 1s ease-in-out;
        }
    </style>
</head>

<body class="bg-[#050505] text-white">
    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="py-20 mt-16 p-4 bg-gradient-to-b from-black to-[#0b0b0b] text-center" data-aos="fade-up">
        <h1 class="text-5xl md:text-6xl text-white font-bold mt-3 ">
           About us
        </h1>
        <!-- <p class="max-w-2xl mx-auto text-gray-400 text-lg mt-4">Perfect displays for exhibitions, events, conferences & weddings.</p> -->
    </section>

    <!-- MAIN SECTION -->
     <section class="relative glass py-20 sm:py-24 md:py-32 overflow-hidden" id="about">
        <!-- Floating Shapes -->
        <div
            class="absolute top-10 left-6 sm:left-10 w-20 sm:w-32 h-20 sm:h-32 bg-yellow-300 rounded-full opacity-50 float">
        </div>
        <div
            class="absolute top-1/3 right-6 sm:right-10 w-24 sm:w-40 h-24 sm:h-40 bg-purple-400 rounded-full opacity-40 float animation-delay-2000ms">
        </div>
        <div
            class="absolute bottom-10 sm:bottom-20 left-8 sm:left-20 w-16 sm:w-24 h-16 sm:h-24 bg-pink-400 rounded-full opacity-30 float animation-delay-4000ms">
        </div>

        <div class="max-w-7xl mx-auto px-4 flex flex-col-reverse lg:flex-row items-center gap-10 md:gap-14">

            <!-- Left Image -->
            <div class="relative flex-1 group mt-10 lg:mt-0" data-aos="fade-up">
                <img src="https://5.imimg.com/data5/SELLER/Default/2021/12/WW/ZD/SK/2712482/corporate-event-500x500.jpg"
                    alt="Event" data-aos="fade-up"
                    class="rounded-2xl sm:rounded-3xl w-full max-w-full shadow-2xl transform transition-transform duration-500 group-hover:scale-105 object-cover">
            </div>

            <!-- Right Content -->
            <div class="flex-1 text-center lg:text-left space-y-4 sm:space-y-6">
                <span class="text-yellow-500 uppercase tracking-widest text-sm sm:text-base font-semibold"
                    data-aos="fade-up">About
                    Event</span>
                <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold leading-tight text-gray-50">
                    Event Swash: Creating <br class="hidden sm:block" data-aos="fade-up" /> Memorable Experiences
                </h2>
                <p class="text-gray-50 text-base sm:text-lg leading-relaxed  " data-aos="fade-up">
                    Event Swash crafts unforgettable events with style and precision. We organize
                    <strong>corporate</strong>, <strong>cultural</strong>, <strong>outdoor</strong> events,
                    <strong>weddings</strong>, and <strong>custom decor</strong> — turning every occasion into a
                    memorable experience.
                </p>

                <div class="flex justify-center lg:justify-start">
                    <a href="https://wa.me/8105089996?text=Hello%21%20Welcome%20to%20Event%20Swash%20-%20crafting%20unforgettable%20experiences.%0A%0AWe%20offer%3A%0A-%20Corporate%20Event%0A-%20Cultural%20Event%0A-%20Outdoor%20Event%0A-%20Wedding%20Event%0A%0AEquipment%3A%20Projector%2C%20Sound%20system%2C%20Television%2C%20PA%20System%2C%20DJ%20Sound%2C%20LED%20Wall%2C%20Line%20array%20Setup%2C%20Stage%20Lightings.%0A%0AReply%20with%20the%20service%20name%20or%20type%20%27Quote%27%20to%20get%20a%20free%20estimate.%20Thank%20you%21"
                        class="relative animate-bounce inline-block px-5 sm:px-6 py-2.5 sm:py-3 font-semibold text-white rounded-full bg-gradient-to-r from-purple-600 to-yellow-400 hover:from-yellow-400 hover:to-purple-600 transition-all duration-500 ease-in-out transform hover:scale-105 shadow-lg hover:shadow-2xl before:absolute before:inset-0 before:rounded-full before:bg-white before:opacity-0 hover:before:opacity-10">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php include 'footer.php'; ?>
    <!-- Font Awesome (for icons) -->
    <script src="https://kit.fontawesome.com/a2d9d6f9d4.js" crossorigin="anonymous"></script>


    <script src="./js/main.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

</body>

</html>
