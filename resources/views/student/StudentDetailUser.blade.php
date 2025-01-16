<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
        <select id="information-select" name="information" class="text-3xl lg:text-xl font-medium mx-5 p-4 lg:p-2 rounded-md">
            <option value="UC" selected>UC Account</option>
            <option value="Bebras">Bebras Account</option>
            <option value="Personal">Personal Information</option>
        </select>
    </x-slot:header>
    <div class="flex flex-col justify-center  items-stretch lg:flex-row">
       {{-- Bebras Details --}}
        <div id="bebras" class="w-full details-section flex flex-col bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-20 justify-center rounded-[50px]"  style="display: none;">
            <p class="text-4xl font-bold text-[#FFC815] mb-5">Bebras Account</p>
            <div class="flex flex-col w-full gap-4">
                <div class="flex flex-col py-10 shadow-md px-5 lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                    <p class="text-4xl lg:text-xl text-[#FFC815]">Username</p>
                    @if ($user->bebras_username == "")
                    <p class="text-6xl lg:text-2xl font-bold text-white">No Username</p>
                    @else
                        <p class="text-6xl lg:text-2xl font-bold text-white">{{ $user ->bebras_username }}</p>
                    @endif
                </div>
                
                
                <div class="flex flex-col py-10 px-5 shadow-md lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                    <p class="text-4xl lg:text-xl text-[#FFC815]">Password </p> 
                    @if ($user->bebras_username == "")
                    <p class="text-6xl lg:text-2xl font-bold text-white">No Password</p>
                    @else
                        <p class="text-6xl lg:text-2xl font-bold text-white">{{ $user ->bebras_password }}</p>
                    @endif

                </div>
                
            </div>
        </div>
        {{-- UC Account Details --}}
        <div id="uc" class="w-full details-section flex flex-col bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-20 justify-center rounded-[50px]"  style="display: flex;">
            <p class="text-5xl font-bold text-[#FFC815] mb-5">UC Account</p>
                <div class="flex flex-col w-full gap-4  ">
                    <div class="flex flex-col py-10 px-5 shadow-md  lg:py-5 basis-[50%] rounded-md bg-[#9CB668] justify-center">
                        <p class="text-3xl lg:text-xl font-medium text-[#FFC815]">Username</p>
                        <p class="text-5xl lg:text-2xl font-bold text-white">{{ $user ->username }}</p>
                    </div>
                
                    <div class="flex flex-col py-10 px-5  shadow-md lg:py-5 basis-[50%] rounded-md bg-[#9CB668] justify-center">
                        <p class="text-3xl lg:text-xl font-medium text-[#FFC815]">Password</p>
                        <div class="relative flex justify-between">
                            <p 
                                id="passwordText" 
                                class="text-5xl lg:text-2xl font-bold text-white"
                            >
                                ••••••••
                            </p>
                            <button 
                                id="togglePassword" 
                                class="text-white bg-transparent hover:underline ml-2"
                                onclick="togglePasswordVisibility()"
                            >
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 lg:h-6 lg:w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <p id="actualPassword" class="hidden">{{ $user->password }}</p>
                        </div>
                    </div>
                </div>
                <a href="editUser" class="py-10 lg:py-2 w-full shadow-md rounded-md text-white justify-center text-center mt-5 bg-[#FFC815] hover:bg-[#FCF9F4] text-4xl lg:text-base hover:text-[#FFC815] transition duration-200">Change Password</a>
        </div>
        {{-- Personal Information --}}
        <div id="personal" class="w-full details-section flex flex-col bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-20 justify-center rounded-[50px]"  style="display: none;">
            <p class="text-4xl font-bold text-[#FFC815] mb-5">Personal Information</p>
            <div class="flex flex-col w-full gap-4">
                <div class="flex flex-col py-10 px-5 shadow-md  lg:py-5 basis-[50%] rounded-md bg-[#9CB668] justify-center">
                    <p class="text-3xl lg:text-xl font-medium text-[#FFC815]">Full Name</p>
                    <p class="text-4xl lg:text-2xl font-bold text-white">{{ $info ->name }}</p>
                </div>
                
                
                <div class="flex flex-col py-10 px-5 shadow-md  lg:py-5 basis-[50%] rounded-md bg-[#9CB668] justify-center">
                    <p class="text-3xl lg:text-xl font-medium text-[#FFC815]">Email</p>
                    <p class="text-4xl lg:text-2xl font-bold text-white">{{ $info ->email }}</p>
                </div>
                <div class="flex flex-col py-10 px-5 shadow-md  lg:py-5 basis-[50%] rounded-md bg-[#9CB668] justify-center">
                    <p class="text-3xl lg:text-xl font-medium text-[#FFC815]">Contact</p>
                    <p class="text-4xl lg:text-2xl font-bold text-white">{{ $info ->contact }}</p>
                </div>
                
            </div>
        </div>
        
    </div>

</x-account-layout>

<script>
    document.getElementById('information-select').addEventListener('change', function() {
        var selectedValue = this.value;

        var allSections = document.querySelectorAll('.details-section');
        allSections.forEach(function(section) {
            section.style.display = 'none';
        });

        if (selectedValue === 'UC') {
            document.getElementById('uc').style.display = 'flex';
        } else if (selectedValue === 'Bebras') {
            document.getElementById('bebras').style.display = 'flex';
        } else if (selectedValue === 'Personal') {
            document.getElementById('personal').style.display = 'flex';
        }
    });

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



