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
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Status</th>
            <th class="border-2 border-[#262515] lg:text-xs text-3xl px-4 py-2">Actions</th>

        </tr>
        @foreach ($schools as $sch)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#E6EED5]">
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="text-center border-2 border-[#D2DAC2] lg:text-base text-3xl  p-2">{{ $sch->status }}</td>
            <td class="border-2 border-[#D2DAC2] flex flex-col space-x-0 space-y-4 lg:space-x-4 lg:space-y-0 lg:flex-row px-10 lg:text-xs text-3xl py-10 lg:py-4">
                <a href="detailSchool/{{ $sch['id'] }}"  class=" border-2 border-[#FFC815] bg-white text-[#FFC815] rounded-[5px] text-center px-5 p-2 hover:bg-[#FFC815] hover:text-white transition duration-200">Edit</a>
                @if ($sch->status == "pending")
                <form action="{{ url('/schools/' . $sch->id . '/approve')}}" class="flex justify-center flex-row items-center ml-5 " method="POST">
                    @csrf
                    @method('PUT')
                    <button class=" border-2 border-[#9CB668] bg-white text-[#9CB668] rounded-[5px] px-5 p-2 hover:bg-[#9CB668] hover:text-white transition duration-200">Approve</button>
                    <input type="hidden" name="status" value="accepted">
                </form>
                @endif
                <form action="{{ url('schools/' . $sch->id) }}" method="POST" class="flex items-center justify-center mt-4 ml-5">
                    @csrf
                    @method('DELETE')
                    <button class="border-2 border-[#E42029] text-[#E42029] bg-white rounded-[5px] px-5 p-2 hover:bg-[#E42029] hover:text-white transition duration-200">Delete</button>
                </form>
                
            </td>

        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $schools->links() }}
    </div>
</x-account-layout>
