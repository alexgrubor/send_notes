<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
</head>

<body class="antialiased">
    @livewire('layout.guest_navigation')
    <div class="flex min-h-screen flex-col items-center justify-center p-6 mx-auto space-y-4 text-center max-w-7xl lg:p-8">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Welcome to Send Notes App</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300">Save and schedule notes to be sent at the right time.</p>

        <!-- Key Features Section -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Key Features</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                    <i class="fas fa-calendar-alt text-3xl text-blue-500"></i>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mt-4">Schedule Notes</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Effortlessly schedule notes for future delivery.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                    <i class="fas fa-lock text-3xl text-green-500"></i>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mt-4">Secure Storage</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Securely save and manage your important messages.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                    <i class="fas fa-desktop text-3xl text-purple-500"></i>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mt-4">User-Friendly Interface</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Enjoy a user-friendly interface for a seamless experience.</p>
                </div>
            </div>
        </div>

        <!-- Call-to-Action Section -->
        <div class="mt-8">
            <p class="text-lg text-gray-600 dark:text-gray-300">Ready to get started?</p>
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full mt-4 inline-block">
                Get Started
            </a>
        </div>

    </div>

    <footer class="bg-gray-800 text-white p-4 text-center w-full">
        <p>&copy; 2024 Send Notes App. All rights reserved.</p>
    </footer>
</body>
</html>
