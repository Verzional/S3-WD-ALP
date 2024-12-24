<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="">
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
    <table class="w-full table-auto rounded-md">
        <tr>
            <th class="border-2 border-[#D2DAC2] rounded-tl-[20px]  lg:text-xs text-3xl px-4 py-2 ">ID</th>
            <th class="border-2 border-[#D2DAC2] lg:text-xs text-3xl px-4 py-2 ">Name</th>
            <th class="border-2 border-[#D2DAC2] lg:text-xs text-3xl px-4 py-2 hidden lg:table-cell p-2 ">Email</th>
            <th class="border-2 border-[#D2DAC2] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">School</th>
            <th class="border-2 border-[#D2DAC2] lg:text-xs text-3xl px-4 hidden lg:table-cell py-2 ">Category</th>
            <th class="border-2 border-[#D2DAC2] lg:text-xs text-3xl px-4 py-2 ">Year</th>
            <th class="border-2 border-[#D2DAC2] rounded-tr-[20px]  lg:text-xs text-3xl px-4 py-2 ">Actions</th>
        </tr>
        @foreach ($registrations as $stu)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#D2DAC2]">

            <td class="border-2 border-[#D2DAC2] text-center lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
      
            
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
            <td class="border-2 border-[#D2DAC2] lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>

            <td class="border-2 border-[#D2DAC2] px-10 lg:text-xs text-3xl py-10 lg:py-4"><a href="detailParticipant/{{ $stu['id'] }}" class="bg-[#FFC815] text-white rounded-[5px] px-5 p-2">Edit</a></td>

        </tr>
    @endforeach
    </table>
    <div class="mt-2" >
        {{ $registrations->links() }}
    </div>
</x-account-layout>
