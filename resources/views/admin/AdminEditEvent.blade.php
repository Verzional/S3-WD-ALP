<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
    </x-slot:header>
    <div class="bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-5 justify-center rounded-[50px] items-center">
        <form action="{{ route('events.update', ['event' => $event->id]) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="year" class="block text-[#FFC815]  text-4xl lg:text-2xl font-medium mb-2">Year</label>
                <input type="text" id="year" name="year" 
                    value="{{ $event->year }}" 
                    class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                    placeholder="Enter year" required>
                    <label for="description" class="block text-[#FFC815]  text-4xl lg:text-2xl font-medium mb-2">Description</label>
                    <textarea  id="description" name="description"  id="description" name="description"  
                    value="{{ $event->scheduleDescription }}" 
                    class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                placeholder="Enter schedule description" required>{{ $event->description }}</textarea>

                    <label for="scheduleDescription" class="block text-[#FFC815]  text-4xl lg:text-2xl font-medium mb-2">Schedule Description</label>
                    <textarea  id="scheduleDescription" name="scheduleDescription"  id="scheduleDescription" name="scheduleDescription"  
                        value="{{ $event->scheduleDescription }}" 
                        class="w-full px-4 text-4xl lg:text-base py-10 lg:py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                        placeholder="Enter schedule description" required>{{ $event->scheduleDescription }}</textarea>



                    
            </div>
            
            
            <div class="text-center">
                <button type="submit" 
                        class="w-full mt-10 font-medium bg-[#FFC815]  text-[#FCF9F4] text-4xl lg:text-base hover:bg-[#FCF9F4] hover:text-[#FFC815] py-10 lg:py-2 px-4 rounded-lg  transition duration-200">
                    Update
                </button>
            </div>
        </Form>
        <form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="POST" class="flex items-center justify-center mt-4 ml-5">
            @csrf
            @method('DELETE')
            <button class="w-full mt-10 font-medium bg-[#E42029]  text-[#FCF9F4] text-4xl lg:text-base hover:bg-[#FCF9F4] hover:text-[#E42029] py-10 lg:py-2 px-4 rounded-lg  transition duration-200">
                Delete
            </button>
        </form>
    </div>

</x-account-layout>
