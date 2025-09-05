<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div 
                x-data="{ openTab: 1 }" 
                x-on:change-tab.window="openTab = $event.detail"
                class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
            >
                <div>
                    <div x-show="openTab === 1" class="p-6">
                        <h3 class="font-semibold text-2xl text-gray-800 mb-4">
                            Selamat Datang, {{ Auth::user()->name }}!
                        </h3>
                        <p class="text-gray-600">
                            Selamat belajar dan tingkatkan terus kemampuan Anda. 
                        </p>
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

