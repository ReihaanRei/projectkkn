@props(['siswas'])

<main class="w-full max-w-full bg-base-100 shadow-xl rounded-box px-8 md:px-6 py-6 mx-auto mt-6">
    <h2 class="text-xl font-semibold text-primary mb-6 text-center md:text-left">Data Siswa Berprestasi</h2>

    <div class="w-full overflow-x-auto rounded-lg">
        <table class="table table-zebra table-fixed w-max text-sm md:text-base">
            <thead class="bg-base-200 text-gray-700 text-xs md:text-sm">
                <tr>
                    <th class="w-[40px] text-center">No</th>
                    <th class="w-[300px]">Nama Siswa</th>
                    <th class="w-[200px]">Jurusan</th>
                    <th class="w-[300px]">Prestasi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $index => $siswa)
                    <tr>
                        <td class="text-center">{{ $siswas->firstItem() + $index }}</td>
                        <td class="truncate">
                            <div class="flex items-center gap-4">
                                <div class="avatar">
                                    <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                        <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($siswa->nama) }}"
                                            alt="Foto {{ $siswa->nama }}" />
                                    </div>
                                </div>
                                <div class="truncate">
                                    <div class="font-bold truncate">{{ $siswa->nama }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="whitespace-nowrap truncate">{{ $siswa->jurusan }}</td>
                        <td class="truncate">
                            <div class="font-semibold truncate">{{ $siswa->prestasi }}</div>
                            <div class="text-sm text-gray-500 whitespace-nowrap truncate">
                                {{ $siswa->tingkat }} | {{ $siswa->tahun }}
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center italic text-gray-500">Tidak ada data siswa berprestasi.</td>
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
</main>
