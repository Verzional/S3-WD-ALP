<x-account-layout>
    <x-slot:header>{{ $title }}

    <p class="p-5 ml-10 px-10 bg-[#FFC815] rounded-[20px] w-fit font-bold text-3xl text-[#FCF9F4]">{{ $year }}</p>
    </x-slot>
    
    <div>
        <div class="flex-col flex lg:flex-row my-2">
            <div class="flex-col basis-[40%] flex">
                <div class="flex gap-3 basis-[40%] mr-5">
                    <div class="px-10 shadow-md w-full justify-center flex flex-col  py-10 bg-green-500 rounded-[20px]">
                        <p class="font-medium lg:text-5xl text-white">{{ $participants }}</p>
                        <p class="text-white text-3xl">Students</p>
                    </div>
                </div>
                <div class="mt-5 flex">
                    <div class="mr-5 flex  flex-col bg-white shadow-md px-10 py-10 basis-[60%] rounded-[20px]">
                        <p class="text-3xl font-medium">Languages</p>
                        {!! $chart2->container() !!}
                    </div>
                </div>
            </div>
            <div class="basis-[55%] bg-[]">
                <div class="bg-white shadow-md rounded-[20px] p-5">
                    {!! $chart->container() !!}
                </div>
            </div>

        </div>

        
    </div>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}

    <script src="{{ $chart2->cdn() }}"></script>
{{ $chart2->script() }}
</x-account-layout>
