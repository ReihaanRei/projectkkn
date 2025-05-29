@props(['siswas'])

<main class="w-full max-w-7xl bg-base-100 shadow-xl rounded-box p-6 mx-auto mt-6">
    <h2 class="text-xl font-semibold text-primary mb-6">Data Siswa Berprestasi</h2>

    <div class="overflow-x-auto rounded-lg">
        <table class="table table-zebra w-full">
            <thead class="bg-base-200">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Prestasi</th>
                    <th>Sertifikat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $index => $siswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="{{ $siswa->foto ? asset('storage/'.$siswa->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($siswa->nama) }}" alt="Foto {{ $siswa->nama }}" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{ $siswa->nama }}</div>
                                    <div class="text-sm text-gray-500">{{ $siswa->kelas }} | {{ $siswa->tahun }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>
                            <div class="font-semibold">{{ $siswa->prestasi }}</div>
                            <div class="text-sm text-gray-500">{{ $siswa->tingkat }}</div>
                        </td>
                        <td>
                            @if ($siswa->sertifikat)
                                <a href="{{ asset('storage/' . $siswa->sertifikat) }}" target="_blank" class="btn btn-sm btn-outline btn-info">
                                    Lihat Sertifikat
                                </a>
                            @else
                                <span class="italic text-gray-400">Belum diupload</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center italic text-gray-500">Tidak ada data siswa berprestasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
