<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $isiMateri->judul }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>

</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-4 sm:p-6 lg:p-8">
        <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6 sm:p-8">
            <header class="mb-6 flex justify-center">
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    {{ $isiMateri->judul }}
                </h1>
            </header>
            <div class="prose prose-lg max-w-none text-gray-800 text-justify">
    {!! $isiMateri->isi !!}
</div>

@if($isiMateri->gambar)
    <figure class="mb-8 flex flex-col items-center py-8">
        <h1 class="text-center text-xl font-semibold mb-4 text-gray-700">
            Silahkan pindai untuk melihat secara 3D
        </h1>

        <img src="{{ asset('storage/' . $isiMateri->gambar) }}" alt="{{ $isiMateri->judul }}" class="h-auto max-w-xs rounded-lg shadow-lg">
    
    </figure>
@endif
            <hr class="my-8 border-gray-200">
            <footer>
                <a href="{{ route('materi.show', $isiMateri->kategori_id) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition duration-150 ease-in-out">
              
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    Kembali ke Daftar Isi
                </a>
            </footer>

        </article>
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