<x-account-layout>
    <div class="flex flex-row">
    
        <x-slot:header> 
            <a href="/participants">
                <svg fill="#000000" class="mr-5 mb-5" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.676 26.676" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
            </a>
            <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p>
            <a href="/editParticipant/{{ $registration->id }}" class="text-base ml-5 text-white bg-[#FFC815] hover:bg-white hover:text-[#FFC815] rounded-lg px-5 p-2 transition duration-200">Edit</a>  
        </x-slot:header>
        
    </div>
    <div>
        <div class="flex flex-col lg:flex-row"> 
            <table class="basis-full rounded-[20px] lg:basis-[50%] lg:mr-5 mb-5 lg:mb-0 border-collapse">
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">ID</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->id }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Name</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->student->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Email</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->student->email }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Gender</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->student->gender }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Participant Contact</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->student->contact }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Level</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->level }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Grade</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->grade }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">School</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->school->name }}</p>
                    </td>
                </tr>
            </table>

            <table class="basis-full lg:basis-[50%] mt-5 lg:mt-0 lg:ml-5 border-collapse">
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->companion->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion Status</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->companion->status }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion Contact</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->companion->contact }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Category</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->category->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Language</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->language }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Schedule</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->schedule->name }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Score</td>
                    <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->score }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Percentile</td>
                    <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                        <p class="text-black">{{ $registration->rankPercentile }}</p>
                    </td>
                </tr>
            </table>
        </div>
        {{-- <div class="flex flex-col justify-center space-y-10 lg:space-x-4 lg:space-y-0 items-stretch lg:flex-row">
       
            <div class="flex basis-[50%] flex-col bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-5 justify-center rounded-[50px] items-center">
                <p class="text-5xl font-bold text-[#FFC815] mb-5 text-center">UC Account</p>
                <div class="flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4">
                    <div class="flex flex-col py-10 px-40 lg:px-5 lg:py-5 basis-[50%] rounded-md bg-[#9CB668] items-center justify-center">
                        <p class="text-4xl lg:text-xl font-medium text-white">Username</p>
                        <p class="text-6xl lg:text-2xl font-bold text-white">{{ $user ->username }}</p>
                    </div>
                    
                    <div class="flex flex-col py-10 px-40 lg:px-5 lg:py-5 basis-[50%] rounded-md bg-[#9CB668] items-center justify-center">
                        <p class="text-4xl lg:text-xl font-medium text-white">Password</p>
                        <div class="relative flex">
                            <p 
                                id="passwordText" 
                                class="text-6xl lg:text-2xl font-bold text-white"
                            >
                                ••••••••
                            </p>
                            <button 
                                id="togglePassword" 
                                class="text-white bg-transparent hover:underline ml-2"
                                onclick="togglePasswordVisibility()"
                            >
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                            </svg>
                            </button>
                            <p id="actualPassword" class="hidden">{{ $user->password }}</p>
                        </div>
                    </div>
                    
                    
                </div>
                <a href="editUser" class="py-10 lg:py-2 w-full shadow-md rounded-md text-white justify-center text-center mt-5 bg-[#FFC815] hover:bg-[#FCF9F4] text-4xl lg:text-base hover:text-[#FFC815] transition duration-200">Edit</a>
                
            </div>
            <div class="flex flex-col basis-[50%] bg-[#FCF9F4] shadow-md py-10 p-5 justify-center rounded-[50px] items-center">
                <p class="text-4xl font-bold text-[#FFC815] mb-5 text-center">Bebras Account</p>
                <div class="flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4">
                    <div class="flex flex-col py-10 px-40 lg:px-5 lg:py-5 justify-center items-center basis-[50%] rounded-md bg-[#9CB668] items-center justify-center">
                        <p class="text-4xl lg:text-xl font-medium text-white">Username</p>
                        @if ($user->bebras_username == "")
                        <p class="text-6xl lg:text-2xl text-center font-bold text-white">No Username</p>
                        @else
                            <p class="text-6xl lg:text-2xl text-center font-bold text-white">{{ $user ->bebras_username }}</p>
                        @endif
                    </div>
                    
                    <div class="flex flex-col justify-center items-center py-10 px-40 lg:px-5 lg:py-5 basis-[50%] rounded-md bg-[#9CB668] items-center justify-center">
                        <p class="text-4xl lg:text-xl font-medium text-white">Password </p> 
                        @if ($user->bebras_username == "")
                        <p class="text-6xl lg:text-2xl text-center font-bold text-white">No Password</p>
                        @else
                            <p class="text-6xl lg:text-2xl text-center font-bold text-white">{{ $user ->bebras_password }}</p>
                        @endif
    
                    </div>
                    
                </div>
            </div>
        </div> --}}

        

    </div>


    <script>
        function togglePasswordVisibility() {
            const passwordTextElement = document.getElementById("passwordText");
            const actualPassword = document.getElementById("actualPassword").textContent;
            const toggleButton = document.getElementById("togglePassword");
    
            if (passwordTextElement.textContent === "••••••••") {
                passwordTextElement.textContent = actualPassword;
                eyeIcon.innerHTML = `
                    <path d="M13.875 18.825a10.05 10.05 0 01-1.875.175c-4.478 0-8.268-2.943-9.542-7a9.965 9.965 0 012.425-3.878m5.187-3.13a9.964 9.964 0 011.876-.17c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-2.425 3.878M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path d="M3 3l18 18" stroke-linecap="round" stroke-linejoin="round" />
                `;
            } else {
                passwordTextElement.textContent = "••••••••";
                eyeIcon.innerHTML = `
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                `;
            }
        }
    </script>
</x-account-layout>
