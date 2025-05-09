<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Admin</title>
    @vite('resources/css/app.css') <!-- atau link ke Tailwind jika belum pakai Vite -->
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="h-16 bg-gray-900 flex items-center justify-center">
                <h1 class="text-xl font-bold">E-Library Admin</h1>
            </div>
            <nav class="flex-1 overflow-y-auto px-2 py-4">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <a href="{{ route('books.create') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-plus mr-3"></i> Add New Book
                </a>
                <a href="{{ route('books.index') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-book mr-3"></i> Books
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <i class="fas fa-users mr-3"></i> Users
                </a>
                <form method="POST" action="{{ route('logout') }}" class="mt-6 pt-4 border-t border-gray-700">
                    @csrf
                    <button type="submit" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </button>
                </form>
            </nav>
        </div>
    </div>

</body>
</html>