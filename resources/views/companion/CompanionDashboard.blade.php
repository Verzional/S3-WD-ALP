<x-account-layout>
    <x-slot:header>{{ $title }}

    <p class="p-2 ml-10 px-10 bg-[#FFC815] rounded-[20px] w-fit font-bold text-3xl text-[#FCF9F4]">{{ $year }}</p>
    </x-slot>
    

        <div class="flex-col flex lg:flex-row my-1">
            <div class="flex-col basis-[30%] flex">
                <div class="flex gap-3 basis-[30%] mr-5">
                    <div class="px-5 shadow-md basis-[30%] w-full justify-center flex flex-col  py-5 bg-green-500 rounded-[20px]">
                        <p class="font-medium lg:text-5xl text-white">{{ $participants }}</p>
                        <p class="text-white text-3xl">Students</p>
                    </div>
                    @if ($status === "Guru")
                        <div class="px-10 shadow-md  basis-[70%] w-full justify-center flex flex-col   py-5 bg-yellow-500 rounded-[20px]">
                            <p class="font-medium lg:text-2xl text-white">{{ $school }}</p>
                            <p class="text-white text-xl">School</p>
                        </div>
                    @endif
                </div>
                <div class="mt-5 basis-[70%] flex">
                    <div class=" mb-5 lg:mb-0 lg:mr-5 flex  flex-col bg-white shadow-md px-10 py-10 w-full rounded-[20px]">
                        <p class="text-3xl font-medium">Languages</p>
                        {!! $chart2->container() !!}
                    </div>
                </div>
            </div>
            <div class="basis-[55%] bg-[]">
                <div class="bg-white shadow-md rounded-[20px] pt-5 p-2">
                    {!! $chart->container() !!}
                </div>
            </div>

        </div>

        


    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}

    <script src="{{ $chart2->cdn() }}"></script>
{{ $chart2->script() }}
</x-account-layout>
