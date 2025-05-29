<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Siswa Berprestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">

                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="card-title border-b pb-2 mb-6 font-semibold text-lg">Data Pribadi Siswa</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

                            <div>
                                <label for="nama" class="label">
                                    <span class="label-text">Nama Lengkap</span>
                                </label>
                                <input type="text" id="nama" name="nama" value="Andi Wijaya" required
                                    class="input input-bordered w-full" />
                            </div>

                            <div>
                                <label for="nis" class="label">
                                    <span class="label-text">Nomor Induk Siswa (NIS)</span>
                                </label>
                                <input type="text" id="nis" name="nis" value="2023001" required
                                    class="input input-bordered w-full" />
                            </div>

                            <div>
                                <label for="jenis_kelamin" class="label">
                                    <span class="label-text">Jenis Kelamin</span>
                                </label>
                                <select id="jenis_kelamin" name="jenis_kelamin" required
                                    class="select select-bordered w-full">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L" selected>Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label for="kelas" class="label">
                                    <span class="label-text">Kelas</span>
                                </label>
                                <select id="kelas" name="kelas" required class="select select-bordered w-full">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X IPA 1">X IPA 1</option>
                                    <option value="X IPA 2">X IPA 2</option>
                                    <option value="XI IPA 1">XI IPA 1</option>
                                    <option value="XI IPA 2" selected>XI IPA 2</option>
                                    <option value="XII IPA 1">XII IPA 1</option>
                                    <option value="XII IPA 2">XII IPA 2</option>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="label">
                                    <span class="label-text">Foto Siswa</span>
                                </label>
                                <div class="flex items-center space-x-4">
                                    <div class="avatar m-4">
                                        <div
                                            class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                            <img id="preview-foto" src="https://randomuser.me/api/portraits/boys/1.jpg"
                                                alt="Foto Siswa" />
                                        </div>
                                    </div>
                                    <div>
                                        <label for="foto" class="btn btn-sm btn-outline cursor-pointer">Upload
                                            Foto</label>
                                        <input type="file" id="foto" name="foto" accept="image/*"
                                            class="hidden" />
                                        <p class="text-xs mt-1">Max size 2MB</p>
                                        <p class="text-xs mt-1 text-gray-500">Foto saat ini: andi-wijaya.jpg</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Prestasi -->
                        <h3 class="card-title border-b pb-2 mb-6 font-semibold text-lg">Data Prestasi</h3>

                        <div class="grid grid-cols-1 gap-6 mb-8">

                            <div>
                                <label for="prestasi" class="label">
                                    <span class="label-text">Nama Prestasi</span>
                                </label>
                                <input type="text" id="prestasi" name="prestasi"
                                    value="Juara 1 Olimpiade Matematika" required class="input input-bordered w-full" />
                            </div>

                            <div>
                                <label for="tingkat" class="label">
                                    <span class="label-text">Tingkat Prestasi</span>
                                </label>
                                <select id="tingkat" name="tingkat" required class="select select-bordered w-full">
                                    <option value="">Pilih Tingkat Prestasi</option>
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Kecamatan">Kecamatan</option>
                                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional" selected>Nasional</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                            </div>

                            <div>
                                <label for="tahun" class="label">
                                    <span class="label-text">Tahun</span>
                                </label>
                                <input type="number" id="tahun" name="tahun" min="2000" max="2099"
                                    step="1" value="2023" required class="input input-bordered w-full" />
                            </div>

                            <div>
                                <label for="pencapaian" class="label">
                                    <span class="label-text">Pencapaian (Juara)</span>
                                </label>
                                <select id="pencapaian" name="pencapaian" required
                                    class="select select-bordered w-full">
                                    <option value="">Pilih Pencapaian</option>
                                    <option value="Juara 1" selected>Juara 1</option>
                                    <option value="Juara 2">Juara 2</option>
                                    <option value="Juara 3">Juara 3</option>
                                    <option value="Harapan 1">Harapan 1</option>
                                    <option value="Harapan 2">Harapan 2</option>
                                </select>
                            </div>

                            <div>
                                <label for="deskripsi" class="label">
                                    <span class="label-text">Deskripsi Prestasi</span>
                                </label>
                                <textarea id="deskripsi" name="deskripsi" rows="3" class="textarea textarea-bordered w-full">Memenangkan olimpiade matematika tingkat nasional yang diselenggarakan oleh Kementerian Pendidikan</textarea>
                            </div>

                            <div>
                                <label class="label">
                                    <span class="label-text">Sertifikat Prestasi</span>
                                </label>
                                <a href="{{ asset('storage/' . $siswa->sertifikat) }}"
                                    class="link link-primary flex items-center mb-2" target="_blank">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v6a1 1 0 102 0V8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Lihat Sertifikat Saat Ini
                                </a>
                                <input type="file" id="sertifikat" name="sertifikat" accept="application/pdf"
                                    class="file-input file-input-bordered w-full max-w-xs" />
                                <p class="text-xs mt-1 text-gray-500">Format: PDF (max 5MB)</p>
                            </div>

                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-4 border-t pt-4">
                            <a href= "{{ route('dashboard') }}" class="btn btn-outline btn-error">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Script Preview Foto -->
    <script>
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-foto').src = e.target.result;
            }
            reader.readAsDataURL(file);
        });

        // Contoh alert simpan data (optional)
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Data berhasil disimpan!');
        });
    </script>

</x-app-layout>
