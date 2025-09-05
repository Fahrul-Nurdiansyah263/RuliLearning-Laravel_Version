<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembayaran</title>
    
    <script type="text/javascript"
            src="{{ config('midtrans.is_production') ? 'https://app.snap.midtrans.com/snap/snap.js' : 'https://app.sandbox.midtrans.com/snap/snap.js' }}"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
    
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 5rem; }
    </style>
</head>
<body>

    <h1>Membuka jendela pembayaran...</h1>
    <p>Jangan tutup halaman ini.</p>
    
    <button id="pay-button" style="display:none;">Bayar!</button>

    <script type="text/javascript">
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result){
          alert("Pembayaran Berhasil!"); 
          console.log(result);
          window.location.href = '/dashboard'; 
        },
        onPending: function(result){
          alert("Menunggu pembayaran Anda!"); 
          console.log(result);
          window.location.href = '/dashboard';
        },
        onError: function(result){
          alert("Pembayaran Gagal!"); 
          console.log(result);
          window.location.href = '/dashboard';
        },
        onClose: function(){
          alert('Anda menutup jendela pembayaran sebelum selesai.');
        }
      });
    </script>

</body>
</html>