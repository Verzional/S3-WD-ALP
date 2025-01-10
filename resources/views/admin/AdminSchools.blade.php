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
    <table class="w-full table-auto border-collapse rounded-md">
        <tr>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">ID</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Name</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">City</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Level</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Actions</th>

        </tr>
        @foreach ($schools as $sch)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#E6EED5]">
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="border-2 border-[#D2DAC2] px-10 lg:text-xs text-3xl py-10 lg:py-4"><a href="detailSchool/{{ $sch['id'] }}"  class=" border-2 border-[#FFC815] text-[#FFC815] rounded-[5px] px-5 p-2 hover:bg-[#FFC815] hover:text-white transition duration-200">Edit</a></td>

        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $schools->links() }}
    </div>
</x-account-layout>
