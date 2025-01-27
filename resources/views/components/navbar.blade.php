

<nav class="bg-gradient-to-r to-white from-[#BCF3FF] relative top-0 z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <p class="header text-4xl lg:text-base">Bebras</p>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm w-20 h-20 lg:w-5 lg:h-5 text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-10 lg:w-5 h-10 lg:h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
          
      </button>
      <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 ">
          <li>
            <a href="/" class="{{ request()->is('/') ? 'text-[#FFC815]' : 'text-black'}} block body py-2 px-3  text-6xl lg:text-base font-bold rounded lg:bg-transparent lg:hover:text-[#FFC815] lg:p-0" aria-current="page">Home</a>
          </li>
          
          <li>
            <a href="/login" class="{{ request()->is('login') ? 'text-[#FFC815]' : 'text-black'}} text-6xl lg:text-base block body py-2 px-3 font-bold rounded hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-[#FFC815] lg:border-0 lg:p-0">Login</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex font-bold items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-[#FFC815] text-6xl lg:text-base lg:p-0 lg:w-auto 
            ">Registration <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="/register" class="block px-4 py-2 hover:bg-gray-100">Single</a>
                  </li>
                  <li>
                    <a href="/register/school" class="block px-4 py-2 hover:bg-gray-100">School</a>
                  </li>
                </ul>
            </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  