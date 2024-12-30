<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
    </x-slot:header>
    <div class="flex flex-col lg:flex-row">
        <table class="basis-full  lg:mr-5 mb-5 lg:mb-0 border-collapse">
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">ID</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->id }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Username</td>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->username }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Password</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-base border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->password }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Bebras Username</td>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->bebras_username }}</p>
                </td>
            </tr>
            <tr>
                <td class="bg-[#FCF9F4] lg:text-xl text-3xl border-2 border-[#505E00] font-bold px-4 py-2 text-center">Bebras Password</td>
                <td class="bg-[#D2DAC2] lg:text-xl text-base border-2 border-[#505E00] px-5 text-center">
                    <p class="text-black">{{ $user->bebras_password }}</p>
                </td>
            </tr>
            
        </table>
</x-account-layout>
