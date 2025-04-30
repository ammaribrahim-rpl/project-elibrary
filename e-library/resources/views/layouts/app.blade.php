<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div>
        <!-- Header -->
        @include ('layouts.header')
        <!-- Sidebar -->


        <div class="flex min-h-content">
            @include('layouts.sidebar')


            <!-- Main Content Area -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('button').addEventListener('click', function() {
            const sidebar = document.querySelector('.md\\:flex-shrink-0');
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('block');
        });
    </script>
</body>

</html>
