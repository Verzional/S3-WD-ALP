<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <table class="w-full  rounded-[20px] table-auto border-collapse rounded-md">
        <tr>
            <th class="bg-[#5D6749] rounded-tl-[20px] lg:text-base text-3xl text-white px-4 py-2 text-center">ID</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white px-4 py-2 text-center">Name</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white px-4 py-2 text-center">City</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white px-4 py-2 text-center">Level</th>
            <th class="bg-[#5D6749] rounded-tr-[20px] lg:text-base text-3xl text-white px-4 py-2 text-center"></th>

        </tr>
        @foreach ($schools as $sch)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#D2DAC2]">
            @if($loop->last)
            <td class="text-center rounded-bl-[20px] lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="px-10 rounded-br-[20px] lg:text-base text-3xl lg:py-0 py-10"><a href="detailSchool/{{ $sch['id'] }}">Edit</a></td>
            @else
            <td class="text-center lg:text-base text-3xl p-2">{{ $sch->id }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $sch->name }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $sch->city }}</td>
            <td class="text-center lg:text-base text-3xl  p-2">{{ $sch->level }}</td>
            <td class="px-10 lg:text-base text-3xl lg:py-0 py-10"><a href="detailSchool/{{ $sch['id'] }}">Edit</a></td>
            @endif
        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $schools->links() }}
    </div>
</x-account-layout>
