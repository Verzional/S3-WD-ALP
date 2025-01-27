<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="{{ url('participants') }}" class="px-20 lg:px-0 flex gap-5" method="GET">
        @csrf
        <input 
            type="text" 
            name="search" 
            placeholder="Search Participant" 
            value="{{ request('search') }}" 
            class="border-2 border-gray-300 rounded-md px-4 py-5 text-2xl basis-[80%] lg:text-base lg:py-2 w-full lg:w-1/2 focus:outline-none focus:border-blue-500"
        />
        <button class="basis-[20%] text-2xl lg:text-base justify-start bg-[#FFC815] text-white rounded-lg px-2 py-1">Search</button>
    </form>
        <div class="grid px-20 lg:px-0 grid-cols-1 lg:grid-cols-2 gap-5 flex">
        @foreach ($registrations as $stu)
            
            <x-registration-card>
                <x-slot:name>{{ $stu->student->name }}</x-slot:name>
                <x-slot:school>{{ $stu->school->name }}</x-slot:school>
                <x-slot:category>{{ $stu->category->name }}</x-slot:category>
                <x-slot:year>{{  $stu->event->year }}</x-slot:year>

                <a href="detailParticipant/{{ $stu['id'] }}" class="border-2 flex justify-center items-center border-[#FFC815] hover:text-[#FFC815] hover:bg-white rounded-full p-3 bg-[#FFC815] text-white transition duration-200">
                    <svg fill="" class="fill-white hover:fill-[#FFC815] lg:w-10 w-20 lg:h-10 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.011 512.011">
                        <path d="M505.755,240.92l-89.088-89.088c-88.576-88.597-232.747-88.597-321.323,0L6.256,240.92 c-8.341,8.341-8.341,21.824,0,30.165l89.088,89.088c44.288,44.288,102.464,66.453,160.661,66.453s116.373-22.165,160.661-66.453 l89.088-89.088C514.096,262.744,514.096,249.261,505.755,240.92z M256.005,362.669c-58.816,0-106.667-47.851-106.667-106.667 s47.851-106.667,106.667-106.667s106.667,47.851,106.667,106.667S314.821,362.669,256.005,362.669z"></path>
                        <path d="M256.005,192.003c-35.285,0-64,28.715-64,64s28.715,64,64,64s64-28.715,64-64S291.291,192.003,256.005,192.003z"></path>
                    </svg>
                </a>
                <a class="ml-5 border-2 flex justify-center items-center border-[#9CB668] hover:text-[#9CB668] hover:bg-white rounded-full p-3 bg-[#9CB668] text-white transition duration-200" href="/detailUser/student/{{ $stu->student->id }}">
                    <svg fill="" class="fill-white hover:fill-[#9CB668] lg:w-10 w-20 lg:h-10 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4.42 0-8 1.79-8 4v2h16v-2c0-2.21-3.58-4-8-4z"></path>
                    </svg>
                </a>
                <form action="{{ url('participants/' . $stu->id) }}" method="POST" class="flex items-center justify-center mt-4 ml-5">
                    @csrf
                    @method('DELETE')
                    <button class="border-2 border-[#E42029] hover:text-[#E42029] hover:bg-white rounded-full p-3 bg-[#DA351B] text-white transition duration-200">
                        <svg fill="" class="fill-white hover:fill-[#E42029] lg:w-10 w-20 lg:h-10 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M6 2a1 1 0 00-1 1v1H3a1 1 0 000 2h14a1 1 0 100-2h-2V3a1 1 0 00-1-1H6zm-2 6a1 1 0 011-1h10a1 1 0 011 1v9a1 1 0 01-1 1H5a1 1 0 01-1-1V8z"></path>
                        </svg>
                    </button>
                </form>
                </x-registration-card>
            
        @endforeach
    </div>
    
    <div class="mt-2" >
        {{ $registrations->appends(['search' => request('search')])->links() }}
    </div>
</x-account-layout>
