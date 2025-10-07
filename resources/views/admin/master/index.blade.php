<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Master
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <button id="openModal" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    + Tambah Data
                </button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="datatable" class="min-w-full divide-y divide-gray-200 table-auto text-sm text-left text-gray-600 nowrap">
                        <thead class="bg-gray-100 text-xs text-gray-700 uppercase tracking-wider">
                            <tr>
                                <th class="px-4 py-2">NO</th>
                                <th class="px-4 py-2">KODE KLIEN</th>
                                <th class="px-4 py-2">NAMA PEMILIK (OWNER)</th>
                                <th class="px-4 py-2">AKUN TOKO</th>
                                <th class="px-4 py-2">LINK UNDANGAN</th>
                                <th class="px-4 py-2">STATUS</th>
                                <th class="px-4 py-2">NAMA</th>
                                <th class="px-4 py-2">NAMA TOKO</th>
                                <th class="px-4 py-2">KATEGORI</th>
                                <th class="px-4 py-2">WA</th>
                                <th class="px-4 py-2">MENU</th>
                                <th class="px-4 py-2">HADIR/TIDAK</th>
                                <th class="px-4 py-2">KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php
                                $idx = 1;
                            @endphp
                            @foreach($data as $key)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $idx++ }}.</td>
                                    <td class="px-4 py-2">{{ $key->kode_klien }}</td>
                                    <td class="px-4 py-2">{{ $key->nama_pemilik_owner }}</td>
                                    <td class="px-4 py-2">{{ $key->akun_toko }}</td>
                                    <td class="px-4 py-2">{{ url($key->link) }}</td>
                                    <td class="px-4 py-2">
                                        @if($key->status != '')
                                            <span class="text-green-600 font-semibold">Sudah Feedback</span>
                                        @else
                                            <span class="text-red-600 font-semibold">Belum Feedback</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">{{ $key->nama ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->nama_toko ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->kategori ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->nomor_wa ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->menu ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->status ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $key->keterangan ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div id="modalForm" class="fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Tambah Data</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <form action="{{ route('master.post-create') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium">Kode Klien</label>
                    <input type="text" name="kode_klien" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">ERM</label>
                    <input type="text" name="erm" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">RM</label>
                    <input type="text" name="rm" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" @if(Auth::user()->name != 'ADMIN') value="{{ Auth::user()->name }}" readonly @endif/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">DP</label>
                    <input type="text" name="dp" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Kota</label>
                    <input type="text" name="kota" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Akun Toko</label>
                    <input type="text" name="akun_toko" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Nama Pemilik (Pendaftaran)</label>
                    <input type="text" name="nama_pemilik_pendaftaran" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Nama Pemilik (Owner)</label>
                    <input type="text" name="nama_pemilik_owner" required autocomplete="off" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" />
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModal2" class="px-4 py-2 bg-gray-300 rounded mr-2">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />

	    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif

        <script>
            $(document).ready(function() {
                $('#datatable').DataTable({
                    scrollX:true,
                    pageLength:50,
                    responsive: true,
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        paginate: {
                            first: "Pertama",
                            last: "Terakhir",
                            next: "→",
                            previous: "←"
                        },
                        zeroRecords: "Data tidak ditemukan"
                    }
                });

                $('#openModal').click(function () {
                    $('#modalForm').removeClass('hidden');
                });

                $('#closeModal, #closeModal2').click(function () {
                    $('#modalForm').addClass('hidden');
                });
            });
        </script>
    @endpush

</x-app-layout>
