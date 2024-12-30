<x-login-register-layout>
    <p class="text-3xl text-center text-white font-bold">Login</p>
    <form action="/login" method="POST" class="space-y-4">
        @csrf
        
        <!-- Username Field -->
        <div>
            <label for="username" class="block text-white text-2xl font-medium mb-2">Username</label>
            <input type="text" id="username" name="username" 
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   placeholder="Enter your username" required>
        </div>
        
        <!-- Password Field -->
        <div>
            <label for="password" class="block text-white text-2xl font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" 
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   placeholder="Enter your password" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" 
                    class="w-full mt-10 font-medium bg-[#FFC815] text-[#FCF9F4] hover:bg-[#FCF9F4] hover:text-[#FFC815] py-2 px-4 rounded-lg  transition duration-200">
                Login
            </button>
        </div>
    </form>

    
</x-login-register-layout>