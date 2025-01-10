<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="{{ url('companion/participants') }}" method="GET">
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
    <table class="w-full table-auto rounded-md border-separate border-spacing-0">
        <tr>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white rounded-tl-[20px]  lg:text-xs text-3xl px-4 py-2 ">ID</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white lg:text-xs text-3xl px-4 py-2 ">Name</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white lg:text-xs text-3xl px-4 py-2 hidden lg:table-cell p-2 ">Email</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">School</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">Category</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white lg:text-xs text-3xl px-4 py-2 ">Year</th>
            <th class="border-2 border-[#5D6749] bg-[#262515] text-white rounded-tr-[20px]  lg:text-xs text-3xl px-4 py-2 ">Actions</th>
        </tr>
        @foreach ($registrations as $stu)
        
        <tr class="even:bg-[#FCF9F4] odd:bg-[#D2DAC2]">
            @if($loop->last)

            <td class="border-2 border-[#5D6749] text-center rounded-bl-[20px] lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
      
            
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>

            <td class="border-2 border-[#5D6749] px-10 lg:text-xs text-3xl rounded-br-[20px] py-10 lg:py-4"><a href="detailParticipant/{{ $stu['id'] }}" class="bg-[#FFC815] text-white rounded-[5px] px-5 p-2">Edit</a></td>
            @else
            <td class="border-2 border-[#5D6749] text-center lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
      
            
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
            <td class="border-2 border-[#5D6749] lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>

            <td class="border-2 border-[#5D6749] text-center px-10 lg:text-xs text-3xl py-10 lg:py-4"><a href="detailParticipant/{{ $stu['id'] }}" class="bg-[#FFC815] text-white text-center rounded-[5px] px-5 p-2">Edit</a></td>
            @endif
        </tr>
    @endforeach
    </table>
    <div class="mt-4" >
        {{ $registrations->links() }}
    </div>
</x-account-layout>
