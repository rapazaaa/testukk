<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Selamat Datang - Siswa PKL</title>

    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="icon" href="/favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Load CSS & JS dari Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white flex items-center justify-center min-h-screen font-sans">
    <div class="w-full max-w-7xl p-6 lg:p-12">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-8">
            
            <!-- Text Section -->
            <div class="text-center lg:text-left max-w-xl">
                <h1 class="text-3xl lg:text-5xl font-semibold mb-4 leading-normal">
                    Selamat Datang di Aplikasi Siswa PKL
                </h1>
                <p class="text-gray-300 mb-6">
                    Platform ini digunakan untuk mengelola laporan Praktik Kerja Lapangan (PKL). Silakan login untuk mulai menggunakan fitur-fitur yang tersedia.
                </p>

                @if (Route::has('login'))
                    <div class="flex justify-center lg:justify-start gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-6 py-2 rounded-md bg-white text-black hover:bg-gray-200 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-6 py-2 rounded-md bg-white text-black hover:bg-gray-200 transition">
                                Masuk
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-6 py-2 rounded-md border border-white text-white hover:text-gray-400 hover:border-gray-400 transition">
                                    Daftar
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <!-- Image Section -->
            <!-- <div class="w-full max-w-md">
                <img src="https://illustrations.popsy.co/gray/student.svg" alt="Ilustrasi Siswa" class="w-full h-auto" />
            </div> -->
        </div>
    </div>
</body>
</html>
