<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
        
    </x-slot:header>
    <div class="flex flex-col justify-center space-y-10 lg:space-x-4 lg:space-y-0 items-stretch lg:flex-row">
       
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
    </div>

</x-account-layout>

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

