<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<aside class="w-full lg:w-72 bg-[#0d0d0d]/70 backdrop-blur-xl p-6 rounded-2xl neon-border sticky top-20">

    <h3 class="text-yellow-400 text-xl font-bold tracking-widest mb-6">Categories</h3>

    <div class="space-y-3">

        <!-- LED TV -->
        <a href="led-tv.php"
            class="flex items-center p-4 rounded-xl shadow-lg border 
            <?php echo ($current_page == 'led-tv.php') 
                ? 'bg-gradient-to-r from-purple-700/60 to-yellow-400/40 border-yellow-500/40 text-white font-semibold' 
                : 'bg-[#111] text-gray-300 hover:bg-purple-900/40 hover:text-white'; ?>
            ">
            <span class="w-2 h-9 mr-4 rounded-full 
                <?php echo ($current_page == 'led-tv.php') ? 'bg-yellow-400' : 'bg-gray-500'; ?>">
            </span>
            LED TV Rental
        </a>

        <!-- Projector -->
        <a href="projector.php"
            class="flex items-center p-4 rounded-xl shadow-lg border 
            <?php echo ($current_page == 'projector.php') 
                ? 'bg-gradient-to-r from-purple-700/60 to-yellow-400/40 border-yellow-500/40 text-white font-semibold' 
                : 'bg-[#111] text-gray-300 hover:bg-purple-900/40 hover:text-white'; ?>
            ">
            <span class="w-2 h-7 mr-4 rounded-full 
                <?php echo ($current_page == 'projector.php') ? 'bg-yellow-400' : 'bg-gray-500'; ?>">
            </span>
            Projector Rental
        </a>

        <!-- PA System -->
        <a href="sound-system.php"
            class="flex items-center p-4 rounded-xl shadow-lg border 
            <?php echo ($current_page == 'sound-system.php') 
                ? 'bg-gradient-to-r from-purple-700/60 to-yellow-400/40 border-yellow-500/40 text-white font-semibold' 
                : 'bg-[#111] text-gray-300 hover:bg-purple-900/40 hover:text-white'; ?>
            ">
            <span class="w-2 h-7 mr-4 rounded-full 
                <?php echo ($current_page == 'sound-system.php') ? 'bg-yellow-400' : 'bg-gray-500'; ?>">
            </span>
            Sound System Rental
        </a>

        <a href="lights.php"
            class="flex items-center p-4 rounded-xl shadow-lg border 
            <?php echo ($current_page == 'lights.php') 
                ? 'bg-gradient-to-r from-purple-700/60 to-yellow-400/40 border-yellow-500/40 text-white font-semibold' 
                : 'bg-[#111] text-gray-300 hover:bg-purple-900/40 hover:text-white'; ?>
            ">
            <span class="w-2 h-7 mr-4 rounded-full 
                <?php echo ($current_page == 'lights.php') ? 'bg-yellow-400' : 'bg-gray-500'; ?>">
            </span>
            Lights Rental
        </a>


    </div>
</aside>
