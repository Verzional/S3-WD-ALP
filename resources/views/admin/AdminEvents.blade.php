<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>

        <div class="grid grid-cols-3 lg:grid-cols-4 gap-4 ">
            @foreach ($events as $ev)
            <a href="/detailEvent/{{ $ev->id }}">
                <div class="bg-[#505E00] text-[#FCF9F4] font-bold flex-col hover:text-[#FFC815] rounded-[20px] justify-center flex items-center p-5 text-center hover:bg-[#9CB668] transition duration-300">
                    <p class="text-3xl">{{ $ev->year }}</p>
                    <p>{{ $ev -> description }}</p>
                </div>
            </a>
            @endforeach

        </div>
        <a class="w-full mt-5">
            <div class="bg-[#FFC815] text-[#FCF9F4] hover:bg-[#FCF9F4] hover:text-[#FFC815] rounded-[20px] justify-center flex items-center p-5 text-center transition duration-300">
                <p class=" font-bold">Add Event</p>
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
