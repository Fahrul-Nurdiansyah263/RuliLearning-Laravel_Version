<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Berhasil</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { width: 90%; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { font-size: 24px; color: #4CAF50; }
        .content { margin-top: 20px; }
        .footer { margin-top: 20px; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Pembayaran Berhasil!</h1>
        <div class="content">
            <p>Halo, <strong>{{ $transaksi->user->name }}</strong>!</p>
            <p>Terima kasih telah melakukan pembayaran. Transaksi Anda telah kami konfirmasi.</p>
            
            <h3>Detail Transaksi:</h3>
            <ul>
                <li><strong>Order ID:</strong> {{ $transaksi->order_id }}</li>
                <li><strong>Materi:</strong> {{ $transaksi->kategori->judul }}</li>
                <li><strong>Total Pembayaran:</strong> Rp {{ number_format($transaksi->harga, 0, ',', '.') }}</li>
                <li><strong>Status:</strong> Berhasil</li>
            </ul>

            <p>Anda sekarang dapat mengakses materi yang telah Anda beli. Selamat belajar!</p>
        </div>
        <div class="footer">
            <p>Ini adalah email otomatis. Mohon untuk tidak membalas email ini.</p>
        </div>
    </div>
</body>
</html>