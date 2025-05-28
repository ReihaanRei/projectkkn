<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Siswa Berprestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Form Tambah Data -->
                    <form>
                        <!-- Bagian Data Pribadi -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4 pb-2 border-b border-gray-200">
                                Data Pribadi Siswa
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama Lengkap -->
                                <div>
                                    <x-input-label for="nama" :value="__('Nama Lengkap')" />
                                    <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" required autofocus />
                                </div>
                                
                                <!-- NIS -->
                                <div>
                                    <x-input-label for="nis" :value="__('Nomor Induk Siswa (NIS)')" />
                                    <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" required />
                                </div>
                                
                                <!-- Jenis Kelamin -->
                                <div>
                                    <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                
                                <!-- Kelas -->
                                <div>
                                    <x-input-label for="kelas" :value="__('Kelas')" />
                                    <select id="kelas" name="kelas" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="">Pilih Kelas</option>
                                        <option value="X IPA 1">X IPA 1</option>
                                        <option value="X IPA 2">X IPA 2</option>
                                        <option value="XI IPA 1">XI IPA 1</option>
                                        <option value="XI IPA 2">XI IPA 2</option>
                                        <option value="XII IPA 1">XII IPA 1</option>
                                        <option value="XII IPA 2">XII IPA 2</option>
                                        <option value="X IPS 1">X IPS 1</option>
                                        <option value="XI IPS 1">XI IPS 1</option>
                                        <option value="XII IPS 1">XII IPS 1</option>
                                    </select>
                                </div>
                                
                                <!-- Upload Foto -->
                                <div class="md:col-span-2">
                                    <x-input-label for="foto" :value="__('Foto Siswa')" />
                                    <div class="mt-1 flex items-center">
                                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </span>
                                        <label for="foto" class="ml-5 cursor-pointer">
                                            <span class="rounded-md bg-white py-2 px-3 text-sm font-medium text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                Pilih Foto
                                            </span>
                                            <input id="foto" name="foto" type="file" class="sr-only" accept="image/*">
                                        </label>
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
                                    <x-input-label for="prestasi" :value="__('Nama Prestasi')" />
                                    <x-text-input id="prestasi" name="prestasi" type="text" class="mt-1 block w-full" required />
                                </div>
                                
                                <!-- Tingkat Prestasi -->
                                <div>
                                    <x-input-label for="tingkat" :value="__('Tingkat Prestasi')" />
                                    <select id="tingkat" name="tingkat" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="">Pilih Tingkat Prestasi</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Internasional">Internasional</option>
                                    </select>
                                </div>
                                
                                <!-- Tahun -->
                                <div>
                                    <x-input-label for="tahun" :value="__('Tahun')" />
                                    <x-text-input id="tahun" name="tahun" type="number" min="2000" max="2099" step="1" class="mt-1 block w-full" required />
                                </div>
                                
                                <!-- Pencapaian -->
                                <div>
                                    <x-input-label for="pencapaian" :value="__('Pencapaian (Juara)')" />
                                    <select id="pencapaian" name="pencapaian" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                        <option value="">Pilih Pencapaian</option>
                                        <option value="Juara 1">Juara 1</option>
                                        <option value="Juara 2">Juara 2</option>
                                        <option value="Juara 3">Juara 3</option>
                                        <option value="Harapan 1">Harapan 1</option>
                                        <option value="Harapan 2">Harapan 2</option>
                                        <option value="Peserta">Peserta</option>
                                        <option value="Finalis">Finalis</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                
                                <!-- Deskripsi -->
                                <div>
                                    <x-input-label for="deskripsi" :value="__('Deskripsi Prestasi')" />
                                    <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                </div>
                                
                                <!-- Upload Sertifikat -->
                                <div>
                                    <x-input-label for="sertifikat" :value="__('Upload Sertifikat (Opsional)')" />
                                    <div class="mt-1">
                                        <input id="sertifikat" name="sertifikat" type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                            <a href="dashboard" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                                Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>