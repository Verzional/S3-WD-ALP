<x-account-layout>
    <x-slot:header>
        <p class="text-black font-bold text-6xl lg:text-4xl mb-5">{{ $title }}</p> 
    </x-slot:header>
    <div class="bg-[#FCF9F4] shadow-md px-10 py-10 lg:px-5 justify-center rounded-[50px] items-center">
        <form action="{{ route('updateParticipant', $registration->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="flex flex-col gap-5 lg:flex-row">
                <div>
                    <label for="studentName" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nama
                        Lengkap</label>
                    <input type="text" id="studentName" name="studentName" value="{{ $registration->student->name }}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        placeholder="Nama Lengkap" required />

                    <!-- Email Field -->
                    <label for="studentEmail" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Email</label>
                    <input type="email" id="studentEmail" name="studentEmail" value="{{ $registration->student->email }}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        placeholder="Email Anda" required />

                    <!-- Gender Field -->
                    <label for="studentGender" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Gender</label>
                    <select id="studentGender" name="studentGender" value="{{ $registration->student->gender }}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value="{{ $registration->student->gender }}" disabled  {{ !$registration->student->gender ? 'selected' : '' }}>Pilih Gender</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <!-- Contact Field -->
                    <label for="studentContact" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nomor
                        HP</label>
                    <input type="tel" id="studentContact" name="studentContact" value="{{ $registration->student->contact }}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        placeholder="Nomor HP Siswa/Orang Tua/ Wali" required />
                </div>
                <div>
                    <label for="grade" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Kelas Saat
                        Ini</label>
                    <select id="grade" name="grade" value="{{ $registration->grade}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

                    <!-- Level Field -->
                    <label for="level" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Jenjang
                        Sekolah</label>
                    <select id="level" name="level" value="{{ $registration->level}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="MTI">MTI</option>
                        <option value="MTS">MTs</option>
                        <option value="MA">MA</option>
                        <option value="SMK">SMK</option>
                        <option value="MAK">MAK</option>
                    </select>

                    <!-- School Field -->
                    <label for="school"
                        class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Sekolah</label>
                    <select id="school" name="school_id"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value="{{ $registration->school->id }}" disabled {{ !$registration->school ? 'selected' : '' }}>Pilih Sekolah</option>
                        @foreach ($schools as $school)
                            <option value="{{ $school->id }}">{{ $school->school_formatted }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="companionName" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nama
                        Pendamping</label>
                    <input type="text" id="companionName" name="companionName" value="{{ $registration->companion->name}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        placeholder="Nama Pendamping" required />

                    <!-- Companion Status Field -->
                    <label for="companionStatus" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Status
                        Pendamping</label>
                    <select id="companionStatus" name="companionStatus" value="{{ $registration->companion->status}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value ={{ $registration->companion->status }} disabled  {{ !$registration->companion->status ? 'selected' : '' }}>Pilih Status</option>
                        <option value="Guru">Guru</option>
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Wali">Wali</option>
                    </select>

                    <!-- Companion Contact Field -->
                    <label for="companionContact" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nomor HP
                        Pendamping</label>
                    <input type="tel" id="companionContact" name="companionContact" value="{{ $registration->companion->contact}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        placeholder="Nomor HP Pendamping" required />
                </div>
                <div>
                    <label for="language" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Bahasa yang
                        Dipilih</label>
                    <select id="language" name="language" value="{{ $registration->language}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value={{ $registration->language }} disabled  {{ !$registration->language ? 'selected' : '' }}>Pilih Bahasa</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="English">English</option>
                    </select>

                    <!-- Category Field -->
                    <label for="category" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Kategori
                        yang Diikuti</label>
                    <select id="category" name="category_id" value="{{ $registration->category->id}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value={{ $registration->category }} disabled  {{ !$registration->category ? 'selected' : '' }}>Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_formatted }} </option>
                        @endforeach
                    </select>

                    <!-- Schedule Field -->
                    <label for="schedule" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Sesi yang
                        Dipilih</label>
                    <select id="schedule" name="schedule_id" value="{{ $registration->schedule->id}}"
                        class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
                        required>
                        <option value={{ $registration->schedule }} disabled  {{ !$registration->schedule ? 'selected' : '' }}>Pilih Sesi</option>
                        @foreach ($schedules as $schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->schedule_formatted }}</option>
                        @endforeach
                    </select>
                </div>
                
                    
            </div>
            
            
            <div class="text-center">
                <button type="submit" 
                        class="w-full mt-10 font-medium bg-[#FFC815]  text-[#FCF9F4] text-4xl lg:text-base hover:bg-[#FCF9F4] hover:text-[#FFC815] py-10 lg:py-2 px-4 rounded-lg  transition duration-200">
                    Update
                </button>
            </div>
        </Form>
    </div>

</x-account-layout>
