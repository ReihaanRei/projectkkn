<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa Berprestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Form Edit Data (Static) -->
                    <form>
                        <!-- Bagian Data Pribadi -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">
                                Data Pribadi Siswa
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama Lengkap -->
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input id="nama" name="nama" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                        value="Andi Wijaya" required>
                                </div>
                                
                                <!-- NIS -->
                                <div>
                                    <label for="nis" class="block text-sm font-medium text-gray-700">Nomor Induk Siswa (NIS)</label>
                                    <input id="nis" name="nis" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                        value="2023001" required>
                                </div>
                                
                                <!-- Jenis Kelamin -->
                                <div>
                                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L" selected>Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                
                                <!-- Kelas -->
                                <div>
                                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                                    <select id="kelas" name="kelas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                        <option value="">Pilih Kelas</option>
                                        <option value="X IPA 1">X IPA 1</option>
                                        <option value="X IPA 2">X IPA 2</option>
                                        <option value="XI IPA 1">XI IPA 1</option>
                                        <option value="XI IPA 2" selected>XI IPA 2</option>
                                        <option value="XII IPA 1">XII IPA 1</option>
                                        <option value="XII IPA 2">XII IPA 2</option>
                                    </select>
                                </div>
                                
                                <!-- Upload Foto -->
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Foto Siswa</label>
                                    <div class="mt-1 flex items-center">
                                        <div class="relative">
                                            <img id="preview-foto" src="https://randomuser.me/api/portraits/boys/1.jpg" 
                                                class="h-24 w-24 rounded-full object-cover border-2 border-gray-300">
                                            <label for="foto" class="absolute bottom-0 right-0 bg-white p-1 rounded-full shadow-md cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                                </svg>
                                                <input id="foto" name="foto" type="file" class="sr-only" accept="image/*">
                                            </label>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-sm text-gray-500">Upload foto siswa (max 2MB)</p>
                                            <p class="text-xs text-gray-500 mt-1">Foto saat ini: andi-wijaya.jpg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bagian Data Prestasi -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">
                                Data Prestasi
                            </h3>
                            
                            <div class="grid grid-cols-1 gap-6">
                                <!-- Nama Prestasi -->
                                <div>
                                    <label for="prestasi" class="block text-sm font-medium text-gray-700">Nama Prestasi</label>
                                    <input id="prestasi" name="prestasi" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                                        value="Juara 1 Olimpiade Matematika" required>
                                </div>
                                
                                <!-- Tingkat Prestasi -->
                                <div>
                                    <label for="tingkat" class="block text-sm font-medium text-gray-700">Tingkat Prestasi</label>
                                    <select id="tingkat" name="tingkat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                        <option value="">Pilih Tingkat Prestasi</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional" selected>Nasional</option>
                                        <option value="Internasional">Internasional</option>
                                    </select>
                                </div>
                                
                                <!-- Tahun -->
                                <div>
                                    <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                                    <input id="tahun" name="tahun" type="number" min="2000" max="2099" step="1" 
                                        value="2023" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                </div>
                                
                                <!-- Pencapaian -->
                                <div>
                                    <label for="pencapaian" class="block text-sm font-medium text-gray-700">Pencapaian (Juara)</label>
                                    <select id="pencapaian" name="pencapaian" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                        <option value="">Pilih Pencapaian</option>
                                        <option value="Juara 1" selected>Juara 1</option>
                                        <option value="Juara 2">Juara 2</option>
                                        <option value="Juara 3">Juara 3</option>
                                        <option value="Harapan 1">Harapan 1</option>
                                        <option value="Harapan 2">Harapan 2</option>
                                    </select>
                                </div>
                                
                                <!-- Deskripsi -->
                                <div>
                                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Prestasi</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">Memenangkan olimpiade matematika tingkat nasional yang diselenggarakan oleh Kementerian Pendidikan</textarea>
                                </div>
                                
                                <!-- Upload Sertifikat -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Sertifikat Prestasi</label>
                                    <div class="mt-1">
                                        <div class="mb-2 flex items-center">
                                            <a href="#" class="text-blue-600 hover:text-blue-800 flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v6a1 1 0 102 0V8z" clip-rule="evenodd" />
                                                </svg>
                                                Lihat Sertifikat Saat Ini
                                            </a>
                                        </div>
                                        <input id="sertifikat" name="sertifikat" type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                        <p class="text-xs text-gray-500 mt-1">Format: PDF (max 5MB)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                            <a href="dashboard" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition">
                                Batal
                            </a>
                            <button type="button" onclick="alert('Data berhasil disimpan!')" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Preview Foto -->
    <script>
        // Preview foto saat memilih file baru
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-foto').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Simulasi form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Data berhasil disimpan!');
        });
    </script>
</x-app-layout>