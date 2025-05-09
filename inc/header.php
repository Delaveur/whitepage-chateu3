<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="fr">
    <meta name="language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez Le Grand Palais, un site historique remarquable offrant des expositions captivantes et des perspectives uniques sur l’art, la culture et le patrimoine en France." />
    <meta name="keywords" content="Le Grand Palais, palais, art, expositions, patrimoine culturel, histoire, France, musée, site historique, culture" />
    <link rel="icon" href="/whitepage/2/favicon.ico" type="image/x-icon">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Le Grand Palais'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function() {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuButton.querySelector('svg').classList.toggle('rotate-90');
            });
        });
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }

        .font-imperial {
            font-family: 'Imperial Script', cursive;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <style>
        .swiper-slide {
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .swiper-slide-active {
            opacity: 1;
        }
    </style>
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gold-hover {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gold-hover img {
            transition: transform 0.5s, filter 0.5s;
        }

        .gold-hover:hover img {
            transform: scale(1.05);
            filter: brightness(0.7);
        }

        .info-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            opacity: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s;
            padding: 20px;
            text-align: center;
        }

        .gold-hover:hover .info-overlay {
            opacity: 1;
        }

        .gradient-bg {
            background: radial-gradient(circle at 30% 30%, #f4ede4, #fffaf0);
        }
    </style>
</head>

<body class="bg-neutral-900 text-white">
    <!-- Navigation -->
    <nav class="bg-[#1a1a1a] shadow-md text-white font-serif">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/whitepage/2/" class="text-4xl font-bold tracking-wide italic font-imperial text-[#FFD700]">Le Grand Palais</a>
                <!-- Desktop menu -->
                <div class="hidden md:flex space-x-8 items-center text-base">
                    <a href="/whitepage/2/decouvrir/histoire/" class="hover:text-[#FFD700] transition-colors">Histoire</a>
                    <a href="/whitepage/2/preparer-ma-visite/" class="hover:text-[#FFD700] transition-colors">Préparer ma visite</a>
                    <a href="/whitepage/2/preparer-ma-visite/informations-pratiques/" class="hover:text-[#FFD700] transition-colors">Informations Pratiques</a>
                    <a href="/whitepage/2/preparer-ma-visite/billets-tarifs/" class="hover:text-[#FFD700] transition-colors">Billets & Tarifs</a>
                    <a href="/whitepage/2/actualites/agenda-chateau-versailles/" class="hover:text-[#FFD700] transition-colors">Agenda</a>
                    <a href="/whitepage/2/contact-us/" class="hover:text-[#FFD700] transition-colors">Contacts</a>
                </div>
                <!-- Mobile button -->
                <button
                    id="menu-button"
                    class="md:hidden p-2 rounded-md text-[#FFD700] hover:bg-[#262626] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FFD700]"
                    aria-label="Menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                    <svg
                        class="h-6 w-6 transition-transform"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden absolute w-full bg-[#1a1a1a] shadow-lg py-2 z-40 text-white">
            <a href="/whitepage/2/decouvrir/histoire/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Histoire</a>
            <a href="/whitepage/2/preparer-ma-visite/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Préparer ma visite</a>
            <a href="/whitepage/2/preparer-ma-visite/informations-pratiques/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Informations Pratiques</a>
            <a href="/whitepage/2/preparer-ma-visite/billets-tarifs/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Billets & Tarifs</a>
            <a href="/whitepage/2/actualites/agenda-chateau-versailles/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Agenda</a>
            <a href="/whitepage/2/contact-us/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Contacts</a>
        </div>
    </nav>
    <!-- Secondary Navigation -->
    <nav class="bg-[#800020] text-yellow-200 w-full px-4 py-4">
        <div class="max-w-screen-xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-sm font-medium tracking-wide">
            <a href="/whitepage/2/chambres/" class="hover:text-white transition-colors">Chambres Royales</a>
            <a href="/whitepage/2/tours/" class="hover:text-white transition-colors">Tours Intemporelles</a>
            <a href="/whitepage/2/escalier/" class="hover:text-white transition-colors">Le Grand Escalier</a>
            <a href="/whitepage/2/chandelles/" class="hover:text-white transition-colors">Visite aux Chandelles</a>
            <a href="/whitepage/2/baroque/" class="hover:text-white transition-colors">Concert Baroque</a>
            <a href="/whitepage/2/jardins/" class="hover:text-white transition-colors">Illumination des Jardins</a>
        </div>
    </nav>