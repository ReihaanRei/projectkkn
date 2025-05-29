<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-primary">
            Tambah Data Siswa Berprestasi
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-base-100 shadow-lg rounded-xl p-8 space-y-10">
                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <h3 class="text-xl font-semibold text-gray-700 border-b border-gray-300 pb-2 mb-6">
                             Data Pribadi Siswa
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-control">
                                <label class="label"><span class="label-text">Nama Lengkap</span></label>
                                <input type="text" name="nama" class="input input-bordered w-full" required />
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Nomor Induk Siswa (NIS)</span></label>
                                <input type="text" name="nis" class="input input-bordered w-full" required />
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Jenis Kelamin</span></label>
                                <select name="jenis_kelamin" class="select select-bordered w-full" required>
                                    <option disabled selected>Pilih</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Kelas</span></label>
                                <select name="kelas" class="select select-bordered w-full" required>
                                    <option disabled selected>Pilih</option>
                                    @foreach (['X IPA 1','X IPA 2','XI IPA 1','XI IPA 2','XII IPA 1','XII IPA 2','X IPS 1','XI IPS 1','XII IPS 1'] as $kelas)
                                        <option value="{{ $kelas }}">{{ $kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-control md:col-span-2">
                                <label class="label"><span class="label-text">Foto Siswa</span></label>
                                <input type="file" name="foto" class="file-input file-input-bordered w-full" accept="image/*" />
                            </div>
                        </div>
                    </div>

                    <!-- Bagian: Data Prestasi -->
                    <div>
                        <h3 class="text-xl mt-6 font-semibold text-gray-700 border-b border-gray-300 pb-2 mb-6">
                             Data Prestasi
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-control">
                                <label class="label"><span class="label-text">Nama Prestasi</span></label>
                                <input type="text" name="prestasi" class="input input-bordered w-full" required />
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Tingkat Prestasi</span></label>
                                <select name="tingkat" class="select select-bordered w-full" required>
                                    <option disabled selected>Pilih</option>
                                    @foreach (['Sekolah', 'Kecamatan', 'Kabupaten/Kota', 'Provinsi', 'Nasional', 'Internasional'] as $tingkat)
                                        <option value="{{ $tingkat }}">{{ $tingkat }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Tahun</span></label>
                                <input type="number" name="tahun" min="2000" max="2099" class="input input-bordered w-full" required />
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text">Pencapaian</span></label>
                                <select name="pencapaian" class="select select-bordered w-full" required>
                                    <option disabled selected>Pilih</option>
                                    @foreach (['Juara 1','Juara 2','Juara 3','Harapan 1','Harapan 2','Finalis','Peserta','Lainnya'] as $capaian)
                                        <option value="{{ $capaian }}">{{ $capaian }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-control md:col-span-2">
                                <label class="label"><span class="label-text">Deskripsi Prestasi</span></label>
                                <textarea name="deskripsi" rows="3" class="textarea textarea-bordered w-full" placeholder="Tuliskan deskripsi singkat..."></textarea>
                            </div>

                            <div class="form-control md:col-span-2">
                                <label class="label"><span class="label-text">Upload Sertifikat (Opsional)</span></label>
                                <input type="file" name="sertifikat" class="file-input file-input-bordered w-full" />
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 flex justify-end gap-4 border-t border-gray-300">
                        <a href="/dashboard" class="btn btn-outline btn-error">Batal</a>
                        <button type="submit" class="btn btn-primary px-6">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
