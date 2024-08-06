<?php ob_start(); ?>


<main class="container sm:mt-36 md:mt-0 flex flex-col min-h-full justify-center mx-auto py-12 px-4">
    <section class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-4xl font-bold text-orange-800 mb-4">À propos de SUPERSTORE</h2>
        <p class="text-gray-700 text-lg mb-6">SUPERSTORE est une plateforme de commerce en ligne dédiée à offrir des produits de qualité supérieure à des prix compétitifs. Notre mission est de rendre le shopping en ligne facile, sûr et agréable pour tous nos clients.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-2xl font-bold text-orange-400 mb-2">Notre Mission</h3>
                <p class="text-gray-700">Chez SUPERSTORE, notre mission est de fournir une expérience de shopping en ligne exceptionnelle en offrant une large gamme de produits de qualité, un service client impeccable, et des livraisons rapides et fiables.</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-orange-400 mb-2">Nos Valeurs</h3>
                <p class="text-gray-700">Nous croyons en l'intégrité, la transparence et l'engagement envers nos clients. Ces valeurs fondamentales guident toutes nos actions et nous permettent de bâtir des relations durables avec nos clients.</p>
            </div>
        </div>
        <hr class="mx-auto w-2/5 my-8">
        <div class="mt-8 mb-5 h-8 w-full text-center text-xl space-y-8">
            vous avez des questions?
            <br>
            <a href="/FAQ" class="text-orange-700 hover:underline cursor-pointer hover:text-orange-500 hover:scale-105 hover:shadow-xl">Ouvrir la foire aux questions ! 😉</a>
        </div>
    </section>
</main>

<?php
$content = ob_get_clean();
require_once('src/views/template/base.php');
?>