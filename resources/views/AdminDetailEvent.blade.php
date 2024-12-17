<x-account-layout>
    <x-slot:header>{{ $title }} </x-slot:header>
    <div class="flex flex-col">
        <!-- Left Table -->
        <div class="flex gap-5">
            <p class="text-black font-bold text-3xl">ID: </p>
            <p class="text-black font-bold text-3xl">{{ $event->id }}</p>
        </div>
        <div class="flex gap-5">
            <p class="text-black font-bold text-3xl">Year: </p>
            <p class="text-black font-bold text-3xl">{{ $event->year }}</p>
        </div>
                    
        <div class="mt-10">
            <p class="text-xl font-medium text-black">Description</p>
            <p class="text-black">{{ $event->description }}</p>
            <p class="text-xl font-medium text-black">Schedule</p>
            <p class="text-black">{{ $event->scheduleDescription }}</p>
        </div>
    </div>
</x-account-layout>
