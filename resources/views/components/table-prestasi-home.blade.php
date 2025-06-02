@props(['siswas'])

<main class="w-full max-w-full bg-base-100 shadow-xl rounded-box px-8 md:px-6 py-6 mx-auto mt-6">
    <h2 class="text-xl font-semibold text-primary mb-6 text-center md:text-left">Data Siswa Berprestasi</h2>

    <div class="w-full overflow-x-auto rounded-lg">
        <table class="table table-zebra w-full text-sm md:text-base ">
            <thead class="bg-base-200 text-gray-700 text-xs md:text-sm">
                <tr>
                    <th class="whitespace-nowrap">No</th>
                    <th class="whitespace-nowrap">Nama Siswa</th>
                    <th class="whitespace-nowrap">Jurusan</th>
                    <th class="whitespace-nowrap">Prestasi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $index => $siswa)
                    <tr>
                        <td>{{ $siswas->firstItem() + $index }}</td>
                        <td class="min-w-[360px]">
                            <div class="flex items-center gap-6">
                                <div class="avatar">
                                    <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                        <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($siswa->nama) }}"
                                            alt="Foto {{ $siswa->nama }}" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{ $siswa->nama }}</div> 
                                </div>
                            </div>
                        </td>
                        <td class="whitespace-nowrap">{{ $siswa->jurusan }}</td>
                        <td>
                            <div class="font-semibold">{{ $siswa->prestasi }}</div>
                            <div class="text-sm text-gray-500">{{ $siswa->tingkat }} | {{ $siswa->tahun }}</div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center italic text-gray-500">Tidak ada data siswa berprestasi.
                        </td>
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
