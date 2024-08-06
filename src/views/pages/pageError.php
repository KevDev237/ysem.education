<?php ob_start();?>

<main class="min-h-full w-full flex flex-col justify-center items-center">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-600"><?= $codeError ?></p>
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl"><?= $titlePageError ?></h1>
    <p class="mt-6 text-base leading-7 text-gray-600"><?= $msgPageError ?></p>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
      <a href="#" onclick="alert('non développé pour le moment');" class="text-sm font-semibold text-gray-900">Contacter le support <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</main>

<?php
    $content = ob_get_clean();
    require_once('src/views/template/base.php');
?>