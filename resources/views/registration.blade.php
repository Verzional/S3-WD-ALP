<x-login-register-layout>
    <h1 class="text-2xl text-black header text-center mb-6">Fill Out This Form</h1>

    <form action="{{ route('forms.store') }}" method="POST" autocomplete="off" class="space-y-4">
        @csrf

        <!-- Step 1 -->
        <div id="step-1" class="step">
            <!-- Name Field -->
            <label for="studentName" class="block text-black font-medium mb-2">Nama
                Lengkap</label>
            <input type="text" id="studentName" name="studentName"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                placeholder="Nama Lengkap" required />

            <!-- Email Field -->
            <label for="studentEmail" class="block text-black font-medium mb-2">Email</label>
            <input type="email" id="studentEmail" name="studentEmail"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                placeholder="Email Anda" required />

            <!-- Gender Field -->
            <label for="studentGender" class="block text-black font-medium mb-2">Gender</label>
            <select id="studentGender" name="studentGender"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Gender</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <!-- Contact Field -->
            <label for="studentContact" class="block text-black font-medium mb-2">Nomor
                HP</label>
            <input type="tel" id="studentContact" name="studentContact"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                placeholder="Nomor HP Siswa/Orang Tua/ Wali" required />

            <!-- Next Button -->
            <div class="flex justify-end mt-4">
                <button type="button"
                    class="bg-[#FFC815] text-white py-2 px-4 rounded-lg hover:bg-[#FCF9F4] hover:text-black transition duration-200"
                    onclick="nextStep(2)">Next</button>
            </div>
        </div>

        <!-- Step 2 -->
        <div id="step-2" class="step hidden">
            <!-- Grade Field -->
            <label for="grade" class="block text-black font-medium mb-2">Kelas Saat
                Ini</label>
            <select id="grade" name="grade"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Kelas</option>
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
            <label for="level" class="block text-black font-medium mb-2">Jenjang
                Sekolah</label>
            <select id="level" name="level"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Jenjang</option>
            </select>

            <!-- School Field -->
            <label for="school" class="block text-black font-medium mb-2">Sekolah</label>
            <select id="school" name="school_id"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Sekolah</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->school_formatted }}</option>
                @endforeach
            </select>

            <!-- Previous and Next Button -->
            <div class="flex justify-between mt-4">
                <button type="button"
                    class="bg-[#FCF9F4] text-black py-2 px-4 rounded-lg hover:bg-[#FFC815] hover:text-white transition duration-200"
                    onclick="prevStep(1)">Previous</button>
                <button type="button"
                    class="bg-[#FFC815] text-white py-2 px-4 rounded-lg hover:bg-[#FCF9F4] hover:text-black transition duration-200"
                    onclick="nextStep(3)">Next</button>
            </div>
        </div>

        <!-- Step 3 -->
        <div id="step-3" class="step hidden">
            <!-- Companion Name Field -->
            <label for="companionName" class="block text-black font-medium mb-2">Nama
                Pendamping</label>
            <input type="text" id="companionName" name="companionName"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                placeholder="Nama Pendamping" required />

            <!-- Companion Status Field -->
            <label for="companionStatus" class="block text-black font-medium mb-2">Status
                Pendamping</label>
            <select id="companionStatus" name="companionStatus"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value ="" disabled selected>Pilih Status</option>
                <option value="Guru">Guru</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Wali">Wali</option>
            </select>

            <!-- Companion Contact Field -->
            <label for="companionContact" class="block text-black font-medium mb-2">Nomor
                HP
                Pendamping</label>
            <input type="tel" id="companionContact" name="companionContact"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                placeholder="Nomor HP Pendamping" required />

            <!-- Previous and Next Button -->
            <div class="flex justify-between mt-4">
                <button type="button"
                    class="bg-[#FCF9F4] text-black py-2 px-4 rounded-lg hover:bg-[#FFC815] hover:text-white transition duration-200"
                    onclick="prevStep(2)">Previous</button>
                <button type="button"
                    class="bg-[#FFC815] text-white py-2 px-4 rounded-lg hover:bg-[#FCF9F4] hover:text-black transition duration-200"
                    onclick="nextStep(4)">Next</button>
            </div>
        </div>

        <!-- Step 4 -->
        <div id="step-4" class="step hidden">
            <!-- Language Field -->
            <label for="language" class="block text-black font-medium mb-2">Bahasa yang
                Dipilih</label>
            <select id="language" name="language"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Bahasa</option>
                <option value="Indonesia">Indonesia</option>
                <option value="English">English</option>
            </select>

            <!-- Category Field -->
            <label for="category" class="block text-black font-medium mb-2">Kategori
                yang Diikuti</label>
            <select id="category" name="category_id"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_formatted }} </option>
                @endforeach
            </select>

            <!-- Schedule Field -->
            <label for="schedule" class="block text-black font-medium mb-2">Sesi yang
                Dipilih</label>
            <select id="schedule" name="schedule_id"
                class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-700"
                required>
                <option value="" disabled selected>Pilih Sesi</option>
                @foreach ($schedules as $schedule)
                    <option value="{{ $schedule->id }}">{{ $schedule->schedule_formatted }}</option>
                @endforeach
            </select>

            <!-- Previous and Submit Button -->
            <div class="flex justify-between mt-4">
                <button type="button"
                    class="bg-[#FCF9F4] text-black py-2 px-4 rounded-lg hover:bg-[#FFC815] hover:text-white transition duration-200"
                    onclick="prevStep(3)">Previous</button>
                <button type="submit"
                    class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">Submit</button>
            </div>
        </div>
    </form>

    <!-- Form Script -->
    <script>
        function nextStep(step) {
            const currentStep = document.querySelector(`#step-${step - 1}`);
            const inputs = currentStep.querySelectorAll('input, select');

            let isValid = true;
            inputs.forEach((input) => {
                if (!input.reportValidity()) {
                    isValid = false;
                }
            });

            if (isValid) {
                const steps = document.querySelectorAll('.step');
                steps.forEach((step) => step.classList.add('hidden'));
                document.getElementById('step-' + step).classList.remove('hidden');
            }
        }


        function prevStep(step) {
            const steps = document.querySelectorAll('.step');
            steps.forEach((step) => step.classList.add('hidden'));

            document.getElementById('step-' + step).classList.remove('hidden');
        }
    </script>

    <!-- Grade Script -->
    <script>
        const grade = document.getElementById('grade');
        const level = document.getElementById('level');

        grade.addEventListener('change', () => {
            level.innerHTML = '<option value="" disabled selected>Pilih Jenjang</option>';

            if (grade.value <= 6) {
                level.innerHTML += '<option value="SD">SD</option>';
            } else if (grade.value <= 9) {
                level.innerHTML += '<option value="SMP">SMP</option>';
            } else {
                level.innerHTML += '<option value="SMA">SMA</option>';
            }
        });
    </script>
</x-login-register-layout>
