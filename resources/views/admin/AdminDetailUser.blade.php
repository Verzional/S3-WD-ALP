<x-account-layout>
    <x-slot:header>
        @if ( $user->role   == "student")
        <a href="/student">
            <svg fill="#000000" class="mr-5 mb-5" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.676 26.676" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
        </a>  
        @else
        <a href="/companion">
            <svg fill="#000000" class="mr-5 mb-5" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.676 26.676" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
        </a>  
        @endif
        
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
    </x-slot:header>
    <div class="flex flex-col lg:flex-row">
        <table class="basis-full  lg:mr-5 mb-5 lg:mb-0 border-collapse">
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">ID</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->id }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Username</td>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->username }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Password</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-base border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->password }}</p>
                </td>
            </tr>
            @if ( $user->role   == "student")
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Bebras Username</td>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->bebras_username }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Bebras Password</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-base border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->bebras_password }}</p>
                </td>
            </tr>
            @endif
            
        </table>
</x-account-layout>
