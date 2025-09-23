<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luma Haven</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
        }
        .text-gradient {
            background-image: linear-gradient(to right, #e250f2, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .header-bg {
            background-image: url('/car.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="antialiased">
    <div class="header-bg h-full min-h-screen text-white flex flex-col items-center justify-between py-16">
        <div class="overlay"></div>

        <header class="relative z-10 p-8 flex justify-between w-full">
            <div class="text-3xl font-bold">WEB 2</div>
        </header>
        
        <main class="relative z-10 text-center flex-grow">
            <p class="text-2xl mb-4 font-light">WELCOME</p>
            <h1 class="text-8xl font-bold text-gradient">MY NAME<br>FACHROZZI</h1>
        </main>
        
        <section class="relative z-10 p-8 w-full">
            <h2 class="text-3xl font-bold text-center mb-6">Data Dummy</h2>
            <div class="max-w-4xl mx-auto overflow-x-auto">
                <table class="w-full text-left rounded-lg overflow-hidden border-collapse">
                    <thead class="bg-gray-700 text-gray-200">
                        <tr>
                            <th class="p-4 font-semibold">Nama</th>
                            <th class="p-4 font-semibold">Usia</th>
                            <th class="p-4 font-semibold">Kota</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        {{-- Bagian ini mengambil data dari database --}}
                        @foreach($dummyData as $data)
                        <tr class="hover:bg-gray-800 transition-colors">
                            <td class="p-4">{{ $data->name }}</td>
                            <td class="p-4">{{ $data->age }}</td>
                            <td class="p-4">{{ $data->city }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section class="relative z-10 p-8 flex items-center justify-center">
            <h2 class="text-6xl font-bold text-gradient">THE MAGIC OF CODE</h2>
        </section>
    </div>
</body>
</html>