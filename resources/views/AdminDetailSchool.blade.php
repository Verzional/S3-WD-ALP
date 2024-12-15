<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <div class="flex flex-col lg:flex-row">
        <!-- Left Table -->
        <table class="basis-full  lg:mr-5 mb-5 lg:mb-0 border-collapse">
            <tr>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] font-bold px-4 py-2 text-center">ID</td>
                <td class="bg-[#D2DAC2] border-2 lg:text-xs text-3xl border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $school->id }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] font-bold px-4 py-2 text-center">Name</td>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $school->name }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] font-bold px-4 py-2 text-center">Level</td>
                <td class="bg-[#D2DAC2] border-2 lg:text-xs text-3xl border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $school->level }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] font-bold px-4 py-2 text-center">Location</td>
                <td class="bg-[#FCF9F4] border-2 lg:text-xs text-3xl border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $school->city }}</p>
                </td>
            </tr>
            
        </table>
</x-account-layout>
