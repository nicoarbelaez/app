<link href="public/css/output.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 relative">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="https://flowbite.com/" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
         LOGO
         </span>
      </a>
      <div class="flex items-center md:order-2">
        <button class="peer/dropdownUser h-6 w-6 flex mr-3 text-sm rounded-full md:mr-0 hover:bg-gray-100 dark:hover:bg-gray-700 hover:ring-4 dark:hover:ring-gray-700 hover:ring-gray-100">
               <span class="sr-only">
               Abrir menu de usuario
               </span>
               <a>
                  <svg class="h-full w-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                     <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
               </a>
            </button>
        <!-- Dropdown menu -->
        <div
          class="peer-focus/dropdownUser:block absolute right-0 top-16 sm:top-20 z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-800 dark:divide-gray-600 transition-all">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">
                  Bonnie Green
                  </span>
            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">
                  name@flowbite.com
                  </span>
          </div>
          <ul class="py-1" aria-labelledby="user-menu-button">
            <li>
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                Settings
              </a>
            </li>
            <li>
              <a href="logout"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                Sign out
              </a>
            </li>
          </ul>
        </div>
        <button
               class="peer/dropdownMenu inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 focus:ring-2"
               aria-controls="mobile-menu-2" aria-expanded="false">
               <span class="sr-only">
               Abrir el menu
               </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24"
                  height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="4" y1="6" x2="20" y2="6"></line>
                  <line x1="4" y1="12" x2="20" y2="12"></line>
                  <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            </button>
      </div>
      <div class="absolute top-16 right-0 w-72 items-center md:w-auto md:static">
        <div
          class="divide-y divide-gray-100 dark:divide-gray-600 rounded-lg dark:bg-gray-800 md:bg-white md:dark:bg-transparent bg-white shadow">
          <ul class="flex flex-col p-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="home"
                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="history"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Historial</a>
            </li>
            <li>
              <a href="profile"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Perfil</a>
            </li>
            <li>
              <a href="f297a57a5a743894a0e4a801fc3"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ADMIN</a>
            </li>
            <li>
              <a href="control_panel"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PANEL
                DE CONTROL</a>
            </li>
            <li>
              <a href="transactions"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">TRANSACIONES</a>
            </li>
            <li>
              <a href="logout"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cerrar
                sesión</a>
            </li>
          </ul>
          <ul class="sm:hidden flex flex-col p-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                Settings
              </a>
            </li>
            <li>
              <a href="logout"
                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cerrar
                sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>