<x-app-layout>
    {{-- Menggunakan slot 'header' untuk judul halaman --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- "Card" putih untuk membungkus tabel --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Riwayat Transaksi</h3>
                    
                    <div class="relative overflow-x-auto border rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">Order ID</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Kategori</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Harga</th>
                                    <th scope="col" class="px-6 py-3 font-medium">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($transaksiSukses as $trx)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 font-mono text-gray-900 whitespace-nowrap">#{{ $trx->order_id }}</td>
                                        <td class="px-6 py-4">{{ $trx->kategoriMateri->nama_kategori ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($trx->harga, 0, ',', '.') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $trx->created_at->format('d F Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                            Belum ada riwayat transaksi.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>