<nav class="bg-white p-2 m-6 rounded-lg text-gray-600 body-font">
  <div class="container flex flex-wrap items-center mx-auto">
    <a href="/" class="flex-shrink-0 flex items-center">
      <img class="h-8" src="{{ asset('img/logo-p.png')}}" alt="Logo">
      <img class="m-4 h-8" src="{{ asset('img/logo-nom.png')}}" alt="Logo">
    </a>
    <div class="hidden w-full lg:block lg:w-auto ml-4 lg:py-1 lg:pl-4 lg:border-l lg:border-gray-400" id="mobile-menu">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="/" class="block py-2 pr-4 pl-3 hover:bg-blue-500 hover:text-white px-3 rounded-md text-sm font-medium">Accueil</a>
        </li>
        <li>
          <a href="/destinations" class="block py-2 pr-4 pl-3 hover:bg-blue-500 hover:text-white px-3 rounded-md text-sm font-medium">Destinations</a>
        </li>
        @if( (session('isPolytech') ==true && session('isEditeur') ==true) || session('isAdmin')==true )
        <li>
          <a href="/articles" class="block py-2 pr-4 pl-3 hover:bg-blue-500 hover:text-white px-3 rounded-md text-sm font-medium">Articles</a>
        </li>
        @endif
        @if(session()->has('uid') && (session('isAdmin') || session('isEditeur')))
        <li>
          <a href="/admin/accueil" class="block py-2 pr-4 pl-3 hover:bg-blue-500 hover:text-white px-3 rounded-md text-sm font-medium">Espace Admin</a>
        </li>
        @endif
      </ul>

    </div>
    <div class="origin-right ml-auto flex">
      @if(!session()->has('uid'))
      <a href="/auth/login" class="text-blue-500 hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Connexion UL</a>
      @else
      <a href="/profil/candidature" class="hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex">
        <svg fill="currentColor" stroke="currentColor" class="mx-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
          <path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm8.127 19.41c-.282-.401-.772-.654-1.624-.85-3.848-.906-4.097-1.501-4.352-2.059-.259-.565-.19-1.23.205-1.977 1.726-3.257 2.09-6.024 1.027-7.79-.674-1.119-1.875-1.734-3.383-1.734-1.521 0-2.732.626-3.409 1.763-1.066 1.789-.693 4.544 1.049 7.757.402.742.476 1.406.22 1.974-.265.586-.611 1.19-4.365 2.066-.852.196-1.342.449-1.623.848 2.012 2.207 4.91 3.592 8.128 3.592s6.115-1.385 8.127-3.59zm.65-.782c1.395-1.844 2.223-4.14 2.223-6.628 0-6.071-4.929-11-11-11s-11 4.929-11 11c0 2.487.827 4.783 2.222 6.626.409-.452 1.049-.81 2.049-1.041 2.025-.462 3.376-.836 3.678-1.502.122-.272.061-.628-.188-1.087-1.917-3.535-2.282-6.641-1.03-8.745.853-1.431 2.408-2.251 4.269-2.251 1.845 0 3.391.808 4.24 2.218 1.251 2.079.896 5.195-1 8.774-.245.463-.304.821-.179 1.094.305.668 1.644 1.038 3.667 1.499 1 .23 1.64.59 2.049 1.043z" />
        </svg>
        <p class="mx-2">
          <?php
          echo (session('prenom'));
          echo (" ");
          echo (session('nom'));
          ?>
        </p>

      </a>
      <a href="/auth/logout">
        <button type="button" class="p-2 text-blue-500 rounded-full hover:bg-blue-500 hover:text-white">
          <span class="sr-only">Déconnexion</span>
          <svg fill="currentColor" stroke-width="1" stroke="currentColor" xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path class="pointer-events-none" d="M8 10v-5l8 7-8 7v-5h-8v-4h8zm2-8v2h12v16h-12v2h14v-20h-14z" />
          </svg>
        </button>
      </a>
      @endif
    </div>
    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex justify-self-start items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
      </svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</nav>
<script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>