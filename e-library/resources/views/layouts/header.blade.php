<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Top Navbar -->
    <header class="bg-white shadow">
        <div class="flex items-center justify-between px-4 py-3 md:px-6">
            <div class="flex items-center">
                <button
                    class="p-1 mr-4 text-gray-500 rounded-md md:hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <i class="fas fa-bars"></i>
                </button>
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-full py-2 pl-10 pr-4 text-sm bg-gray-100 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="text-gray-400 fas fa-search"></i>
                    </div>
                </div>
                <div class="flex items-center ml-4">
                    <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"
                        alt="User avatar">
                    <span class="ml-2 text-sm font-medium text-gray-700">Admin User</span>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
