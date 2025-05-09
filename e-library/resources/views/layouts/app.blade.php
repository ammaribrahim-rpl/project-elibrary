<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Admin Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header -->
    @include('layouts.header')

    <!-- Layout Container -->
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </main>
    </div>

    <script>
        // Optional: Mobile sidebar toggle (pastikan button-nya punya ID atau class yang sesuai)
        const toggleButton = document.querySelector('#mobile-menu-button');
        if (toggleButton) {
            toggleButton.addEventListener('click', function () {
                const sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('hidden');
            });
        }
    </script>

</body>
</html>