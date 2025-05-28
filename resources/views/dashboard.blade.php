<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Data Siswa Berprestasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 shadow-xl rounded-box p-6">

                <div class="mb-6 flex justify-between items-center">
                    <a href="/siswa" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Tambah Siswa
                    </a>
                </div>

                <div class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                    <input type="text" placeholder="Cari nama siswa..."
                        class="input input-bordered w-full col-span-1 md:col-span-3" />
                    <select class="select select-bordered w-full">
                        <option disabled selected>Filter Tingkat</option>
                        <option>Sekolah</option>
                        <option>Kecamatan</option>
                        <option>Kabupaten</option>
                        <option>Provinsi</option>
                        <option>Nasional</option>
                        <option>Internasional</option>
                    </select>
                </div>

                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <thead class="bg-base-200">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Prestasi</th>
                                <th>Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Siswa 1 -->
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar">
                                            <div class="w-10 rounded-full">
                                                <img src="https://randomuser.me/api/portraits/boys/1.jpg" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold">Andi Wijaya</div>
                                            <div class="text-sm opacity-50">XII IPA 1 | 2023</div>
                                        </div>
                                    </div>
                                </td>
                                <td>XII IPA 1</td>
                                <td>
                                    <div class="font-semibold">Juara 1 Olimpiade Matematika</div>
                                    <div class="text-sm text-gray-500">Nasional</div>
                                </td>
                                <td>
                                    <a href="/certificates/sample.pdf" target="_blank"
                                        class="btn btn-sm btn-outline btn-info">
                                        Lihat Sertifikat
                                    </a>
                                </td>
                                <td>
                                    <div class="flex space-x-1">
                                        <a href="/siswaedit" class="btn btn-sm btn-outline btn-warning">
                                            Edit
                                        </a>
                                        <button class="btn btn-sm btn-outline btn-error">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Siswa 2 -->
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar">
                                            <div class="w-10 rounded-full">
                                                <img src="https://randomuser.me/api/portraits/girls/2.jpg" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold">Budi Lestari</div>
                                            <div class="text-sm opacity-50">XI IPS 2 | 2022</div>
                                        </div>
                                    </div>
                                </td>
                                <td>XI IPS 2</td>
                                <td>
                                    <div class="font-semibold">Juara 2 Lomba Debat Bahasa Inggris</div>
                                    <div class="text-sm text-gray-500">Provinsi</div>
                                </td>
                                <td><span class="text-gray-400 italic">Belum diupload</span></td>
                                <td>
                                    <div class="flex space-x-1">
                                        <a href="#" class="btn btn-sm btn-outline btn-warning">Edit</a>
                                        <button class="btn btn-sm btn-outline btn-error">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex flex-col items-center justify-center">
                    <div class="text-sm text-gray-500 text-center">
                        Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">2</span> dari
                        <span class="font-medium">5</span> entri
                    </div>
                    <div class="mt-2 join">
                        <button class="join-item btn">«</button>
                        <button class="join-item btn btn-active">1</button>
                        <button class="join-item btn">2</button>
                        <button class="join-item btn btn-disabled">...</button>
                        <button class="join-item btn">99</button>
                        <button class="join-item btn">100</button>
                        <button class="join-item btn">»</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
