<x-account-layout>
    <x-slot:header>
        {{ $title }}
        <p class="p-1 mt-2 ml-10 px-10 bg-[#FFC815] rounded-[20px] w-fit font-bold text-3xl text-[#FCF9F4]">{{ $year }}</p>
    </x-slot>

        

    <div class="flex flex-col lg:flex-row justify-center gap-5 mt-5">

        <div class="flex flex-col bg-[#FCF9F4] py-10 p-5 justify-center rounded-[50px] basis-[50%] shadow-sm items-center ">
            <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">{{ $schedule }}</p>
            <p class="text-4xl lg:text-2xl font-bold text-black">Schedule</p>
        </div>
        <div class="flex flex-col bg-[#FCF9F4] py-10 p-5 justify-center rounded-[50px] basis-[50%] shadow-sm items-center ">
            <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">{{ $registration->language }}</p>
            <p class="text-4xl lg:text-2xl font-bold text-black">Language</p>
        </div>

    </div>
    <div class="flex flex-col lg:flex-row gap-5 mt-5 justify-center items-center">
        <div class="flex w-full flex-col bg-[#33E0FF] py-20 p-5 justify-center rounded-[50px] shadow-sm items-center basis-[33%]">
            @if(!$score)
                <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">N/A</p>
            @else
                <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">{{ $score }}</p>
            @endif
            <p class="text-4xl lg:text-2xl font-bold text-white">Score</p>
        </div>
        <div class="flex w-full flex-col bg-[#B6D83F] py-20 p-5 justify-center shadow-sm rounded-[50px] items-center basis-[33%]">
            @if(!$rank)
                <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">N/A</p>
            @else
                <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">{{ $rank }} %</p>
            @endif
            <p class="text-4xl lg:text-2xl font-bold text-center text-white">Rank Percentile</p>
        </div>

        <div class="flex w-full flex-col bg-orange-600 py-20 p-5 justify-center rounded-[50px] shadow-sm items-center basis-[33%]">
            
            <p class="text-6xl lg:text-4xl font-bold text-[#FFC815] mb-5">{{ $category }}</p>
            <p class="text-4xl lg:text-2xl font-bold text-white">Category</p>
        </div>
    </div>
</x-account-layout>
