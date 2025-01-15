<x-account-layout>
    <x-slot:header>{{ $title }}</x-slot>
    <div>
        <div class="flex-col flex lg:flex-row my-2 items-stretch">
            <div class="flex-col basis-[58.5%] items-stretch flex">
                <div class="flex gap-3 mr-5">
                    <div class="px-10 shadow-md  py-10 basis-[33%] bg-green-500 rounded-[20px]">
                        <p class="font-medium lg:text-3xl text-white">{{ $participants }}</p>
                        <p class="text-white">Students</p>
                    </div>
                    <div class="px-10 shadow-md  py-10 basis-[33%] bg-blue-500 rounded-[20px]">
                        <p class="font-medium lg:text-3xl text-white">{{ $companions }}</p>
                        <p class="text-white">Companions</p>
                    </div>
                    <div class="px-10 shadow-md  py-10 basis-[33%] bg-yellow-400 rounded-[20px]">
                        <p class="font-medium lg:text-3xl text-white">{{ $schools }}</p>
                        <p class="text-white">Schools</p>
                    </div>
                </div>
                <div class="mt-5 flex">
                    <div class="basis-[40%] bg-white shadow-md p-5 rounded-lg">
                        <p class="text-3xl font-medium">Schedules</p>
                        @foreach ($schedules as $s )
                            <div class="p-5 bg-[#5D6749] my-2 items-center rounded-[20px] flex">
                                <p class="text-white font-medium">{{ $s -> name }}</p>
                                <p class="ml-5 text-xl text-white font-medium">{{ $s -> description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="basis-[53.5%] rounded-lg bg-white shadow-md px-5 py-1 ml-5 flex flex-col">
                        <p class="text-3xl font-medium">Languages</p>
                        <div class="mt-10">
                            {!! $chart2->container() !!}
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="basis-[40%]">
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
