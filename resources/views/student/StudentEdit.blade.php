<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
    </x-slot:header>
    <div class="bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-5 justify-center rounded-[50px] items-center">
        <form action="{{ url('student/updateUser') }}" method="POST">
            @csrf
            @method('put')
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-[#FFC815]  text-4xl lg:text-2xl font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" 
                    value="{{ $user->username }}" 
                    class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter your username" required>
            </div>
            
            <!-- Password Field -->
            <div>
                <label for="password" class="block text-[#FFC815]  text-4xl lg:text-2xl font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                        value="{{ $user->password }}"  
                    class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter your password" required>
            </div>
            <div class="text-center">
                <button type="submit" 
                        class="w-full mt-10 font-medium bg-[#FFC815]  text-[#FCF9F4] text-4xl lg:text-base hover:bg-[#FCF9F4] hover:text-[#FFC815] py-10 lg:py-2 px-4 rounded-lg  transition duration-200">
                    Update
                </button>
            </div>
        </Form>
    </div>

</x-account-layout>
