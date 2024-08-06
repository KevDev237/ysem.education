<?php ob_start(); ?>
<main class="min-h-full w-full flex flex-col justify-center items-center">
    <section id="contact" class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8 underline text-colorPrimary">CONTACT</h1>
        <div class="flex flex-col md:flex-row justify-between">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt text-2xl mr-4"></i>
                        <span>Yaounde, Cameroon</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-2xl mr-4"></i>
                        <a href="tel:+237698182553">(+237) 698-182-553</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-2xl mr-4"></i>
                        <a href="tel:+237652622096">(+237) 652-622-096</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-2xl mr-4"></i>
                        <a href="mailto:info@ysem.education">info@ysem.education</a>
                    </li>
                </ul>
                <hr class="my-6">
                <ul class="flex justify-center space-x-4">
                    <li><a href="#" class="text-2xl"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="text-2xl"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#" class="text-2xl"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="text-2xl"><i class="fab fa-twitter"></i></a></li>
                </ul>
                <hr class="my-6">
                <div class="text-center text-sm">© ALL OF THE RIGHTS RESERVED</div>
            </div>
            <div class="w-full md:w-1/2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3980.9792157348097!2d11.4909912!3d3.8145685!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scm!4v1680462972552!5m2!1sen!2scm" class="w-full h-[450px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</main>

<?php
$content = ob_get_clean();
require_once('src/views/template/base.php');
?>