<!DOCTYPE html>
<html lang="fr">
<?php require_once('src/views/template/head.php'); ?>
<body class='min-h-screen flex flex-col justify-between bg-gray-100'>
    <?php require_once('src/views/template/header.php'); ?>
    
    <?= $content ?>

    <?php require_once('src/views/template/foot.php'); ?>
    <?php require_once('src/views/template/footer.php'); ?>
</body>
</html>

