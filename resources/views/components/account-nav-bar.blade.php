
<div class="flex lg:fixed flex-col lg:h-screen lg:basis-[20%] lg:w-[20vw] bg-[#262515] z-10 text-white">
    <div class="p-5 bg-[#5D6749] flex items-center justify-between lg:justify-center">
        <span class="text-xl font-bold tracking-wide uppercase">
            @if(session('role')=='admin')
            Admin Panel
            @elseif(session('role')=='student')
            Student Panel
            @elseif(session('role')=='companion')
            Companion Panel
            @endif
        </span>
        <button id="burgerMenu" class="lg:hidden p-2 rounded-md hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    @if(session('role')=='admin')
    <nav
        id="navbar"
        class="hidden lg:flex flex-col lg:block lg:flex-col mt-5 space-y-2 py-5 px-5 transition-all duration-300">
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3m6 13h5l-3-3m0 0l3-3m-3 3H9" />
            </svg>
            Dashboard
        </a>
        <a href="/participants" class="{{ request()->is('participants') ? 'text-[#FFC815]' : 'text-white'}}  flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5V10M12 20H7a2 2 0 01-2-2V4a2 2 0 012-2h10a2 2 0 012 2v4m0 0H7" />
            </svg>
            Participants
        </a>
        <a href="/schools" class="{{ request()->is('schools') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg  class="{{ request()->is('schools') ? 'fill-[#FFC815]' : 'fill-white'}} h-5 w-5 mr-3" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511 511" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M503.5,476H487V267h16.5c2.737,0,5.257-1.491,6.575-3.891c1.317-2.4,1.222-5.327-0.247-7.636l-56-88 c-1.377-2.164-3.763-3.474-6.328-3.474H298.606L263,128.394V99h72.5c2.766,0,5.308-1.522,6.613-3.961 c1.305-2.438,1.162-5.398-0.373-7.699L328.514,67.5l13.227-19.84c1.535-2.301,1.677-5.261,0.373-7.699 C340.808,37.522,338.266,36,335.5,36H263v-8.5c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v100.894L212.394,164H63.5 c-2.564,0-4.951,1.31-6.328,3.474l-56,88c-1.469,2.309-1.564,5.236-0.247,7.636C2.243,265.509,4.763,267,7.5,267H24v209H7.5 c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h496c4.142,0,7.5-3.358,7.5-7.5S507.642,476,503.5,476z M443.383,179l46.455,73 H386.606l-73-73H443.383z M321.486,51l-8.227,12.34c-1.68,2.519-1.68,5.801,0,8.32L321.486,84H263V51H321.486z M67.617,179h129.776 l-73,73H21.163L67.617,179z M39,267h88.498c0.248,0,0.496-0.013,0.744-0.038c0.106-0.01,0.21-0.03,0.315-0.045 c0.137-0.02,0.274-0.036,0.411-0.063c0.122-0.024,0.24-0.058,0.36-0.088c0.117-0.029,0.235-0.056,0.351-0.09 c0.118-0.036,0.233-0.081,0.349-0.122c0.115-0.041,0.23-0.079,0.344-0.126c0.109-0.045,0.213-0.098,0.319-0.148 c0.115-0.055,0.232-0.106,0.345-0.167c0.103-0.055,0.2-0.118,0.3-0.177c0.11-0.065,0.222-0.128,0.329-0.2 c0.112-0.075,0.217-0.158,0.324-0.239c0.088-0.066,0.179-0.127,0.264-0.198c0.192-0.157,0.376-0.323,0.551-0.499L255.5,142.106 l122.696,122.695c0.175,0.175,0.36,0.341,0.551,0.499c0.085,0.07,0.175,0.131,0.263,0.197c0.108,0.081,0.214,0.165,0.326,0.24 c0.106,0.071,0.217,0.133,0.326,0.198c0.101,0.061,0.199,0.124,0.303,0.179c0.112,0.06,0.227,0.111,0.342,0.165 c0.107,0.051,0.213,0.104,0.323,0.15c0.112,0.046,0.226,0.083,0.339,0.124c0.117,0.042,0.233,0.087,0.353,0.124 c0.114,0.035,0.23,0.06,0.345,0.089c0.122,0.031,0.242,0.065,0.366,0.089c0.132,0.026,0.265,0.042,0.398,0.061 c0.109,0.016,0.217,0.036,0.328,0.047c0.246,0.024,0.493,0.037,0.74,0.037H472v209H311V371.5c0-12.958-10.542-23.5-23.5-23.5h-64 c-12.958,0-23.5,10.542-23.5,23.5V476H39V267z M296,380h-81v-8.5c0-4.687,3.813-8.5,8.5-8.5h64c4.687,0,8.5,3.813,8.5,8.5V380z M215,395h33v81h-33V395z M263,395h33v81h-33V395z"></path> <path d="M255.5,323c30.603,0,55.5-24.897,55.5-55.5S286.103,212,255.5,212S200,236.897,200,267.5S224.897,323,255.5,323z M255.5,227c22.332,0,40.5,18.168,40.5,40.5S277.832,308,255.5,308S215,289.832,215,267.5S233.168,227,255.5,227z"></path> <path d="M255.5,275c4.142,0,7.5-3.358,7.5-7.5v-24c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5V260h-16.5 c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5H255.5z"></path> <path d="M175.5,388h-40c-4.142,0-7.5,3.358-7.5,7.5v48c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5v-48 C183,391.358,179.642,388,175.5,388z M168,403v9h-25v-9H168z M143,436v-9h25v9H143z"></path> <path d="M103.5,388h-40c-4.142,0-7.5,3.358-7.5,7.5v48c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5v-48 C111,391.358,107.642,388,103.5,388z M96,403v9H71v-9H96z M71,436v-9h25v9H71z"></path> <path d="M173,292h-35c-5.514,0-10,4.486-10,10v53.5c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5V302 C183,296.486,178.514,292,173,292z M168,307v17h-25v-17H168z M143,348v-9h25v9H143z"></path> <path d="M101,292H66c-5.514,0-10,4.486-10,10v53.5c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5V302 C111,296.486,106.514,292,101,292z M96,307v17H71v-17H96z M71,348v-9h25v9H71z"></path> <path d="M407.5,451h40c4.142,0,7.5-3.358,7.5-7.5v-48c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v48 C400,447.642,403.358,451,407.5,451z M415,436v-9h25v9H415z M440,403v9h-25v-9H440z"></path> <path d="M335.5,451h40c4.142,0,7.5-3.358,7.5-7.5v-48c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v48 C328,447.642,331.358,451,335.5,451z M343,436v-9h25v9H343z M368,403v9h-25v-9H368z"></path> <path d="M407.5,363h40c4.142,0,7.5-3.358,7.5-7.5V302c0-5.514-4.486-10-10-10h-35c-5.514,0-10,4.486-10,10v53.5 C400,359.642,403.358,363,407.5,363z M415,348v-9h25v9H415z M440,307v17h-25v-17H440z"></path> <path d="M335.5,363h40c4.142,0,7.5-3.358,7.5-7.5V302c0-5.514-4.486-10-10-10h-35c-5.514,0-10,4.486-10,10v53.5 C328,359.642,331.358,363,335.5,363z M343,348v-9h25v9H343z M368,307v17h-25v-17H368z"></path> </g> </g></svg>
            Schools
        </a>
        <a href="/users" class="{{ request()->is('users') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg class="{{ request()->is('users') ? 'fill-[#FFC815]' : 'fill-white'}} h-5 w-5 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60.671 60.671" xml:space="preserve" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <ellipse style="" cx="30.336" cy="12.097" rx="11.997" ry="12.097"></ellipse> <path style="" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9 C48.354,35.818,42.661,30.079,35.64,30.079z"></path> </g> </g> </g></svg>
            Users
        </a>
        <a href="/events" class="{{ request()->is('events') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg fill="#ffffff" class="{{ request()->is('events') ? 'fill-[#FFC815]' : 'fill-white'}} h-5 w-5 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 93.842 93.843" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M74.042,11.379h-9.582v-0.693c0-1.768-1.438-3.205-3.206-3.205h-6.435V3.205C54.819,1.437,53.381,0,51.614,0H42.23 c-1.768,0-3.206,1.438-3.206,3.205V7.48H32.59c-1.768,0-3.206,1.438-3.206,3.205v0.693h-9.582c-2.393,0-4.339,1.945-4.339,4.34 v73.785c0,2.394,1.946,4.34,4.339,4.34h54.238c2.394,0,4.339-1.946,4.339-4.34V15.719C78.38,13.324,76.434,11.379,74.042,11.379z M32.617,25.336h28.61c1.709,0,3.102-1.391,3.102-3.1v-3.438h7.554l0.021,68.164l-49.939,0.021V18.801h7.554v3.436 C29.517,23.945,30.907,25.336,32.617,25.336z"></path> </g> </g></svg>
            Events
        </a>
        <a href="/" class="flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3m4-9h1.5A1.5 1.5 0 0119.5 9v6a1.5 1.5 0 01-1.5 1.5H16m4-6V9m0 6v3.5a1.5 1.5 0 01-1.5 1.5H8.5" />
            </svg>
            Exit
        </a>
    </nav>
    @elseif (session('role') == 'student')
    <nav
        id="navbar"
        class="hidden lg:flex flex-col lg:block lg:flex-col mt-5 space-y-2 py-5 px-5 transition-all duration-300">
        <a href="/student/dashboard" class="{{ request()->is('student/dashboard') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3m6 13h5l-3-3m0 0l3-3m-3 3H9" />
            </svg>
            Dashboard
        </a>
        <a href="/student/detailUser" class="{{ request()->is('student/detailUser') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg class="{{ request()->is('student/detailUser') ? 'fill-[#FFC815]' : 'fill-white'}} h-5 w-5 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60.671 60.671" xml:space="preserve" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <ellipse style="" cx="30.336" cy="12.097" rx="11.997" ry="12.097"></ellipse> <path style="" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9 C48.354,35.818,42.661,30.079,35.64,30.079z"></path> </g> </g> </g></svg>
            User
        </a>
        <a href="/" class="flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3m4-9h1.5A1.5 1.5 0 0119.5 9v6a1.5 1.5 0 01-1.5 1.5H16m4-6V9m0 6v3.5a1.5 1.5 0 01-1.5 1.5H8.5" />
            </svg>
            Exit
        </a>
    </nav>
    @elseif (session('role')=='companion')
    <nav
        id="navbar"
        class="hidden lg:flex flex-col lg:block lg:flex-col mt-5 space-y-2 py-5 px-5 transition-all duration-300">
        <a href="/companion/dashboard" class="{{ request()->is('companion/dashboard') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3m6 13h5l-3-3m0 0l3-3m-3 3H9" />
            </svg>
            Dashboard
        </a>
        <a href="/companion/participants" class="{{ request()->is('companion/participants') ? 'text-[#FFC815]' : 'text-white'}}  flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5V10M12 20H7a2 2 0 01-2-2V4a2 2 0 012-2h10a2 2 0 012 2v4m0 0H7" />
            </svg>
            Participants
        </a>
        <a href="/companion/user" class="{{ request()->is('companion/user') ? 'text-[#FFC815]' : 'text-white'}} flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg class="{{ request()->is('companion/user') ? 'fill-[#FFC815]' : 'fill-white'}} h-5 w-5 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60.671 60.671" xml:space="preserve" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <ellipse style="" cx="30.336" cy="12.097" rx="11.997" ry="12.097"></ellipse> <path style="" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9 C48.354,35.818,42.661,30.079,35.64,30.079z"></path> </g> </g> </g></svg>
            User
        </a>
        <a href="/" class="flex items-center p-3 text-xl lg:text-base rounded-lg hover:bg-[#687B00] transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m0 0l3-3m-3 3l3 3m4-9h1.5A1.5 1.5 0 0119.5 9v6a1.5 1.5 0 01-1.5 1.5H16m4-6V9m0 6v3.5a1.5 1.5 0 01-1.5 1.5H8.5" />
            </svg>
            Exit
        </a>
    </nav>
    @endif
</div>


<script>

    const burgerMenu = document.getElementById('burgerMenu');
    const navbar = document.getElementById('navbar');

    burgerMenu.addEventListener('click', () => {
        navbar.classList.toggle('hidden'); 
    });
</script>
