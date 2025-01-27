<x-account-layout>
    <div class="flex flex-row">
    
        <x-slot:header> 
            <a href="/participants">
                <svg fill="#000000" class="mr-5 mb-5" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.676 26.676" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
            </a>
            <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p>
            <a href="/editParticipant/{{ $registration->id }}" class="text-base ml-5 text-white bg-[#FFC815] hover:bg-white hover:text-[#FFC815] rounded-lg px-5 p-2 transition duration-200">Edit</a>  
        </x-slot:header>
        
    </div>

    <!-- Details Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">ID</p>
            <p class="text-gray-600">{{ $registration->id }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Name</p>
            <p class="text-gray-600">{{ $registration->student->name }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Email</p>
            <p class="text-gray-600">{{ $registration->student->email }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Gender</p>
            <p class="text-gray-600">{{ $registration->student->gender }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Participant Contact</p>
            <p class="text-gray-600">{{ $registration->student->contact }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Level</p>
            <p class="text-gray-600">{{ $registration->level }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Grade</p>
            <p class="text-gray-600">{{ $registration->grade }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">School</p>
            <p class="text-gray-600">{{ $registration->school->name }}</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Companion</p>
            <p class="text-gray-600">{{ $registration->companion->name }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Companion Status</p>
            <p class="text-gray-600">{{ $registration->companion->status }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Companion Contact</p>
            <p class="text-gray-600">{{ $registration->companion->contact }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Category</p>
            <p class="text-gray-600">{{ $registration->category->name }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Language</p>
            <p class="text-gray-600">{{ $registration->language }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Schedule</p>
            <p class="text-gray-600">{{ $registration->schedule->name }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Score</p>
            <p class="text-gray-600">{{ $registration->score }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <p class="text-lg font-semibold text-gray-800">Percentile</p>
            <p class="text-gray-600">{{ $registration->rankPercentile }}</p>
        </div>
    </div>
</x-account-layout>
