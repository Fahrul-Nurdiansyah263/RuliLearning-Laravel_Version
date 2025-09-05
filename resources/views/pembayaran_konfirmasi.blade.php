<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-100 font-sans flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg text-center w-full max-w-md mx-4">
        
        <h1 class="text-2xl font-bold text-gray-800">
            Konfirmasi Pesanan
        </h1>
        <div class="text-left my-6 space-y-4">
            <div class="flex justify-between items-center">
                <p class="text-gray-500">Materi</p>
                <p class="font-semibold text-gray-900">{{ $kategori->judul }}</p>
            </div>
            
            <hr>
            
            <div class="flex justify-between items-center">
                <p class="text-gray-500">Harga</p>
                <p class="font-semibold text-gray-900">Rp {{ number_format($kategori->harga, 0, ',', '.') }}</p>
            </div>
        </div>
        <form action="{{ route('pembayaran.process', $kategori->id) }}" method="POST">
            @csrf
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors">
                Bayar Sekarang
            </button>
        </form>

    </div>

</body>
</html>