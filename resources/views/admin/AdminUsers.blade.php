<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <form action="{{ url('users') }}" method="GET">
        @csrf
        <input 
            type="text" 
            name="search" 
            placeholder="Search Users" 
            value="{{ request('search') }}" 
            class="border-2 border-gray-300 rounded-md px-4 py-2 w-full lg:w-1/2 focus:outline-none focus:border-blue-500"
        />
        <button>Search</button>
    </form>
        <div class="grid gap-4 grid-cols-2 lg:grid-cols-3">
            @foreach ($users as $stu)
            <a href="/detailUser/{{ $stu->id }}" 
                class="p-5 bg-white block rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-yellow-500">
                 <p class="text-lg font-semibold text-gray-800 hover:text-yellow-500">{{ $stu->username }}</p>
             </a>
            

            @endforeach
        </div>
    <div class="mt-4" >
        {{ $users->links() }}
    </div>
</x-account-layout>
