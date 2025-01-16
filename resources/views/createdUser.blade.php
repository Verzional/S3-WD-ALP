<x-login-register-layout>
    <p class="text-3xl font-bold text-white">Simpan Sebelum Kembali</p>
    <div id="bebras" class="mt-5 w-full details-section flex flex-col py-10  justify-center rounded-[50px]"  >
        <p class="text-3xl font-bold text-[#FFC815] mb-5">Student UC Account</p>
        <div class="flex flex-col w-full gap-4">
            <div class="flex flex-col py-10 shadow-md px-5 lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                    <p class="text-4xl lg:text-xl text-[#FFC815]">Username</p>
                    <p class="text-6xl lg:text-2xl font-bold text-white">{{ $student ->username }}</p>
            </div>
            
            
            <div class="flex flex-col py-10 px-5 shadow-md lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                <p class="text-4xl lg:text-xl text-[#FFC815]">Password </p> 
                    <p class="text-6xl lg:text-2xl font-bold text-white">{{ $student ->password }}</p>


            </div>
            
        </div>
    </div>
    @if($companion != null)
    <div id="bebras" class="w-full details-section flex flex-col  px-10 py-10 lg:px-20 justify-center rounded-[50px]">
        <p class="text-4xl font-bold text-[#FFC815] mb-5">Companion UC Account</p>
        
        <div class="flex flex-col w-full gap-4">
            <div class="flex flex-col py-10 shadow-md px-5 lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                <p class="text-4xl lg:text-xl text-[#FFC815]">Username</p>
                <p class="text-6xl lg:text-2xl font-bold text-white">{{ $companion->username }}</p>
            </div>
            
            <div class="flex flex-col py-10 px-5 shadow-md lg:py-5 rounded-md bg-[#9CB668] w-full justify-center">
                <p class="text-4xl lg:text-xl text-[#FFC815]">Password</p> 
                <p class="text-6xl lg:text-2xl font-bold text-white">{{ $companion->password }}</p>
            </div>
        </div>
    </div>
    @endif
    <a href="/login" class="bg-[#FFC815] text-white mt-5 hover:bg-white hover:text-[#FFC815] mb-5 transition duration-200 py-4 px-10 rounded-lg ">Return to Login</a>
    
</x-login-register-layout>
