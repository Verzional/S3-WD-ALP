<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <table class="w-full table-auto border-collapse rounded-md">
        <tr>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 py-2 text-center">ID</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 py-2 text-center">Name</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 py-2 hidden lg:table-cell p-2 text-center">Email</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 hidden lg:table-cell py-2 text-center">School</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 hidden lg:table-cell py-2 text-center">Category</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 py-2 text-center">Year</th>
            <th class="bg-[#5D6749] lg:text-xs text-3xl text-white px-4 py-2 text-center"></th>
        </tr>
        @foreach ($registrations as $stu)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#D2DAC2]">
            <td class="text-center lg:text-xs text-3xl p-2">{{ $stu->id }}</td>
            <td class="text-center lg:text-xs text-3xl p-2">{{ $stu->student->name }}</td>
            <td class="text-center lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->student->email }}</td>
            <td class="text-center lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->school->name }}</td>
            <td class="text-center lg:text-xs text-3xl hidden lg:table-cell p-2">{{ $stu->category->name }}</td>
            <td class="text-center lg:text-xs text-3xl  p-2">{{ $stu->event->year }}</td>
            <td class="px-10 lg:text-xs text-3xl lg:py-0 py-10"><a href="detailParticipant/{{ $stu['id'] }}">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <div class="mt-4" >
        {{ $registrations->links() }}
    </div>

    {{-- Export to CSV --}}
    <a href="{{ route('export') }}" class="bg-[#5D6749] text-white text-center text-3xl p-2 rounded-md mt-4">Export to CSV</a>
</x-account-layout>
