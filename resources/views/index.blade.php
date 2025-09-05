<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    
 <nav class="sticky top-0 z-40 bg-white shadow-md">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">

      <div class="flex-shrink-0">
        <a  class="text-xl font-bold text-blue-600">
          RuliLearning
        </a>
        <a href="#Materi" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 transition-colors hover:text-blue-600">
          Materi
        </a>
      </div>

      <div class="hidden md:flex md:items-center md:space-x-6">
        
        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 transition-colors hover:text-blue-600">
          Masuk
        </a>
        <a href="{{ route('register') }}" class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-700">
          Daftar
        </a>
      </div>

      <div class="flex md:hidden">
        <button id="mobileMenuBtn" class="inline-flex items-center justify-center rounded-md p-2 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
          <span class="sr-only">Buka menu</span>
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path id="mobileMenuIconOpen" class="block" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            <path id="mobileMenuIconClose" class="hidden" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <div id="mobileMenu" class="hidden md:hidden">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#Materi" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Materi</a>
      <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Masuk</a>
      <a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-100">Daftar</a>
    </div>
  </div>
</nav>

  <main>
    <section class="py-20 md:py-40" data-aos="fade-down" data-aos-duration="1000">
        <div class="container mx-auto flex flex-col items-center px-4 text-center sm:px-6">
            <h1 class="text-3xl font-bold leading-tight md:text-6xl mb-4 font-poppins">
            Belajar Lebih Cerdas,
            <span class="block md:inline">Bukan Lebih Keras.</span>
            </h1>
            <p class="max-w-3xl text-lg md:text-xl font-inter mb-8">
            Ubah konsep abstrak menjadi visual yang nyata.
            </p>
            <a href="#Materi" class="inline-block rounded-full bg-blue-600 px-6 py-3 font-bold text-white transition duration-300 hover:bg-blue-700 md:px-8">
            Mulai belajar sekarang
            </a>
        </div>
    </section>

    <section class="bg-white py-16" data-aos="fade-up" data-aos-duration="1000">
      <div class="container mx-auto px-6">
        <h2 class="mb-10 text-center text-3xl font-bold text-gray-800">
          Mengapa Memilih RuliLearning?
        </h2>
        <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-2 lg:grid-cols-4">
          <div class="rounded-lg p-6 transition duration-300 hover:shadow-lg" data-aos="fade-left" data-aos-duration="1000">
            <div class="mb-4 text-5xl text-blue-500">🎓</div>
            <h3 class="mb-2 text-xl font-bold">Instruktur Ahli</h3>
            <p class="text-gray-600">
              Belajar langsung dari para profesional yang berpengalaman di bidangnya.
            </p>
          </div>
          <div class="rounded-lg p-6 transition duration-300 hover:shadow-lg" data-aos="fade-left" data-aos-duration="1500">
            <div class="mb-4 text-5xl text-blue-500">🤖</div>
            <h3 class="mb-2 text-xl font-bold">Asisten AI Chatbot</h3>
            <p class="text-gray-600">
              Dapatkan jawaban instan dan bantuan belajar kapan saja melalui asisten AI kami.
            </p>
          </div>
          <div class="rounded-lg p-6 transition duration-300 hover:shadow-lg" data-aos="fade-left" data-aos-duration="2000">
            <div class="mb-4 text-5xl text-blue-500">💻</div>
            <h3 class="mb-2 text-xl font-bold">Akses Fleksibel</h3>
            <p class="text-gray-600">
              Belajar kapan saja dan di mana saja sesuai dengan kecepatan Anda sendiri.
            </p>
          </div>
          <div class="rounded-lg p-6 transition duration-300 hover:shadow-lg" data-aos="fade-left" data-aos-duration="2500">
            <div class="mb-4 text-5xl text-blue-500">📱</div>
            <h3 class="mb-2 text-xl font-bold">Pembelajaran AR Interaktif</h3>
            <p class="text-gray-600">
              Visualisasikan konsep sulit menjadi objek 3D langsung di dunia nyata.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="Materi" class="bg-gray-50 py-16">
      <div class="container mx-auto px-6">
        <h2 class="mb-10 text-center text-3xl font-bold text-gray-800">
          Materi Unggulan
        </h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
          @foreach ($materis as $materi)
          <div class="flex transform flex-col overflow-hidden rounded-lg bg-white shadow-md transition duration-300 hover:-translate-y-2 hover:shadow-xl">
            <a href="{{ route('materi.show', $materi->id) }}">
              <img src="{{ asset('storage/' . $materi->gambar) }}" alt="Thumbnail {{ $materi->judul }}" class="h-48 w-full object-cover">
            </a>
            <div class="flex flex-grow flex-col p-4">
              <div class="mb-3">
                @if ($materi->is_premium)
                <span class="inline-block rounded-full bg-amber-100 px-3 py-1 text-sm font-semibold text-amber-800">
                  Premium
                </span>
                @else
                <span class="inline-block rounded-full bg-emerald-100 px-3 py-1 text-sm font-semibold text-emerald-800">
                  Gratis
                </span>
                @endif
              </div>
              <a href="{{ route('materi.show', $materi->id) }}" class="hover:text-blue-600">
                <h3 class="text-lg font-bold">{{ $materi->judul }}</h3>
                <p class="">{!! $materi->deskripsi !!}</p>
              </a>
              @if($materi->is_premium)
              <span class="mt-2 text-lg font-bold text-blue-600">
                Rp {{ number_format($materi->harga, 0, ',', '.') }}
              </span>
              @endif

              <div class="mt-auto pt-4">
                <a href="{{ route('materi.show', $materi->id) }}" class="block w-full rounded-lg bg-blue-600 px-4 py-3 text-center text-sm font-bold text-white transition hover:bg-blue-700">
                  📖 Pelajari Sekarang
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-gray-800 text-gray-300">
  <div class="container mx-auto flex flex-col items-center px-6 py-10 text-center">
    <h3 class="text-xl font-bold text-white">RuliLearning</h3>
    <div class="mt-6 flex flex-wrap justify-center space-x-6">
      <a href="#" aria-label="LinkedIn" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
        </svg>
      </a>
      <a href="#" aria-label="Twitter" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.617l-5.21-6.817-6.044 6.817h-3.308l7.73-8.805-7.994-10.69h6.772l4.643 6.225 5.21-6.225zm-2.92 18.25h1.644l-9.822-13.066h-1.644l9.822 13.066z" />
        </svg>
      </a>
      <a href="#" aria-label="Instagram" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.584.069-4.85c.149-3.225 1.664-4.771 4.919 4.919 1.266-.058 1.644-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.059-1.281.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.44-1.441-1.44z" />
        </svg>
      </a>
      <a href="#" aria-label="Facebook" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      <a href="#" aria-label="YouTube" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
        </svg>
      </a>
      <a href="#" aria-label="GitHub" class="hover:text-white">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.91 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
      </a>
    </div>
    <div class="mt-8 border-t border-gray-700 pt-6">
      <p class="text-sm">
        &copy; 2025 RuliLearning. All Rights Reserved.
      </p>
    </div>
  </div>
</footer>

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

    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenuBtn) {
      mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>