<?php include 'inc/header.php'; ?>
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center text-center">
    <video class="absolute inset-0 w-full h-full object-cover z-0" autoplay muted loop>
        <source src="/images/main.mp4" type="video/mp4" />
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
    <div class="z-20 px-4">
        <h1 class="text-4xl md:text-7xl font-bold mb-6">Timeless Elegance</h1>
        <p class="text-lg md:text-2xl mb-8">A Journey Through Grandeur and Heritage</p>
        <a href="#about" class="inline-block px-6 py-3 bg-yellow-500 text-neutral-900 font-semibold rounded-xl transition hover:bg-yellow-400">Explore Now</a>
    </div>
    <!-- SVG Transition at bottom of Hero -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-10">
        <svg class="relative block w-full h-[120px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#800020" fill-opacity="1"
                d="M0,64C144,128,288,192,432,192C576,192,720,128,864,96C1008,64,1152,64,1296,85.3C1384,96,1440,106,1440,106L1440,320H0Z">
            </path>
        </svg>
    </div>
</section>

<!-- About Section -->
<section id="about" class="relative bg-[#800020] py-10 px-6 md:px-20 text-center">
    <h2 class="text-5xl md:text-6xl text-center mb-12 text-[#FFD700] font-imperial italic tracking-wider"
        style="text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3), 0 0 15px rgba(255, 215, 0, 0.8);">
        The Legacy
    </h2>
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center pb-10">
        <p class="text-lg leading-relaxed">Nestled in the heart of timeless history, our palace offers a glimpse into the grandeur of a bygone era. Walk through its halls and experience the art, architecture, and atmosphere once reserved for royalty.</p>
        <img src="/images/test.png" alt="Interior" class="rounded-2xl shadow-lg" />
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-10 bg-[#800020]">
        <svg viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M 0 7 C 98 64 488 10 689 15 C 847 18 1173.33 43.9999 1280 43.9999 C 1386.67 43.9999 1440 19.0266 1440 9.0133 V 64 H 0 V 17 Z"
                class="fill-[#262626] text-gray-400"></path>
        </svg>
    </div>
</section>

<!-- Gallery Section -->
<section class="relative bg-[#262626] pt-8 pb-20 px-6 md:px-20 z-0">
    <h2 class="text-5xl md:text-6xl text-center mb-12 text-[#FFD700] font-imperial italic tracking-wider"
        style="text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3), 0 0 15px rgba(255, 215, 0, 0.8);">
        Visual Journey
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
        <img src="/images/test.png" class="rounded-xl transform hover:scale-105 transition duration-300 grayscale-[0.25] hover:grayscale-0 hover:cursor-pointer shadow-md" />
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-10 bg-[#262626]">
        <svg viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 22C106.667 43.9999 214 29 320 29 425 28 533.333 43.9999 640 43.9999 746.667 43.9999 853.333 7.9999 960 7.9999 1066.67 7.9999 1173.33 43.9999 1280 43.9999 1386.67 43.9999 1440 19.0266 1440 9.0133V65H0V15Z"
                class="fill-[#800020] text-gray-400"></path>
        </svg>
    </div>
</section>

<!-- Architecture Section -->
<section class="relative bg-[#800020] py-10 pb-20 px-6 md:px-20 text-center">
    <h2 class="text-4xl md:text-5xl mb-10 text-[#FFD700] font-imperial italic tracking-wider">
        Merveilles Architecturales
    </h2>
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <a href="/chambres/" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-neutral-800 rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Chambres Royales</h3>
                <p>Des espaces luxueux où la royauté vivait et régnait. Chaque chambre reflète l'élégance et la grandeur, avec des détails architecturaux qui incarnent la puissance et le raffinement de l'époque royale.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/chambres-royales-1.png" alt="Chambres Royales" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-[#800020] px-6 py-2 rounded-full text-lg shadow-md">Explorer</button>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="/detail-page" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-neutral-800 rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Tours Intemporelles</h3>
                <p>Des tours majestueuses qui défient le temps, offrant des vues impressionnantes et représentant l'innovation architecturale de chaque époque. Chaque tour est un témoignage de la maîtrise de l'architecture à travers les âges.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/test.png" alt="Tours Intemporelles" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-[#800020] px-6 py-2 rounded-full text-lg shadow-md">Explorer</button>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="/detail-page" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-neutral-800 rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Le Grand Escalier</h3>
                <p>Une ascension noble, où chaque pas résonne des échos de l'histoire. Cet escalier a été témoin de nombreux moments de grandeur et de triomphe, représentant l'ingéniosité architecturale de son époque.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/test.png" alt="Le Grand Escalier" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-[#800020] px-6 py-2 rounded-full text-lg shadow-md">Explorer</button>
            </div>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-10 bg-[#800020]">
        <svg viewBox="0 0 1440 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M 0 7 C 98 64 488 10 689 15 C 847 18 1173.33 43.9999 1280 43.9999 C 1386.67 43.9999 1440 19.0266 1440 9.0133 V 64 H 0 V 17 Z"
                class="fill-neutral-900 text-gray-400"></path>
        </svg>
    </div>
</section>






<!-- Events Section -->
<section class="bg-neutral-900 py-10  pb-20 px-6 md:px-20 text-center">
    <h2 class="text-4xl md:text-5xl mb-10 text-[#FFD700] font-imperial italic tracking-wider">
        Evenings & Events
    </h2>
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <a href="/detail-page" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-[#800020] rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Candlelight Tour</h3>
                <p>Step into the palace after dark and discover its mysteries by flickering light.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/test.png" alt="Candlelight Tour" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-neutral-900 px-6 py-2 rounded-full text-lg shadow-md">Explore</button>
            </div>
        </a>
        <!-- Card 2 -->
        <a href="/detail-page" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-[#800020] rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Baroque Concert</h3>
                <p>Enjoy classical music as it was meant to be heard – in majestic halls of old.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/test.png" alt="Baroque Concert" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-neutral-900 px-6 py-2 rounded-full text-lg shadow-md">Explore</button>
            </div>
        </a>
        <!-- Card 3 -->
        <a href="/detail-page" class="relative group cursor-pointer flex flex-col">
            <div class="p-6 bg-[#800020] rounded-t-xl shadow-lg flex-grow">
                <h3 class="text-2xl mb-2 text-yellow-400">Garden Illumination</h3>
                <p>Wander through glowing paths and fountains in an enchanting night display.</p>
            </div>
            <div class="overflow-hidden rounded-b-xl">
                <img src="images/test.png" alt="Garden Illumination" class="w-full h-auto transition duration-300 group-hover:opacity-70" />
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition duration-300">
                <button class="bg-yellow-400 text-neutral-900 px-6 py-2 rounded-full text-lg shadow-md">Explore</button>
            </div>
        </a>
    </div>
</section>

<!-- Top Divider -->
<div class="w-full h-1 bg-gradient-to-r from-[#FFD700] to-[#FF6600]"></div>

<!-- Quote Section -->
<section class="bg-[#800020] py-28 text-center px-6 md:px-20">
    <blockquote class="max-w-4xl mx-auto text-6xl md:text-7xl italic text-yellow-300 font-imperial">
        "Where history whispers in golden halls."
    </blockquote>
</section>

<!-- Bottom Divider -->
<div class="w-full h-1 bg-gradient-to-r from-[#FFD700] to-[#FF6600]"></div>


<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>