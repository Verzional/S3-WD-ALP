<x-account-layout>
    <x-slot:header>
        <a href="/events">
            <svg fill="#000000" class="mr-5 mb-5" height="40px" width="40px" version="1.1" id="Capa_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.676 26.676"
                xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <path
                            d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z">
                        </path>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                        <g> </g>
                    </g>
                </g>
            </svg>
        </a>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p>
    </x-slot:header>
    <div class="flex flex-col justify-start items-start">
        <div class="flex gap-5 items-end">
            <p class="text-black font-bold text-5xl">{{ $event->year }}</p>
            <a href="/editEvent/{{ $event->id }}" class="text-xl bg-[#FFC815] py-2 px-5 rounded-lg text-white shadow-md hover:bg-white hover:text-[#FFC815] transition duration-200 text-black">Edit</a> 
        </div>
                    
        <div class="mt-10 flex gap-5 w-full">
            <div class="flex flex-col bg-white shadow-md rounded-lg p-5 basis-[70%]">
                <p class="text-4xl lg:text-xl font-medium text-black">Description</p>
                <p class="text-black text-2xl lg:text-base">{{ $event->description }}</p>
            </div>
            <div class="flex flex-col bg-white shadow-md rounded-lg p-5 basis-[30%]">
                <p class="text-4xl lg:text-xl font-medium text-black">Schedule</p>
                <p class="text-black text-2xl lg:text-base">{{ $event->scheduleDescription }}</p>
            </div>
            
            
        </div>
    </div>
    <div class="mt-10 pb-10">
        <div>
            <form action="{{ url('detailEvent/' . $event->id) }}" method="GET">
                @csrf
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search Participant" 
                    value="{{ request('search') }}" 
                    class="border-2 border-gray-300 rounded-md px-4 py-2 w-full lg:w-1/2 focus:outline-none focus:border-yellow-500"
                />
                <select name="school" id="" class="py-2 rounded-md border-2 border-gray-300 focus:outline-none focus:border-yellow-500">
                    <option value=""></option>
                    @foreach ($schools as $school)
                            <option value="{{ $school->id }}">{{ $school->school_formatted }}</option>
                        @endforeach
                </select>
                <button>Search</button>
            </form>

            
        </div>
        
        <table class="w-full table-auto rounded-md ">
            <tr>
                <th class="border-2 border-[#262515]  lg:text-xs text-3xl px-4 py-2 ">ID</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 ">Name</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 hidden lg:table-cell p-2 ">Email</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">School</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">City</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">Category</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 ">Year</th>
                <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">Action</th>
            </tr>
            @foreach ($registrations as $stu)
            
            <tr class="odd:bg-[#FCF9F4] even:bg-[#E6EED5]">
    
                <td class="border-2 border-[#D2DAC2] text-center lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
          
                
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->city }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>
                <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl  p-2"><a href="detailParticipant/{{ $stu['id'] }}" class=" border-2 flex border-[#FFC815] text-[#FFC815] bg-white rounded-[5px] px-5 p-2 hover:bg-[#FFC815] hover:text-white transition duration-200">View</a></td>
    
    
            </tr>
        @endforeach
        </table>
        <div class="mt-2" >
            {{ $registrations->appends(['search' => request('search'), 'school' => request('school')])->links() }}
        </div>
        <form method="POST" action="{{ route('export') }}">
            @csrf
            <input type="hidden" name="event_id" value="{{ $event->id }}">
            <button type="submit" class="bg-[#FFC815] w-full rounded-lg py-2 mt-5 text-white">Export to CSV</button>
        </form>
    </div> 
</x-account-layout>
