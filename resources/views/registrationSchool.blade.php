<x-login-register-layout>
    <h1 class="text-2xl font-bold text-gray-700 dark:text-gray-300 text-center mb-6">Fill Out This Form</h1>

    <form action="{{ route('schools.store') }}" method="POST" autocomplete="off" class="space-y-4">
        @csrf
        <!-- School Name Field -->
        <label for="schoolName" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nama
            Sekolah</label>
        <input type="text" id="schoolName" name="schoolName"
            class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
            placeholder="Nama Sekolah" required />

        <!-- City Field -->
        <label for="schoolCity" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Nama Kota
            Sekolah</label>
        <select id="schoolCity" name="schoolCity"
            class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
            required>
            <option value="" disabled selected>Pilih Kota</option>
            <option value="Aceh - Banda Aceh">Aceh - Banda Aceh</option>
            <option value="Aceh - Lhokseumawe">Aceh - Lhokseumawe</option>
            <option value="Aceh - Sabang">Aceh - Sabang</option>
            <option value="Aceh - Langsa">Aceh - Langsa</option>
            <option value="Aceh - Subulussalam">Aceh - Subulussalam</option>
            <option value="Sumatera Utara - Medan">Sumatera Utara - Medan</option>
            <option value="Sumatera Utara - Binjai">Sumatera Utara - Binjai</option>
            <option value="Sumatera Utara - Pematangsiantar">Sumatera Utara - Pematangsiantar</option>
            <option value="Sumatera Utara - Tebing Tinggi">Sumatera Utara - Tebing Tinggi</option>
            <option value="Sumatera Utara - Padang Sidempuan">Sumatera Utara - Padang Sidempuan</option>
            <option value="Sumatera Barat - Padang">Sumatera Barat - Padang</option>
            <option value="Sumatera Barat - Bukittinggi">Sumatera Barat - Bukittinggi</option>
            <option value="Sumatera Barat - Payakumbuh">Sumatera Barat - Payakumbuh</option>
            <option value="Sumatera Barat - Pariaman">Sumatera Barat - Pariaman</option>
            <option value="Sumatera Barat - Solok">Sumatera Barat - Solok</option>
            <option value="Riau - Pekanbaru">Riau - Pekanbaru</option>
            <option value="Riau - Dumai">Riau - Dumai</option>
            <option value="Kepulauan Riau - Tanjung Pinang">Kepulauan Riau - Tanjung Pinang</option>
            <option value="Kepulauan Riau - Batam">Kepulauan Riau - Batam</option>
            <option value="Jambi - Kota Jambi">Jambi - Kota Jambi</option>
            <option value="Bengkulu - Kota Bengkulu">Bengkulu - Kota Bengkulu</option>
            <option value="Sumatera Selatan - Palembang">Sumatera Selatan - Palembang</option>
            <option value="Sumatera Selatan - Lubuklinggau">Sumatera Selatan - Lubuklinggau</option>
            <option value="Sumatera Selatan - Pagar Alam">Sumatera Selatan - Pagar Alam</option>
            <option value="Sumatera Selatan - Prabumulih">Sumatera Selatan - Prabumulih</option>
            <option value="Lampung - Bandar Lampung">Lampung - Bandar Lampung</option>
            <option value="Lampung - Metro">Lampung - Metro</option>
            <option value="Bangka Belitung - Pangkalpinang">Bangka Belitung - Pangkalpinang</option>
            <option value="DKI Jakarta - Jakarta Pusat">DKI Jakarta - Jakarta Pusat</option>
            <option value="DKI Jakarta - Jakarta Utara">DKI Jakarta - Jakarta Utara</option>
            <option value="DKI Jakarta - Jakarta Barat">DKI Jakarta - Jakarta Barat</option>
            <option value="DKI Jakarta - Jakarta Selatan">DKI Jakarta - Jakarta Selatan</option>
            <option value="DKI Jakarta - Jakarta Timur">DKI Jakarta - Jakarta Timur</option>
            <option value="Jawa Barat - Bandung">Jawa Barat - Bandung</option>
            <option value="Jawa Barat - Bogor">Jawa Barat - Bogor</option>
            <option value="Jawa Barat - Bekasi">Jawa Barat - Bekasi</option>
            <option value="Jawa Barat - Depok">Jawa Barat - Depok</option>
            <option value="Jawa Barat - Cimahi">Jawa Barat - Cimahi</option>
            <option value="Jawa Barat - Cirebon">Jawa Barat - Cirebon</option>
            <option value="Jawa Barat - Sukabumi">Jawa Barat - Sukabumi</option>
            <option value="Jawa Barat - Tasikmalaya">Jawa Barat - Tasikmalaya</option>
            <option value="Jawa Barat - Banjar">Jawa Barat - Banjar</option>
            <option value="Jawa Tengah - Semarang">Jawa Tengah - Semarang</option>
            <option value="Jawa Tengah - Surakarta (Solo)">Jawa Tengah - Surakarta (Solo)</option>
            <option value="Jawa Tengah - Magelang">Jawa Tengah - Magelang</option>
            <option value="Jawa Tengah - Pekalongan">Jawa Tengah - Pekalongan</option>
            <option value="Jawa Tengah - Salatiga">Jawa Tengah - Salatiga</option>
            <option value="Jawa Tengah - Tegal">Jawa Tengah - Tegal</option>
            <option value="DI Yogyakarta - Kota Yogyakarta">DI Yogyakarta - Kota Yogyakarta</option>
            <option value="Jawa Timur - Surabaya">Jawa Timur - Surabaya</option>
            <option value="Jawa Timur - Malang">Jawa Timur - Malang</option>
            <option value="Jawa Timur - Kediri">Jawa Timur - Kediri</option>
            <option value="Jawa Timur - Madiun">Jawa Timur - Madiun</option>
            <option value="Jawa Timur - Blitar">Jawa Timur - Blitar</option>
            <option value="Jawa Timur - Mojokerto">Jawa Timur - Mojokerto</option>
            <option value="Jawa Timur - Probolinggo">Jawa Timur - Probolinggo</option>
            <option value="Jawa Timur - Pasuruan">Jawa Timur - Pasuruan</option>
            <option value="Jawa Timur - Batu">Jawa Timur - Batu</option>
            <option value="Banten - Tangerang">Banten - Tangerang</option>
            <option value="Banten - Serang">Banten - Serang</option>
            <option value="Banten - Cilegon">Banten - Cilegon</option>
            <option value="Banten - Kota Tangerang Selatan">Banten - Kota Tangerang Selatan</option>
            <option value="Bali - Denpasar">Bali - Denpasar</option>
            <option value="NTB - Mataram">NTB - Mataram</option>
            <option value="NTB - Bima">NTB - Bima</option>
            <option value="NTT - Kupang">NTT - Kupang</option>
            <option value="Kalimantan Barat - Pontianak">Kalimantan Barat - Pontianak</option>
            <option value="Kalimantan Barat - Singkawang">Kalimantan Barat - Singkawang</option>
            <option value="Kalimantan Tengah - Palangka Raya">Kalimantan Tengah - Palangka Raya</option>
            <option value="Kalimantan Selatan - Banjarmasin">Kalimantan Selatan - Banjarmasin</option>
            <option value="Kalimantan Selatan - Banjarbaru">Kalimantan Selatan - Banjarbaru</option>
            <option value="Kalimantan Timur - Samarinda">Kalimantan Timur - Samarinda</option>
            <option value="Kalimantan Timur - Balikpapan">Kalimantan Timur - Balikpapan</option>
            <option value="Kalimantan Timur - Bontang">Kalimantan Timur - Bontang</option>
            <option value="Kalimantan Utara - Tanjung Selor">Kalimantan Utara - Tanjung Selor</option>
            <option value="Kalimantan Utara - Tarakan">Kalimantan Utara - Tarakan</option>
            <option value="Sulawesi Utara - Manado">Sulawesi Utara - Manado</option>
            <option value="Sulawesi Utara - Bitung">Sulawesi Utara - Bitung</option>
            <option value="Sulawesi Utara - Tomohon">Sulawesi Utara - Tomohon</option>
            <option value="Gorontalo - Kota Gorontalo">Gorontalo - Kota Gorontalo</option>
            <option value="Sulawesi Tengah - Palu">Sulawesi Tengah - Palu</option>
            <option value="Sulawesi Selatan - Makassar">Sulawesi Selatan - Makassar</option>
            <option value="Sulawesi Selatan - Parepare">Sulawesi Selatan - Parepare</option>
            <option value="Sulawesi Selatan - Palopo">Sulawesi Selatan - Palopo</option>
            <option value="Sulawesi Tenggara - Kendari">Sulawesi Tenggara - Kendari</option>
            <option value="Sulawesi Tenggara - Bau-Bau">Sulawesi Tenggara - Bau-Bau</option>
            <option value="Sulawesi Barat - Mamuju">Sulawesi Barat - Mamuju</option>
            <option value="Maluku - Ambon">Maluku - Ambon</option>
            <option value="Maluku - Tual">Maluku - Tual</option>
            <option value="Maluku Utara - Sofifi">Maluku Utara - Sofifi</option>
            <option value="Maluku Utara - Ternate">Maluku Utara - Ternate</option>
            <option value="Maluku Utara - Tidore">Maluku Utara - Tidore</option>
            <option value="Papua - Jayapura">Papua - Jayapura</option>
            <option value="Papua Barat - Manokwari">Papua Barat - Manokwari</option>
            <option value="Papua Selatan - Merauke">Papua Selatan - Merauke</option>
            <option value="Papua Tengah - Nabire">Papua Tengah - Nabire</option>
            <option value="Papua Pegunungan - Wamena">Papua Pegunungan - Wamena</option>
        </select>

        <!-- Level Field -->
        <label for="schoolLevel" class="block text-gray-600 dark:text-gray-300 font-medium mb-2">Jenjang
            Sekolah</label>
        <select id="schoolLevel" name="schoolLevel"
            class="w-full mb-4 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700"
            required>
            <option value="" disabled selected>Pilih Jenjang</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
        </select>
        <div class="py-1 w-full"></div>
        <!-- Submit Button -->
        <button
            type="submit"class="bg-green-500 text-white w-full py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">
            Submit
        </button>
    </form>
</x-login-register-layout>
