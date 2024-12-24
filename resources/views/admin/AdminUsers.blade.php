<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <table class="w-full  rounded-[20px] table-auto border-collapse rounded-md">
        <tr>
            <th class="bg-[#5D6749] rounded-tl-[20px]  lg:text-base text-3xl text-white px-4 py-2 text-center">ID</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white px-4 py-2 text-center">Name</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white px-4 py-2 text-center">Password</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white hidden lg:table-cell px-4 py-2 text-center">Bebras Username</th>
            <th class="bg-[#5D6749] lg:text-base text-3xl text-white hidden lg:table-cell px-4 py-2 text-center">Bebras Password</th>
            <th class="bg-[#5D6749] rounded-tr-[20px]  lg:text-base text-3xl text-white px-4 py-2 text-center"></th>
        </tr>
        @foreach ($users as $stu)
        
        <tr class="odd:bg-[#FCF9F4] even:bg-[#D2DAC2]">
            @if($loop->last)
            <td class="text-center rounded-bl-[20px] lg:text-base text-3xl p-2">{{ $stu->id }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $stu->username }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ substr($stu->password, 0, 10) }}</td>
            <td class="text-center lg:text-base text-3xl hidden lg:table-cell p-2">{{ $stu->bebras_username }}</td>
            <td class="text-center lg:text-base text-3xl hidden lg:table-cell p-2">{{ $stu->bebras_password }}</td>
            <td class="px-10 rounded-br-[20px] lg:text-base text-3xl py-10 lg:py-0"><a href="detailUser/{{ $stu['id'] }}">Edit</a></td>
            @else
            <td class="text-center lg:text-base text-3xl p-2">{{ $stu->id }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ $stu->username }}</td>
            <td class="text-center lg:text-base text-3xl p-2">{{ substr($stu->password, 0, 10) }}</td>
            <td class="text-center lg:text-base text-3xl hidden lg:table-cell p-2">{{ $stu->bebras_username }}</td>
            <td class="text-center lg:text-base text-3xl hidden lg:table-cell p-2">{{ $stu->bebras_password }}</td>
            <td class="px-10 lg:text-base text-3xl py-10 lg:py-0"><a href="detailUser/{{ $stu['id'] }}">Edit</a></td>
            @endif
        </tr>
        @endforeach
    </table>
    <div class="mt-4" >
        {{ $users->links() }}
    </div>
</x-account-layout>
