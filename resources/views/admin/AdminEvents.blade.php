<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <div class="h-[70vh]">
        <div class="grid grid-cols-3 items-start justify-start lg:grid-cols-4 gap-4 ">
            @foreach ($events as $ev)
            <a href="/detailEvent/{{ $ev->id }}">
                <div class="bg-[#FCF9F4] text-black font-bold flex-col hover:text-white rounded-[20px] justify-center flex shadow-md items-center p-5 text-center hover:bg-[#9CB668] transition duration-300">
                    <p class="text-3xl text-[#FFC815] font-bold">{{ $ev->year }}</p>
                    <p>{{ strlen($ev->description) > 19 ? substr($ev->description, 0, 19) . '...' : $ev->description }}</p>
                </div>
            </a>
            @endforeach

        </div>
    </div>
        <a href="/createEvent" class="w-full mt-5">
            <div class="bg-[#FFC815] text-[#FCF9F4] hover:bg-[#FCF9F4] hover:text-[#FFC815] rounded-[20px] justify-center flex items-center p-5 text-center transition duration-300">
                <p class=" font-bold text-3xl lg:text-base">Add Event</p>
            </div>
        </a>


    {{-- <div class="mt-4" >
        {{ $events->links() }}
    </div>

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="csv_file">Choose CSV File:</label>
            <input type="file" name="csv_file" accept=".csv">
        </div>

        @error('csv_file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Import CSV</button>
    </form> --}}
</x-account-layout>
