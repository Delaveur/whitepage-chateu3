<?php
$page_title = "Contactez nous";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<section class="pt-12 mb-12 text-center">
  <h1 class="text-[#FFD700] font-imperial italic text-8xl">Contactez nous</h1>
</section>

  <!-- Contact Section -->
  <section id="contacts" class="bg-[#262626] py-16 px-4 text-black">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
    <div class="relative w-full h-full">
      <iframe src="https://maps.google.com/maps?q=15%20Rue%20du%20Général%20Leclerc,%2078000%20Versailles,%20France&t=&z=13&ie=UTF8&iwloc=&output=embed" class="w-full h-full min-h-[500px] rounded-2xl shadow-lg border-0"></iframe>
      <div class="absolute bottom-4 left-4 bg-white bg-opacity-90 rounded-xl p-4 shadow-lg">
        <p class="text-lg mb-1 text-black"><strong class="text-[#800020]">Email:</strong> consultation@ittechservices.com</p>
        <p class="text-lg mb-1 text-black"><strong class="text-[#800020]">Phone:</strong> +33 6 72 58 39 14</p>
        <p class="text-lg text-black"><strong class="text-[#800020]">Address:</strong> 15 Rue du Général Leclerc, 78000, Versailles, France</p>
      </div>
    </div>
    <div class="bg-[#800020] rounded-2xl shadow-lg p-8 flex flex-col justify-center">
      <!-- Contact Form -->
      <form action="contact.php" method="POST">
        <div class="mb-4">
          <label for="lastName" class="block mb-2 text-[#FFD700]">Nom de famille</label>
          <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
        </div>
        <div class="mb-4">
          <label for="firstName" class="block mb-2 text-[#FFD700]">Prénom</label>
          <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
        </div>
        <div class="mb-4">
          <label for="email" class="block mb-2 text-[#FFD700]">Email</label>
          <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
        </div>
        <div class="mb-4">
          <label for="message" class="block mb-2 text-[#FFD700]">Message</label>
          <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded-lg"></textarea>
        </div>
        <button type="submit" class="bg-[#FFD700] text-[#800020] font-bold py-2 px-4 rounded-lg hover:bg-yellow-400 transition">Envoyer</button>
      </form>
    </div>
  </div>
</section>



<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>