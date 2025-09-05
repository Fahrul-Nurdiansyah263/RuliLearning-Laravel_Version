<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function index()
    {
        return view('RuliAi.index');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = $request->input('message');
        
        $apiKey = env('GEMINI_API_KEY');
        $apiUrl = env('GEMINI_API_URL');

        if (!$apiKey || !$apiUrl){
            Log::error('Gemini API Key or URL is not configured.');
            return response()->json(['error' => 'Konfigurasi API tidak ditemukan.'], 500);
        }

        $payload = [
            'contents' => [
                'role' => 'user',
                'parts' => [
                    ['text' => $userMessage]
                ]
            ]
        ];

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($apiUrl .'?key=' . $apiKey, $payload);

            if ($response->successful()){
                $responseData = $response->json();
                $geminiText = data_get($responseData, 'candidates.0.content.parts.0.text', 'Maaf saya tidak bisa merespons saat ini.');
                return response()->json(['reply' => $geminiText]);
            }else {
                Log::error('Gemini API Error: ' .$response->status(). '-'. $response->body());
                return response()->json(['reply' => 'Maaf, terjadi kesalahan dari API.']);
            }
        }catch(\Exception $e){
            Log::error('Exception during Gemini API call: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan saat menghubungi AI.']);
        }
    }
}
