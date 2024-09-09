<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white py-4 px-6">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="text-2xl font-bold">SELAMAT DATANG</a>
            <ul class="flex space-x-6">
                <li><a href="{{ route('admin') }}" class="hover:underline">Admin</a></li>
                <li><a href="{{ route('guru') }}" class="hover:underline">Guru</a></li>
                <li><a href="{{ route('siswa') }}" class="hover:underline">Siswa</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto px-6">
            <!-- Hero Section -->
            <section class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Welcome</h2>
                <p class="text-gray-600">Manage school operations effectively.</p>
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
