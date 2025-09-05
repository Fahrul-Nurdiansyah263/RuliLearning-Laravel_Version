# 📚 RuliLearning 

RuliLearning adalah sebuah aplikasi **Learning Management System (LMS)** berbasis web yang dibangun menggunakan framework **Laravel**.  
Aplikasi ini dirancang untuk memudahkan pengguna dalam mengakses dan mempelajari berbagai materi pembelajaran, baik yang bersifat **gratis** maupun **berbayar (premium)**.

## ✨ Fitur Utama

### Untuk Pengguna
- Melihat daftar materi yang tersedia.
- Mengakses materi gratis tanpa batasan.
- Membeli atau membuka akses materi premium melalui sistem pembayaran terintegrasi (contoh: **Midtrans**).
- Mendapatkan pengalaman belajar yang interaktif melalui fitur dashboard dan tampilan yang responsif.

### Untuk Admin
- Mengelola daftar materi (**CRUD: Create, Read, Update, Delete**).
- Menentukan kategori materi serta status materi (gratis/premium).
- Melihat data pengguna dan aktivitas mereka.
- Mengelola konten melalui dashboard berbasis **Filament Admin** agar lebih mudah dan efisien.

---

## 🛠️ Teknologi yang Digunakan

| Komponen             | Teknologi                                   |
|----------------------|---------------------------------------------|
| **Framework**        | Laravel 11                                  |
| **Backend**          | Filament                                    |
| **FrontEnd**         | Blade + TailwindCSS + Livewire + AOS        |
| **Database**         | MySQL                                       |
| **Pembayaran**       | Midtrans                                    |
| **Notifikasi Email** | Mailtrap                                    |
| **ChatBot**          | Gemini API                                  |
| **Tools Pendukung**  | VSCode, Laragon, ChatGPT, Gemini            |

---

## 🚀 Tujuan

Dengan adanya aplikasi ini, **RuliLearning** diharapkan dapat menjadi solusi pembelajaran digital yang **praktis, fleksibel, dan terjangkau** bagi siapa saja yang ingin belajar secara mandiri maupun terstruktur.



LAMPIRAN

HomePage
<img width="1900" height="884" alt="image" src="https://github.com/user-attachments/assets/05287d80-d610-41ce-a15d-7c3d872bbce6" />
<img width="1897" height="907" alt="image" src="https://github.com/user-attachments/assets/1a4d0b26-ec67-41e8-ad10-0ca49c809720" />
<img width="1903" height="908" alt="image" src="https://github.com/user-attachments/assets/48b601bc-3123-418e-a5cf-81e05b317b8c" />

Login
<img width="1913" height="900" alt="image" src="https://github.com/user-attachments/assets/ea95d923-6988-4d29-8d67-64f77f4ad0cb" />
Register
<img width="1919" height="909" alt="image" src="https://github.com/user-attachments/assets/48d965ed-bcb4-4108-8e14-9911d7e10552" />
Jika User Lupa Password -> User bisa mereset password jika mereka lupa
<img width="1919" height="911" alt="image" src="https://github.com/user-attachments/assets/30507834-89d7-46ea-b21e-22a1c18ffaa7" />
Email forgot-password -> User Mendapatkan Email Jika User Lupa Password
<img width="1230" height="861" alt="image" src="https://github.com/user-attachments/assets/32226261-e8e4-4e36-9c15-9021f746396f" />

Dashboard User
<img width="1916" height="901" alt="image" src="https://github.com/user-attachments/assets/8096a9a2-0db5-4d5f-9c7a-fd92154b90f6" />
Materi -> Menampilkan Materi yang sudah di beli dan materi gratis
<img width="1898" height="906" alt="image" src="https://github.com/user-attachments/assets/f986e990-c371-404e-8706-3eabbb147b04" />
Isi Materi
<img width="1900" height="911" alt="image" src="https://github.com/user-attachments/assets/43fd0356-d0f7-43f6-9b0f-a8f6b5c238be" />
Hasil Scan -> Menampilkan 3d
![Gambar WhatsApp 2025-09-05 pukul 22 37 32_44be2372](https://github.com/user-attachments/assets/25dd4f3e-7cbc-4a24-99c5-8b8c931e01a0)
![Gambar WhatsApp 2025-09-05 pukul 22 37 33_353f439e](https://github.com/user-attachments/assets/635fb5ae-f1e9-46ac-a47b-7eb2dcc7d615)
Ruli Ai -> ChatBot
<img width="1919" height="908" alt="image" src="https://github.com/user-attachments/assets/d43bcc57-e80d-4c37-8a2c-2aaeb94e5200" />
User Membeli Materi
<img width="1916" height="897" alt="image" src="https://github.com/user-attachments/assets/41792ec6-c8d1-4141-a7b2-ebf60b229e01" />
Payment -> User Membayar
<img width="1919" height="899" alt="image" src="https://github.com/user-attachments/assets/5f7cbf6c-e0d4-459a-83b8-1d523bcce631" />
Profile -> User bisa merubah profile
<img width="1901" height="921" alt="image" src="https://github.com/user-attachments/assets/65452305-a07c-481c-9b13-6803e24abf3f" />
Riwayat Transaksi 
<img width="1917" height="901" alt="image" src="https://github.com/user-attachments/assets/63d9252f-cdad-4628-9179-b8da3a5b6cbf" />

Login Admin
<img width="1919" height="889" alt="image" src="https://github.com/user-attachments/assets/e39f938b-062e-4f8e-b907-9a52e2fdc6e1" />
Dashboard Admin
<img width="1919" height="894" alt="image" src="https://github.com/user-attachments/assets/fa2d8022-c5f6-48c2-9683-defd57044968" />
CRUD Admin
<img width="1919" height="905" alt="image" src="https://github.com/user-attachments/assets/1ea0ec06-d29c-4209-ac10-ee1cd1ee475f" />
CRUD User
<img width="1905" height="895" alt="image" src="https://github.com/user-attachments/assets/b13311fa-66ea-4854-bc6d-930f319a1835" />
CRUD Transaksi -> jika status pending = belum dibayar, jika status success maka sudah berhasil
<img width="1918" height="901" alt="image" src="https://github.com/user-attachments/assets/bf74a7a7-a3e8-412e-94b6-46e7b52b136f" />
CRUD Kategori Materi
<img width="1919" height="883" alt="image" src="https://github.com/user-attachments/assets/499bd298-986a-44e7-8094-a6c8b6802324" />
CRUD Isi Materi
<img width="1919" height="898" alt="image" src="https://github.com/user-attachments/assets/7cdd938a-ba3f-451f-9e96-07ae4d5a75d5" />
