<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white py-4 px-6">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-2xl font-bold">MySchool</a>
            <ul class="flex space-x-6">
                <li><a href="admin" class="hover:underline">Admin</a></li>
                <li><a href="guru" class="hover:underline">Guru</a></li>
                <li><a href="siswa" class="hover:underline">Siswa</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto px-6">
            <!-- Form Section -->
            <section class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Form Admin</h2>
                <form action="#" method="POST">
                    <!-- CSRF Token -->
                    @csrf

                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama">
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email">
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Submit</button>
                </form>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MySchool. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
