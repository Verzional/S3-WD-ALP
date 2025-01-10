<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="{{ url('schools') }}" method="GET">
        @csrf
        <input 
            type="text" 
            name="search" 
            placeholder="Search School" 
            value="{{ request('search') }}" 
            class="border-2 border-gray-300 rounded-md px-4 py-2 w-full lg:w-1/2 focus:outline-none focus:border-blue-500"
        />
        <button>Search</button>
    </form>
    <table class="w-full  rounded-[20px] table-auto border-collapse rounded-md">
        <tr>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">ID</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Name</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">City</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Level</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Actions</th>

        </tr>
        @foreach ($schools as $sch)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#D2DAC2]">
            @if($loop->last)
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="px-10  border-2 border-[#D2DAC2] lg:text-base text-3xl lg:py-0 py-10"><a href="detailSchool/{{ $sch['id'] }}">Edit</a></td>
            @else
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="px-10 border-2 border-[#D2DAC2] lg:text-base text-3xl lg:py-0 py-10"><a href="detailSchool/{{ $sch['id'] }}">Edit</a></td>
            @endif
        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $schools->links() }}
    </div>
</x-account-layout>
