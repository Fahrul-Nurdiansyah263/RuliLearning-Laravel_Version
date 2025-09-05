{{-- Misalkan Anda menggunakan layout utama --}}
<x-app-layout>
<div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900">
                                        <h4 class="text-xl font-bold mb-4">Materi yang Anda Miliki</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                            @forelse ($kategoriSudahBeli as $kategori)
                                                <div class="bg-white rounded-lg shadow-md border border-gray-200 flex flex-col">
                                                    @if($kategori->gambar)
                                                        <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="{{ $kategori->judul }}" class="rounded-t-lg h-40 w-full object-cover">
                                                    @endif
                                                    <div class="p-5 flex-grow flex flex-col">
                                                        <h5 class="text-lg font-bold tracking-tight text-gray-900">{{ $kategori->judul }}</h5>
                                                        <p class="mt-2 font-normal text-gray-600 flex-grow">{!! $kategori->deskripsi !!}</p>
                                                        <a href="{{ route('materi.show', $kategori) }}" class="mt-4 inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                                            Pelajari Sekarang
                                                        </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-gray-500 md:col-span-3">Anda belum memiliki materi.</p>
                                            @endforelse
                                        </div>

                                        <div class="border-t border-gray-200 my-8"></div>

                                        <h4 class="text-xl font-bold mb-4">Materi Tersedia Lainnya</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                            @forelse ($kategoriBelumBeli as $kategori)
                                                <div class="bg-white rounded-lg shadow-md border border-gray-200 flex flex-col">
                                                    @if($kategori->gambar)
                                                        <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="{{ $kategori->judul }}" class="rounded-t-lg h-40 w-full object-cover">
                                                    @endif
                                                    <div class="p-5 flex-grow flex flex-col">
                                                        <h5 class="text-lg font-bold tracking-tight text-gray-900">{{ $kategori->judul }}</h5>
                                                        <p class="mt-2 font-normal text-gray-600 flex-grow"></p>
                                                        <a href="{{ route('pembayaran.show', $kategori->id) }}"
                                                            class="mt-4 inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700">
                                                            Beli (Rp {{ number_format($kategori->harga ?? 0) }})
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-green-600 font-semibold md:col-span-3">Luar biasa! Anda sudah memiliki semua materi yang tersedia.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
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

</x-app-layout>

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