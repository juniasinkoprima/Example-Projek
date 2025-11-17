<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Uji Coba - Landing Page</title>
    <!-- CDN tailwind karna gabisa di download pake npm -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Optional: Custom font atau styling tambahan */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Tambahkan font Inter dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="#" class="text-2xl font-bold text-indigo-600">IoT Explore</a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-gray-600 hover:text-indigo-600">Beranda</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-indigo-600">Fitur</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-indigo-600">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-indigo-600">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bg-indigo-600 text-white py-20 md:py-32 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Projek Contoh
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">
                Platform uji coba IoT kami menyediakan solusi cerdas untuk mengumpulkan data, mengotomatiskan proses, dan membuat keputusan lebih baik.
            </p>
            <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-100 font-bold py-3 px-8 rounded-full text-lg shadow-lg transition duration-300">
                Mulai Uji Coba Gratis
            </a>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Fitur Utama Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center border border-gray-200 hover:shadow-xl transition duration-300">
                    <div class="text-indigo-500 text-5xl mb-4">💡</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Monitoring Real-time</h3>
                    <p class="text-gray-600">Pantau perangkat IoT Anda secara langsung dari mana saja, kapan saja.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center border border-gray-200 hover:shadow-xl transition duration-300">
                    <div class="text-green-500 text-5xl mb-4">📊</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Analisis Data Cerdas</h3>
                    <p class="text-gray-600">Dapatkan wawasan berharga dari data yang terkumpul dengan dashboard intuitif.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center border border-gray-200 hover:shadow-xl transition duration-300">
                    <div class="text-red-500 text-5xl mb-4">⚙️</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Kontrol Jarak Jauh</h3>
                    <p class="text-gray-600">Kendalikan perangkat Anda dari jarak jauh dengan perintah sederhana.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center px-4">
            <p>&copy; 2023 IoT Explore. All rights reserved.</p>
            <p class="text-sm text-gray-400 mt-2">
                Dibuat oleh junia the explorer
            </p>
        </div>
    </footer>

</body>
</html>