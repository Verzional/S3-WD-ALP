<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <div class="flex flex-col lg:flex-row">
        <!-- Left Table -->
        <table class="basis-full lg:basis-[50%] lg:mr-5 mb-5 lg:mb-0 border-collapse">
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">ID</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->id }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Name</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->student->name }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Email</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->student->email }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Gender</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->student->gender }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Participant Contact</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->student->contact }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Level</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->level }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Grade</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->grade }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">School</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->school->name }}</p>
                </td>
            </tr>
        </table>

        <table class="basis-full lg:basis-[50%] mt-5 lg:mt-0 lg:ml-5 border-collapse">
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->companion->name }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion Status</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->companion->status }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Companion Contact</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->companion->contact }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Category</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->category->name }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Language</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->language }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Schedule</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->schedule->name }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Score</td>
                <td class="bg-[#D2DAC2] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->score }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Percentile</td>
                <td class="bg-[#FCF9F4] lg:text-xs text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $registration->rankPercentage }}</p>
                </td>
            </tr>
        </table>
    </div>
</x-account-layout>
