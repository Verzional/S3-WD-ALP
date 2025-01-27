<x-login-register-layout>
    <p class="text-6xl lg:text-3xl text-center text-black header">Login</p>
    <form action="/login" method="POST" class="space-y-4" autocomplete="off">
        @csrf
        
        <!-- Username Field -->
        <div>
            <label for="username" class="block text-black text-4xl lg:text-2xl font-medium mb-2 body font-bold">Username</label>
            <input type="text" id="username" name="username" 
                   class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   placeholder="Enter your username" required>
        </div>
        
        <!-- Password Field -->
        <div>
            <label for="password" class="block text-black text-4xl lg:text-2xl font-medium mb-2 body font-bold">Password</label>
            <input type="password" id="password" name="password" 
                   class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   placeholder="Enter your password" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" 
                    class="w-full mt-10 font-medium bg-[#FFC815] text-4xl lg:text-base text-[#FCF9F4] hover:bg-[#FCF9F4] hover:text-[#FFC815] py-10 lg:py-2 px-4 rounded-lg body transition duration-200">
                Login
            </button>
        </div>
        <p class="text-black body">Don't have an account?<a href="/register"><span class="text-[#E7B100] hover:text-white duration-200 transition"> Register</span></a></p>
    </form>

    
</x-login-register-layout>