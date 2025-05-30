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
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Tambah Siswa
                    </a>
                </div>

                <form method="GET" action="{{ route('siswa.index') }}"
                    class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Cari nama siswa..." class="input input-bordered input-sm w-full md:col-span-2" />
                    <div class="flex space-x-2 justify-end items-center md:col-span-2">
                        <select name="filter_tingkat" class="select select-bordered input-sm w-48">
                            <option disabled {{ request('filter_tingkat') ? '' : 'selected' }}>Filter Tingkat</option>
                            @foreach (['Sekolah', 'Kecamatan', 'Kabupaten', 'Provinsi', 'Nasional', 'Internasional'] as $tingkat)
                                <option value="{{ $tingkat }}"
                                    {{ request('filter_tingkat') == $tingkat ? 'selected' : '' }}>
                                    {{ $tingkat }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-outline btn-secondary btn-sm">Reset</a>
                    </div>
                </form>


                <div class="overflow-x-auto">
                    <table class="table table-zebra w-full">
                        <thead class="bg-base-200">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jurusan</th>
                                <th>Prestasi</th>
                                <th>Sertifikat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswas as $index => $siswa)
                                <tr>
                                    <td>{{ $siswas->firstItem() + $index }}</td>
                                    <td>
                                        <div class="flex items-center space-x-3">
                                            <div class="avatar">
                                                <div class="w-10 rounded-full">
                                                    <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($siswa->nama) }}"
                                                        alt="Foto {{ $siswa->nama }}" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">{{ $siswa->nama }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $siswa->jurusan }}</td>
                                    <td>
                                        <div class="font-semibold">{{ $siswa->prestasi }}</div>
                                        <div class="text-sm text-gray-500">{{ $siswa->tingkat }} | {{ $siswa->tahun }}</div>
                                    </td>
                                    <td>
                                        @if ($siswa->sertifikat)
                                            <a href="{{ asset('storage/' . $siswa->sertifikat) }}" target="_blank"
                                                class="btn btn-sm btn-outline btn-info">
                                                Lihat Sertifikat
                                            </a>
                                        @else
                                            <span class="text-gray-400 italic">Belum diupload</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="flex space-x-1">
                                            <a href="{{ route('siswa.edit', $siswa->id) }}"
                                                class="btn btn-sm btn-outline btn-warning">Edit</a>
                                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin hapus data?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-outline btn-error">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-gray-500 italic">Data siswa tidak
                                        ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex flex-col items-center justify-center">
                    <div class="text-sm text-gray-500 text-center">
                        Menampilkan <span class="font-medium">{{ $siswas->firstItem() ?? 0 }}</span> sampai
                        <span class="font-medium">{{ $siswas->lastItem() ?? 0 }}</span> dari
                        <span class="font-medium">{{ $siswas->total() }}</span> entri
                    </div>
                    <div class="mt-2">
                        {{ $siswas->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
