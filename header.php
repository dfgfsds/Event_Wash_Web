
    <!-- ===== HEADER ===== -->
    <header class="fixed top-0 left-0 w-full z-50 bg-black/40 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-4 md:py-5">

            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <a href="#home">
                    <img src="assets/logo/logo_Swash1.png" alt="Event Swash Logo"
                        class="w-[200px] md:w-[250px] h-[65px]  md:h-[75px]">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6 font-medium text-white">
                <a href="index.php" class="hover:text-yellow-400 text-base transition">Home</a>
                <a href="about.php" class="hover:text-yellow-400 text-base transition">About</a>
                <a href="led-tv.php" class="hover:text-yellow-400 text-base transition">Televisions</a>
                   <a href="projector.php" class="hover:text-yellow-400 text-base transition">Projector</a>
                   <a href="lights.php" class="hover:text-yellow-400 text-base transition">Lights</a>
                   <a href="sound-system.php" class="hover:text-yellow-400 text-base transition">Sound System</a>
                <!-- <a href="#gallery" class="hover:text-yellow-400 text-base transition">Gallery</a> -->
                <a href="contact.php" class="hover:text-yellow-400 text-base transition">Contact</a>
            </nav>

            <!-- Buttons / Mobile Menu Toggle -->
            <div class="flex items-center space-x-3">
                <a
                    href="https://wa.me/8105089996?text=Hello%21%20Welcome%20to%20Event%20Swash%20-%20crafting%20unforgettable%20experiences.%0A%0AWe%20offer%3A%0A-%20Corporate%20Event%0A-%20Cultural%20Event%0A-%20Outdoor%20Event%0A-%20Wedding%20Event%0A%0AEquipment%3A%20Projector%2C%20Sound%20system%2C%20Television%2C%20PA%20System%2C%20DJ%20Sound%2C%20LED%20Wall%2C%20Line%20array%20Setup%2C%20Stage%20Lightings.%0A%0AReply%20with%20the%20service%20name%20or%20type%20%27Quote%27%20to%20get%20a%20free%20estimate.%20Thank%20you%21">
                    <button class="hidden md:block relative inline-block px-6 py-3 font-semibold text-white rounded-full bg-gradient-to-r from-purple-600 to-yellow-400
          hover:from-yellow-400 hover:to-purple-600
          transition-all duration-500 ease-in-out
          transform hover:scale-105
          shadow-lg hover:shadow-2xl
          before:absolute before:inset-0 before:rounded-full before:bg-white before:opacity-0 hover:before:opacity-10">
                        Get Start
                    </button>
                </a>
                <!-- Mobile Menu Button -->
                <button id="menu-btn" class="md:hidden text-yellow-400 text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

        </div>
    </header>

    <!-- ===== MOBILE MENU ===== -->
    <div id="mobileMenu"
        class="hidden fixed inset-0 bg-black bg-opacity-90 z-50 flex flex-col items-center justify-center space-y-6 text-lg md:hidden">

        <!-- Close Button -->
        <button id="closeMenu" class="absolute top-6 right-6 text-yellow-400 text-3xl z-50">
            <i class="fa-solid fa-xmark"></i>
        </button>

            <a href="index.php" class="hover:text-yellow-400 text-base transition">Home</a>
                <a href="about.php" class="hover:text-yellow-400 text-base transition">About</a>
                <a href="led-tv.php" class="hover:text-yellow-400 text-base transition">Televisions</a>
                   <a href="projector.php" class="hover:text-yellow-400 text-base transition">Projector</a>
                   <a href="lights.php" class="hover:text-yellow-400 text-base transition">Lights</a>
                   <a href="sound-system.php" class="hover:text-yellow-400 text-base transition">Sound System</a>
                <!-- <a href="#gallery" class="hover:text-yellow-400 text-base transition">Gallery</a> -->
                <a href="contact.php" class="hover:text-yellow-400 text-base transition">Contact</a>
    </div>
