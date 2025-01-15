<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="{{ url('participants') }}" method="GET">
        @csrf
        <input 
            type="text" 
            name="search" 
            placeholder="Search Participant" 
            value="{{ request('search') }}" 
            class="border-2 border-gray-300 rounded-md px-4 py-2 w-full lg:w-1/2 focus:outline-none focus:border-blue-500"
        />
        <button>Search</button>
    </form>
    <table class="w-full table-auto rounded-md ">
        <tr>
            <th class="border-2 border-[#262515]  lg:text-xs text-3xl px-4 py-2 ">ID</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 ">Name</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 hidden lg:table-cell p-2 ">Email</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">School</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">Category</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2 ">Year</th>
            <th class="border-2 border-[#262515] ]  lg:text-xs text-3xl px-4 py-2 ">Actions</th>
        </tr>
        @foreach ($registrations as $stu)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#E6EED5]">

            <td class="border-2 border-[#D2DAC2] text-center lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
      
            
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>

            <td class="border-2 flex flex-row items-center justify-center border-[#D2DAC2] px-5 lg:text-xs text-3xl py-10 lg:py-4">
                <a href="detailParticipant/{{ $stu['id'] }}" class=" border-2 flex border-[#FFC815] text-[#FFC815] bg-white rounded-[5px] px-5 p-2 hover:bg-[#FFC815] hover:text-white transition duration-200">View</a>
                <form action="{{ url('participants/' . $stu->id) }}" method="POST" class="flex items-center ml-5">
                    @csrf
                    @method('DELETE')
                    <button class="border-2 border-[#E42029] text-[#E42029] bg-white rounded-[5px] px-5 p-2 hover:bg-[#E42029] hover:text-white transition duration-200">Delete</button>
                </form>
            </td>

        </tr>
    @endforeach
    </table>
    <div class="mt-2" >
        {{ $registrations->appends(['search' => request('search')])->links() }}
    </div>
</x-account-layout>
