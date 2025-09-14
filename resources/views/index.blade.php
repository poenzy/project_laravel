<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="relative min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Selamat Datang, Fachrozzi Rizky Wibowo!</h1>
            </div>
            <div class="mt-8 text-center">
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Ini adalah tugas pertama Anda. Semangat!
                </p>
            </div>
            <div class="mt-6 flex justify-center">
                <a href="https://laravel.com/docs" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Dokumentasi Laravel
                </a>
            </div>
        </div>
    </div>
</body>
</html>