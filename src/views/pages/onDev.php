<?php ob_start(); ?>

<main class="grow container mx-auto flex flex-col justify-center items-center text-7xl text-center">
    "<?= $pageInfo['name'] ?>" en cour de Developpement 🛠️ ⚙️ 
</main>

<?php
$content = ob_get_clean();
require_once('src/views/template/base.php');
?>