<footer class="mt-10 mb-3 flex flex-col text-slate-700">
    <div class="w-5/12 mx-auto">
        <div class="my-2 flex flex-wrap justify-around items-center">
            <a href="/" class="hover:scale-125 hover:text-slate-400"> Accueil </a>
            <a href="/partner" class="hover:scale-125 hover:text-slate-400"> Partenaire </a>
            <a href="/contact" class="hover:scale-125 hover:text-slate-400"> Contact </a>
            <?php if (!isset($_SESSION['userLoggedIn'])) : ?>
                <a href="/signIn" class="hover:scale-125 hover:text-slate-400"> Se Connecter </a>
            <?php endif; ?>
        </div>
    </div>
    <div>
        <p class="flex flex-wrap justify-center text-center items-center my-2">Copyright © YSEM
            <script>
                document.write(new Date().getFullYear());
            </script>
            tous droits réservés.
            <a href="https://github.com/kevDev237">
                <span class="text-slate-400">
                    &nbsp; by kevDev237 <span class="text-lg fab fa-github"></span>
                </span>
            </a>
        </p>
    </div>
</footer>