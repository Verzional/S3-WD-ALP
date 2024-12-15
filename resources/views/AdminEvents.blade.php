<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>

        <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
            @foreach ($events as $ev)
            <a href="/detailEvent/{{ $ev->id }}">
                <div class="bg-[#505E00] text-[#FCF9F4] font-bold hover:text-[#505E00] rounded-[20px] justify-center flex items-center p-5 text-center hover:bg-[#D2DAC2] transition duration-300">
                    <p class="">{{ $ev->year }}</p>
                </div>
            </a>
            @endforeach
            <a>
                <div class="bg-[#FFC815] text-[#FCF9F4] hover:bg-[#FCF9F4] hover:text-[#FFC815] rounded-[20px] justify-center flex items-center p-5 text-center transition duration-300">
                    <p class=" font-bold">Add Event</p>
                </div>
            </a>
        </div>
        
        

    <div class="mt-4" >
        {{ $events->links() }}
    </div>
</x-account-layout>
