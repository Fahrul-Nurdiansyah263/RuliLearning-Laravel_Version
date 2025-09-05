<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat dengan Gemini AI</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-100 font-sans flex flex-col items-center justify-center min-h-screen p-4">
<div class="header">
  <a href="{{ route('dashboard') }}" class="absolute top-4 left-4 inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
  </svg>
</a>

  
 
</div>
    <div class="w-full max-w-3xl ">
        <div class="bg-white rounded-2xl shadow-xl flex flex-col h-[90vh]">
            <div class="p-4 border-b border-slate-200 bg-blue-600 rounded-t-2xl">
                <h1 class="text-3xl font-bold text-white text-center">🤖 Ruli AI</h1>
            </div>
            <div id="chatbox" class="flex-grow p-6 overflow-y-auto flex flex-col space-y-4">
                <div class="flex justify-start">
                    <div class="bg-slate-200 text-slate-800 py-2 px-4 rounded-2xl rounded-bl-none max-w-[80%] break-words">
                        Halo! Ada yang bisa saya bantu?
                    </div>
                </div>
            </div>

            <div class="p-4 border-t border-slate-200 bg-slate-50 mt-8">
                <form id="chat-form" class="flex items-center space-x-3">
                    @csrf
                    <input type="text" id="message-input" placeholder="Ketik pesan Anda..." autocomplete="off" class="flex-grow w-full px-4 py-3 border border-slate-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow">
                    
                    <button type="submit" id="send-button" class="bg-blue-600 text-white font-semibold rounded-xl px-5 py-3 hover:bg-blue-700 active:bg-blue-800 disabled:bg-slate-400 disabled:cursor-not-allowed transition-colors flex items-center justify-center">
                        <span id="button-text">Kirim</span>
                        <svg id="loading-spinner" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>
                 <div id="error-message" class="text-red-500 text-sm mt-2 text-center"></div>
            </div>

        </div>
        <p class="text-center text-xs text-slate-500 mt-4">
            RuliAI dapat membuat kesalahan, jadi periksa kembali responsnya
        </p>

    </div>
    <script>
        const chatbox = document.getElementById('chatbox');
        const chatForm = document.getElementById('chat-form');
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const buttonText = document.getElementById('button-text');
        const loadingSpinner = document.getElementById('loading-spinner');
        const errorMessageDiv = document.getElementById('error-message');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function addMessage(message, sender) {
            const messageRow = document.createElement('div');
            messageRow.classList.add('flex', sender === 'user' ? 'justify-end' : 'justify-start');

            const messageElement = document.createElement('div');
            messageElement.classList.add('py-2', 'px-4', 'rounded-2xl', 'max-w-[80%]', 'break-words');

            if (sender === 'user') {
                messageElement.classList.add('bg-blue-500', 'text-white', 'rounded-br-none');
            } else {
                messageElement.classList.add('bg-slate-200', 'text-slate-800', 'rounded-bl-none');
            }
            
            messageElement.innerHTML = message.replace(/\n/g, '<br>');
            
            messageRow.appendChild(messageElement);
            chatbox.appendChild(messageRow);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function setLoading(isLoading) {
            sendButton.disabled = isLoading;
            if (isLoading) {
                buttonText.classList.add('hidden');
                loadingSpinner.classList.remove('hidden');
            } else {
                buttonText.classList.remove('hidden');
                loadingSpinner.classList.add('hidden');
            }
        }

        chatForm.addEventListener('submit', async function(event) {
            event.preventDefault();

            const userMessage = messageInput.value.trim();
            if (!userMessage) return;

            addMessage(userMessage, 'user');
            messageInput.value = '';
            setLoading(true);
            errorMessageDiv.textContent = '';

            try {
                const response = await fetch("{{ route('chat.send') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ message: userMessage })
                });

                const data = await response.json();

                if (response.ok) {
                    addMessage(data.reply, 'bot');
                } else {
                    const errorText = data.error || `Gagal mendapatkan respons (Status: ${response.status})`;
                    errorMessageDiv.textContent = `Error: ${errorText}`;
                    console.error('Server Error:', data);
                }

            } catch (error) {
                const errorText = 'Tidak dapat terhubung ke server.';
                errorMessageDiv.textContent = `Error: ${errorText}`;
                console.error('Fetch Error:', error);
            } finally {
                setLoading(false);
                messageInput.focus();
            }
        });
    </script>

</body>
</html>