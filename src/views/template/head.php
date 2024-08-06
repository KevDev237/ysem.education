<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $pageInfo['titlePage'] ?> </title>

    <!-- logo site -->
    <link rel="icon" type="image/x-icon" href="/src/static/images/LOGO-YSEM.ico">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- configuration de tailwind pour l'utilisation des classe custom -->
    <script src="tailwind.config.js"></script>
    
    <!-- css -->
    <link href="/src/static/css/output.css" rel="stylesheet" type="text/css">
    <?= (array_key_exists('other_css',$pageInfo) )? $pageInfo['other_css'] : '' ?>

    <!-- JavaScript alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

    <!-- font awesome -->
    <link href="/src/static/font-awesome/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
</head>