<div class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-4 dark:bg-neutral-800">
  <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
    <div class="flex items-center justify-between">
      <a class="flex-none text-xl font-semibold dark:text-white" href="index.php">YSEM</a>
      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-with-collapse" aria-controls="navbar-with-collapse" aria-label="Toggle navigation">
          <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
    <div id="navbar-with-collapse" class="hidden transition-all duration-[0.1ms] overflow-hidden basis-full grow sm:block">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
        <a class="font-medium text-<?= $pageInfo['activeOnNavBar']==='Accueil' ? 'indigo' : 'gray' ?>-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-500" href="index.php">Accueil</a>
        <a class="font-medium text-<?= $pageInfo['activeOnNavBar']==='Boutique' ? 'indigo' : 'gray' ?>-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-500" href="#">Boutique</a>
        <a class="font-medium text-<?= $pageInfo['activeOnNavBar']==='Mon panier' ? 'indigo' : 'gray' ?>-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-500" href="#">Mon panier</a>
        <a class="font-medium text-gray-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-500" href="#"><i class="fa-solid fa-user border rounded-xl p-2 border-gray-600 hover:border-blue-400 dark:border-blue-400 dark:hover:border-blue-500"></i></a>
      </div>
    </div>
  </nav>
</div>


