<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Isi: {{ $kategoriMateri->nama_kategori }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="container mx-auto p-4 sm:p-6 lg:p-8 max-w-4xl">

        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 border-b-2 border-gray-200 pb-3">
                {{ $kategoriMateri->nama_kategori }}
            </h1>
            <p class="text-gray-600 mt-2">
                Berikut adalah daftar isi yang tersedia untuk materi ini.
            </p>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <h3 class="text-xl font-semibold p-4 border-b border-gray-200 bg-gray-50">
                Daftar Isi:
            </h3>
            
            <ul class="divide-y divide-gray-200">
                @forelse ($isiMateris as $item)
                    <li>
                        <a href="{{ route('materi.content.show', $item->id) }}" class="flex items-center p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                  
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-500 text-white rounded-full font-bold text-sm">
                                {{ $item->urutan }}
                            </span>
                            <span class="ml-4 font-medium text-gray-700">
                                {{ $item->judul }}
                            </span>
                        </a>
                    </li>
                @empty
                    <li class="p-4 text-center text-gray-500 italic">
                        Belum ada isi untuk materi ini.
                    </li>
                @endforelse
            </ul>
        </div>

        <div class="mt-8">
            <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline font-medium">
                &laquo; Kembali ke Daftar Materi
            </a>
        </div>
        
    </div>
      <div class="fixed bottom-5 right-5 z-50 flex flex-col items-end">
    <div id="chat-window" class="absolute bottom-full right-0 mb-3 hidden w-56 rounded-lg bg-white shadow-xl">
      <button id="chat-close-btn" class="absolute -right-2 -top-2 flex h-6 w-6 items-center justify-center rounded-full bg-gray-700 text-white hover:bg-gray-900 focus:outline-none">
        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <div class="p-2.5">
        <p class="text-xs text-gray-700">Hi, aku RuliAi</p>
        <a href="{{ route('chat.index') }}" class="text-sm font-bold text-blue-600 hover:underline">
          Coba sekarang! <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>

    <button id="chat-toggler" class="flex h-16 w-16 items-center justify-center rounded-full text-4xl text-white shadow-lg transition-transform duration-300 hover:scale-110">
      🤖
    </button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const chatToggler = document.getElementById('chat-toggler');
      const chatWindow = document.getElementById('chat-window');
      const chatCloseBtn = document.getElementById('chat-close-btn');

      if (chatToggler) {
        chatToggler.addEventListener('click', function() {
          chatWindow.classList.toggle('hidden');
        });
      }
      if (chatCloseBtn) {
        chatCloseBtn.addEventListener('click', function() {
          chatWindow.classList.add('hidden');
        });
      }
    });
    </script>
</body>
</html>